<?php
   require_once "includes/template/header.php";
   require_once "includes/template/navbar.php";
  // ob_start();


if(!isset($_GET["id"]) || !is_numeric($_GET["id"])){

 //  header("location:movies.php") ;
   exit;

} else{
 

?>
<mycima class="separated--top">


   <div class="Single-begin">
      <div class="BG--Single-begin"></div>
         <div class="Poster--Single-begin">
         </div>
     
       <div class="Content--Single-begin">
         <div class="Inner--Content--Single-begin">

            <div class="Breadcrumb--UX">
               <ol  class="BreadcrumbsFilters">

               </ol>
            </div>

            <div class="Title--Content--Single-begin">
            </div>

            <ul class="Terms--Content--Single-begin" >
            </ul>

              <ul class="Season--Download--Mycima--Single">
            
               </ul>
   
         </div>
      </div>
   </div>

   <div class="AsideContext">

    </div>

   <singlesections  >
 
   <singlesection></singlesection>

      <singlesection id="trailer">
     
      </singlesection>
      

      <singlesection id="Teamwork" style="display:none">

      </singlesection>

   </singlesections>


    <singlerelated id="more" style="display:none">

   </singlerelated>
   
</mycima>
<?php
   require_once "includes/template/footer.php";
?>
<script>

    iniArticle( { "id" : urlParams.get("id") , "table" : "series" } );
    iniMore({ "id" : urlParams.get("id") , "table" : "series" });
</script>
<?php

}
?>