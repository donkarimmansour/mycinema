<?php

require_once "includes/template/header.php";
require_once "includes/template/navbar.php";

?>
<mycima>


<mycimabegin>
    <mycimabegin-inner>
        <ul class="tabs"></ul>
    </mycimabegin-inner>
</mycimabegin>

<div class="list--Tabsui">
    <a onClick="iniSearch( { 's' : urlParams.get('actor') , 'so' : 'year' } )" class="hoverable active"><i class="far fa-clock"></i> الاخير</a>
    <a onClick="iniSearch( { 's' : urlParams.get('actor') , 'so' : 'ryear' } )"  class="hoverable "><i class="far fa-folder-open"></i> الاقدم</a>
    <a onClick="iniSearch( { 's' : urlParams.get('actor') , 'so' : 'top' } )"  class="hoverable "><i class="fas fa-fire"></i> الاكثر مشاهدة</a>
    <a onClick="iniSearch( { 's' : urlParams.get('actor') , 'so' : 'last' } )"  class="hoverable "><i class="fas fa-laptop"></i> آخر الإضافات</a>
</div>


<div class="Grid--MycimaPosts">


</div>


</mycima>

<?php
 require_once "includes/template/footer.php";
?>
<script>
  iniSearch( { "s" : urlParams.get("actor") , 'so' : "*" } )
</script>
