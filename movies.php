<?php

require_once "includes/template/header.php";
require_once "includes/template/navbar.php";

?>




<mycima>


<mycimabegin>
    <mycimabegin-inner>
        <ul class="tabs"></ul>

        <tab--mycimabegin-inner>
            <div class="Slider--Grid">
                <div class="Items--Slider--Grid owl-rtl owl-loaded owl-drag">

                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2808px;">

              

                        </div>
                    </div>

                    <div class="owl-nav" style="display:none;">
                        <!-- <div class="owl-prev"><a class="Slides-prev"><i class="fal fa-angle-left"></i></a></div> -->
                        <div class="owl-next"><a class="Slides-next"><i class="fa fa-angle-right"></i></a></div>
                    </div>
                </div>
            </div>
        </tab--mycimabegin-inner>
    </mycimabegin-inner>
</mycimabegin>



<div class="list--Tabsui">
    <a onClick="setNewquery('order' , 'year')" class="hoverable active"><i class="far fa-clock"></i> أفلام جديدة</a>
    <a onClick="setNewquery('order' , 'ryear')"  class="hoverable "><i class="far fa-folder-open"></i> افلام قديمة</a>
    <a onClick="setNewquery('order' , 'top')"  class="hoverable "><i class="fas fa-fire"></i> الاكثر مشاهدة</a>
    <a onClick="setNewquery('order' , 'last')"  class="hoverable "><i class="fas fa-laptop"></i> آخر الإضافات</a>
</div>


<div class="Grid--MycimaPosts">


</div>


<div class="pagination">
    <ul class="page-numbers">
    </ul>
</div>

</mycima>

<?php
 require_once "includes/template/footer.php";
?>
<script>

urlParams.set("table" , "movies")
params = Object.fromEntries(urlParams.entries());
iniSlide(params)
iniMain(params)
iniPagination(params)

</script>
