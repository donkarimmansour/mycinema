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
   
         </div>
      </div>
   </div>

   <div class="AsideContext">

    </div>

   <singlesections  >
      <singlesection id="Watch" style="display:none">
         <div class="Watch--Mycima--Single">

            <div class="WatchServers">
            </div>

            <div class="WatchServersEmbed">
               <div class="Inner--WatchServersEmbed">
                  
                  <div class="loader">
                     <svg class="circular" viewBox="25 25 50 50">
                        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
                     </svg>
                  </div>

               </div>
            </div>

            <div class="Download--Mycima--Single">
            </div>

         </div>
      </singlesection>

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
    iniArticle( { "id" : urlParams.get("id") , "table" : "episodes" } );
    iniMore( { "id" : urlParams.get("id") , "table" : "episodes" } );
</script>
<?php

}
?>