<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Max-Age: 86400");

require_once "../includes/function/simple_html_dom.php" ;
require_once "../includes/function/connect.php";


if($_SERVER["REQUEST_METHOD"] ==  "POST"){

      $json_str = file_get_contents('php://input');
      $_IPOST = json_decode($json_str , true) ;


    $page = (isset($_IPOST["page"]) && is_numeric($_IPOST["page"])) ? filter_var($_IPOST["page"], FILTER_SANITIZE_NUMBER_INT) : 1 ;
    $id = (isset($_IPOST["id"]) && is_numeric($_IPOST["id"])) ? filter_var($_IPOST["id"], FILTER_SANITIZE_NUMBER_INT) : 1 ;
    $caty = isset($_IPOST["caty"]) ? "AND `group` like '%" . str_replace(" " , "%" , filter_var($_IPOST["caty"] , FILTER_SANITIZE_STRING)) . "%'" : "" ;

     $age = isset($_IPOST["age"]) ? "AND `age` like '%" .  filter_var($_IPOST["age"] , FILTER_SANITIZE_STRING) . "%' " : "" ;
     $year = isset($_IPOST["year"]) ? "AND `year` like '%" .  filter_var($_IPOST["year"] , FILTER_SANITIZE_STRING) . "%' " : "" ;
     $quality = isset($_IPOST["quality"]) ? "AND `quality` like '%" .  filter_var($_IPOST["quality"] , FILTER_SANITIZE_STRING) . "%' " : "" ;
     $type = isset($_IPOST["typ"]) ? "AND `type` like '%" .  filter_var($_IPOST["typ"] , FILTER_SANITIZE_STRING) . "%' " : "" ;
     $episodes = isset($_IPOST["episodes"]) ? "episodes" : "" ;
     
    $order = "" ;
    if( isset($_IPOST["order"])){
        if ($_IPOST["order"] == "year") {
            $order = "ORDER BY CAST(year AS UNSIGNED) DESC" ;
        } elseif ($_IPOST["order"] == "top") {
            $order = "ORDER BY CAST(count AS UNSIGNED) DESC" ;    
        } elseif ($_IPOST["order"] == "ryear") {
            $order = "ORDER BY CAST(year AS UNSIGNED) ASC" ;    
        }elseif ($_IPOST["order"] == "last") {
            $order = "ORDER BY id DESC" ;    
        }else{
            $order = "episodes" ;    
        }
    }else{
        $order = "ORDER BY CAST(year AS UNSIGNED) DESC" ;
    }
      //  echo $order ;
    $query = "WHERE id != -1 {$caty} {$age} {$quality} {$type} {$year}" ;
 
    if(isset($_IPOST["type"])){

    
    if($_IPOST["type"] == "slide" && isset($_IPOST["table"]) ){
   
        $moviesSlide = $db->prepare("SELECT * FROM {$_IPOST["table"]} {$query} ORDER BY CAST(count AS UNSIGNED) DESC Limit 10");
        $moviesSlide->execute();
        $fetchSlide = $moviesSlide->fetchall();
        $rowSlide = $moviesSlide->rowcount();

        if($rowSlide > 0 ){
            echo json_encode($fetchSlide , JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ;
        }else{
            echo json_encode([] , JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ;
        }

    }else if($_IPOST["type"] == "main" && isset($_IPOST["table"])){
        $sc = (($page-1) * 44);

        if($order == "episodes"){
            $moviesMain = $db->prepare("SELECT * FROM episodes ORDER BY id DESC LiMIT 44 OFFSET {$sc}");
           }else{
             $moviesMain = $db->prepare("SELECT * FROM {$_IPOST["table"]} {$query} {$order} LiMIT 44 OFFSET {$sc}");

           }
  
          $moviesMain->execute();
          $fetchMain = $moviesMain->fetchall();
          $rowMain = $moviesMain->rowcount();
  
          if($rowMain > 0){
            echo json_encode($fetchMain , JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ;
          }else{
            echo json_encode([] , JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ;
          }

    }else if($_IPOST["type"] == "pagination" && isset($_IPOST["table"])){

        if($order == "episodes"){
            $stmt = $db->prepare("SELECT COUNT(`id`) FROM episodes ORDER BY id DESC");
        }else{
            $stmt = $db->prepare("SELECT COUNT(`id`) FROM {$_IPOST["table"]} {$query}");
        }
  
        $stmt->execute();
        $total = ceil($stmt->fetchcolumn() / 44) ;
        
        if($total  > 0){
            echo json_encode(array("total" => $total , "page" => $page) , JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ;
        }else{
            echo json_encode(array("total" => 0 , "page" => 0) , JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ;

        }

    }else if($_IPOST["type"] == "article" && isset($_IPOST["table"])){
      
        $data = [] ;


            if($_IPOST["table"] == "series"){
                $up = $db->prepare("UPDATE series SET count = count + 1  WHERE `id` = ?");               
                $up->execute(array($id));

                $stmt = $db->prepare("SELECT series.*, series.title as `seriestitle` , series.id as `seriesid` , episodes.description , episodes.tdescription FROM series JOIN seasons on seasons.serie = series.id JOIN episodes on episodes.season = seasons.id WHERE series.id = ? LIMIT 1;");               
                $stmt->execute(array($id));
                $article = $stmt->fetch();

                $seasons = $db->prepare("SELECT `id` ,`serie` ,`season`  FROM `seasons` WHERE `serie` = ?");
                $seasons->execute(array($id));
                $seasonsfetch = $seasons->fetchall();
               
                $episodes = $db->prepare("SELECT `id` ,`season` ,`episode` FROM episodes WHERE `season` = (SELECT `id` FROM seasons WHERE `serie` = ? LIMIT 1)");
                $episodes->execute(array($id));
                $episodesfetch = $episodes->fetchall();
                $data = array("seasons" => $seasonsfetch , "episodes" =>  $episodesfetch);

             }else if($_IPOST["table"] == "seasons"){
                    $stmt = $db->prepare("SELECT  seasons.id as `seasonsid`, seasons.title, seasons.title_ar, seasons.quality, seasons.alsoKnown, seasons.location, seasons.rating, seasons.age, seasons.duration, seasons.year, seasons.poster, seasons.posterlink, seasons.company, seasons.type, seasons.countryLang, seasons.wins, seasons.link, seasons.serie, seasons.season , seasons.downloads as seasonsdownloads , series.title as `seriestitle` , series.id as `seriesid` , series.trailer , series.actors , series.group, episodes.description , episodes.tdescription FROM series JOIN seasons on seasons.serie = series.id JOIN episodes on episodes.season = seasons.id WHERE seasons.id = ? LIMIT 1;");               
                    $stmt->execute(array($id));
                    $article = $stmt->fetch();

                    $seasons = $db->prepare("SELECT `id` ,`serie` ,`season` FROM `seasons` WHERE `serie` = (SELECT `serie` FROM seasons WHERE `id` =  ?);");
                    $seasons->execute(array($id));
                    $seasonsfetch = $seasons->fetchall();

                    $episodes = $db->prepare("SELECT `id` ,`season` ,`episode` FROM `episodes` WHERE `season` = ?");
                    $episodes->execute(array($id));
                    $episodesfetch = $episodes->fetchall();
                    $data = array("seasons" => $seasonsfetch , "episodes" =>  $episodesfetch);

              }else if($_IPOST["table"] == "episodes"){
                    $stmt = $db->prepare("SELECT episodes.id , episodes.title , episodes.title_ar , episodes.quality , episodes.alsoKnown , episodes.location , episodes.rating , episodes.age , episodes.duration , episodes.year , episodes.company , episodes.type , episodes.downloads , episodes.watches , episodes.countryLang , episodes.wins , episodes.link , episodes.season as seasonid , episodes.description , episodes.tdescription , episodes.get , episodes.episode , seasons.id as `seasonsid` , seasons.posterlink , seasons.season , seasons.downloads as seasonsdownloads , series.title as `seriestitle` , series.id as `seriesid` , series.actors , series.trailer , series.group FROM episodes JOIN seasons on episodes.season = seasons.id JOIN series on series.id = seasons.serie WHERE episodes.id = ?");               
                    $stmt->execute(array($id));
                    $article = $stmt->fetch();

                    $seasons = $db->prepare("SELECT  `id`  , `serie` ,`season`  FROM seasons WHERE `serie` = 
                    (SELECT `serie`  FROM seasons WHERE `id` = 
                    (SELECT `season` FROM episodes WHERE `id` = ? ))");
                    $seasons->execute(array($id));
                    $seasonsfetch = $seasons->fetchall();

                    $episodes = $db->prepare("SELECT `id` ,`season` ,`episode` FROM `episodes` WHERE `season` = (SELECT `season` FROM episodes WHERE `id` = ?)");
                    $episodes->execute(array($id));
                    $episodesfetch = $episodes->fetchall();
                    $data = array("seasons" => $seasonsfetch , "episodes" =>  $episodesfetch);

                }else if($_IPOST["table"] == "movies"){
                    $up = $db->prepare("UPDATE movies SET count = count + 1  WHERE `id` = ?");               
                    $up->execute(array($id));

                    $stmt = $db->prepare("SELECT movies.* , movies.title as `moviestitle`  FROM movies WHERE `id` = ?");               
                    $stmt->execute(array($id));
                    $article = $stmt->fetch();
                }

                
                $row = $stmt->rowcount();

        if($row  > 0){
         
            $data += array("article" => $article );
          //   var_dump($data);
            echo json_encode($data, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ;
        }else{
            echo json_encode([] , JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ;

        }

    }else if($_IPOST["type"] == "more" && isset($_IPOST["table"])){

        $stmt = $db->prepare("SELECT * FROM {$_IPOST["table"]}
                            WHERE `title` like 
                            CONCAT('%',
                                (SELECT IF(trim(`title`) LIKE 'the%',
                                            SUBSTRING_INDEX(SUBSTRING_INDEX(`title`, ' ' , 2), ' ' , -1) ,
                                            SUBSTRING_INDEX(`title`, ' ' , 1)) 
                                    as title 
                                    FROM {$_IPOST["table"]} WHERE `id` = ?)
                                , '%')
                              AND (`title`  !=  (SELECT  title FROM {$_IPOST["table"]} WHERE `id` = ?))
                             LIMIT 12 ;");
         //var_dump($stmt) ;

        $stmt->execute(array($id,$id));
        $row = $stmt->rowcount();
        $elm = $stmt->fetchall();

        if($row  > 0){
            echo json_encode($elm , JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ;
        }else{
            echo json_encode([] , JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ;

        }

    }else if($_IPOST["type"] == "search"){

        $so = "" ;
        if( isset($_IPOST["so"])){
            if ($_IPOST["so"] == "year") {
                $so = "ORDER BY CAST(year AS UNSIGNED) DESC" ;
            } elseif ($_IPOST["so"] == "top") {
                $so = "ORDER BY CAST(count AS UNSIGNED) DESC" ;    
            } elseif ($_IPOST["so"] == "ryear") {
                $so = "ORDER BY CAST(year AS UNSIGNED) ASC" ;    
            }elseif ($_IPOST["so"] == "last") {
                $so = "ORDER BY id DESC" ;    
            }
        }else{
            $so = "ORDER BY CAST(year AS UNSIGNED) DESC" ;
        }

        $search = isset($_IPOST["search"]) ? " '%" . str_replace(" " , "%" , filter_var($_IPOST["search"] , FILTER_SANITIZE_STRING)) . "%' " : "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" ;

        $stmt = $db->prepare("SELECT `id`, `title`, `year`, `posterlink`,`translate` , `actors`, `count` , 'movie' as `table` FROM `movies` WHERE `title` LIKE {$search} OR `actors` LIKE {$search} UNION SELECT `id`, `title`, `year`, `posterlink`, `translate`, `actors`, `count` , 'serie' as `table` FROM `series` WHERE `title` LIKE {$search} OR `actors` LIKE {$search} {$so} LIMIT 50;");

        $stmt->execute(array());
        $row = $stmt->rowcount();
        $elm = $stmt->fetchall();

        if($row  > 0){
            echo json_encode($elm , JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ;
        }else{
            echo json_encode([] , JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ;

        }

    }else if($_IPOST["type"] == "download" && isset($_IPOST["url"])){

        function getHtml($url){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            if(curl_error($ch)){
                    getHtml($url);
            }else{
              return str_get_html($response);
            }
        }

        $downloadsArr = array();
        //$d = str_replace(".actor",".win",$_IPOST["url"]);
        $d = strtr($_IPOST["url"] , array(".actor"=>".win" , ".dev"=>".win" , "2053"=>"2083" , ));
         
        if($_IPOST["po"] == "ss"){
            foreach (getHtml($d)->find(".Inner--Content--Single-begin .Season--Download--Mycima--Single li") as $D) {
                array_push($downloadsArr, array(
                    "resolution" => @$D->find("resolution", 0)->plaintext,
                    "quality" => @$D->find("quality", 0)->plaintext,
                    "link" => @$D->find("a", 0)->href,
                    "t" => "ss",
                ));
            }
        }else{
            foreach(getHtml($d)->find(".Download--Mycima--Single .List--Download--Mycima--Single li") as $D){
                array_push($downloadsArr , array("resolution" => $D->find("resolution" , 0)->plaintext , "quality" => $D->find("quality" , 0)->plaintext , "link" => $D->find("a" , 0)->href , "t" => "*", ) ) ;
            }
        }
        if(count($downloadsArr) > 0){
           echo json_encode($downloadsArr , JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ;
        }else{
            echo json_encode([] , JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ;

        }

    }




   }

}
