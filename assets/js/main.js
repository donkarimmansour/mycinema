// # Responsivness
$("body").on("click", ".Button--Menubar--UX > .NavigationMenu > li.menu-item-has-children > a", function() {
    $(this).parent().toggleClass("open");
    return false;
});
$("body").on("click", ".Button--Menubar--UX > span", function() {
    $(this).parent().toggleClass("open");
});

function Responsivness() {
    if ($(document).width() < 1260) {
        $(".LeftUI").addClass("ToggledSide");
    } else {
        if ($("singlecontainer > singlecontainerleft").length == 0) {
            $(".LeftUI").show();
        }
        $(".LeftUI").removeClass("ToggledSide");
    }
    if ($(document).width() < 1140) {
        if ($(".Button--Menubar--UX").length == 0) {
            $("middle--header").prepend('<div class="Button--Menubar--UX"><span class="hoverable activable"><i class="fa fa-caret-down"></i> تصفح الأقسام</span></div>');
            $("header > middle--header > ul").appendTo(".Button--Menubar--UX");
            $("middle--header").addClass("Menubar--UX");
        }
    } else {
        if ($(".Button--Menubar--UX").length > 0) {
            $(".Button--Menubar--UX > .NavigationMenu").prependTo("middle--header");
            $("middle--header").removeClass("Menubar--UX");
            $(".Button--Menubar--UX").remove();
        }
    }
    if ($(document).width() < 1130) {
        if (!$(".RightUI").hasClass("opened")) {
            $(".RightUI").hide();
        }
        if ($(".RightSideFlex .RightSideFlex--Openmenu").length == 0) {
            $(".RightSideFlex").prepend('<div class="RightSideFlex--Openmenu hoverable activable"><i class="far fa-ellipsis-h"></i></div>');
        }
    } else {
        $(".RightUI").show();
        if ($(".RightSideFlex .RightSideFlex--Openmenu").length > 0) {
            $(".RightSideFlex .RightSideFlex--Openmenu").remove();
        }
    }
    if ($(document).width() < 670) {
        $("singlecontainer > singlecontainerleft").appendTo("singlesections");
        //
        $("header").addClass("double--header");
    } else {
        $("singlesections > singlecontainerleft").appendTo("singlecontainer");
        $("header").removeClass("double--header");
    }
}

$(window).on("resize", function() {
    Responsivness();
});
$(document).ready(function() {
    Responsivness();
});
$(window).on("load", function() {
    Responsivness();
});
Responsivness();


$("body").on("click", "mycima--filter item", function() {

    var ItemSelector = $(this);

    ItemSelector.parent().find("item").removeClass("selected");

    if (ItemSelector.hasClass("clearall--item")) {
        urlParams.delete(ItemSelector.parent().data("param"));
    } else {
        ItemSelector.toggleClass("selected");
        urlParams.set(ItemSelector.parent().data("param"), ItemSelector.find("name").text() || ItemSelector.find("txt").text());
    }

        params = Object.fromEntries(urlParams.entries());

    if (location.pathname.includes("movies.php") || location.pathname.includes("series.php")) {

        iniSlide(params)
        iniMain(params)
        iniPagination(params)
    } else {
        if (ItemSelector.hasClass("clearall--item")) {
            if (location.pathname.includes("movie.php")) {
                location.href = "movies.php"
            } else {
                location.href = "series.php"
            }
        } else {
            if (location.pathname.includes("movie.php")) {
                location.href = "movies.php?" + ItemSelector.parent().data("param") + "=" +  ItemSelector.find("name").text() || ItemSelector.find("txt").text()
            } else {
                location.href = "series.php?" + ItemSelector.parent().data("param") + "=" +  ItemSelector.find("name").text() || ItemSelector.find("txt").text()
            }
        }
       
    }

    



});


$("body").on("click", ".clearall--item", function() {
    $(".clearall--item").closest("filterboxselection").removeClass("open");
});
$("body").on("click", "dropdownlist > title--dropdownlist > span", function() {
    $(this).closest("filterboxselection").removeClass("open");
});
$("body").on("click", "filterboxselection title--filterboxselection", function() {
    var FlterBoxSelection = $(this).parent();
    //
    $("filterboxselection.open").removeClass("open");
    FlterBoxSelection.toggleClass("open");
});




$("body").on("click", ".RightSideFlex--Openmenu", function() {
    $(".RightUI").toggleClass("opened");
    $(".RightUI").toggle();

    //
    if ($(".RightUI").hasClass("opened")) {
        $(".RightSideFlex--Openmenu > i").attr("class", "fas fa-times");
        $("body").append('<div class="Mycima--overlay"></div>');
    } else {
        $(".RightSideFlex--Openmenu > i").attr("class", "fas fa-ellipsis-h");
        $(".Mycima--overlay").remove();
    }
});

var n = 0
$("body").on("click", ".owl-next", function() {

    if ($(".owl-stage-outer .owl-stage .owl-item").last().offset().left < 200) {
        setTimeout(function() {
            n += 200
            $(".owl-stage-outer .owl-stage .owl-item").css("transform", "translate3d(" + n + "px, 0px, 0px)")

        }, 50);
    } else {
        n = 0
        $(".owl-stage-outer .owl-stage .owl-item").css("transform", "translate3d(" + n + "px, 0px, 0px)")

    }

});



$(".LeftUI").scroll(function() {
    if ($(".LeftUI").scrollTop() > 50) {
        $(".GotoTop").addClass("visible");
    }
    if ($(".LeftUI").scrollTop() < 50) {
        $(".GotoTop").removeClass("visible");
    }
});
$("body").on("click", ".GotoTop", function() {
    $(".LeftUI").animate({
        scrollTop: 0
    });
});
$("body").on("click", "GotoTop", function() {
    $(".RightUI").animate({
        scrollTop: 0
    });
});


// # Mycima Filter
$("body").on("click", "mycima--filter > filterbox > title--filterbox", function() {
    if ($(this).parent().hasClass("active")) {
        $(this).parent().removeClass("active");
        $(this).parent().find("list--filterbox").hide(150);
    } else {
        $(this).parent().addClass("active");
        $(this).parent().find("list--filterbox").show(150);
    }
});

$("body").on("click", ".list--Tabsui .hoverable", function() {
    $(".list--Tabsui .hoverable").removeClass("active");
    $(this).addClass("active")
});

const urlParams = new URLSearchParams(window.location.search);
var params = Object.fromEntries(urlParams.entries());

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function iniSlide(data) {
    params.type = "slide"
    const res = fetch("api/api.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(res => {
            return setSlide(res)
        })
}


function setSlide(res) {
    const owlStage = document.getElementsByClassName("owl-stage")[0]

    if (res.length > 1) {
        document.getElementsByClassName("owl-nav")[0].style.display = "block"
    } else {
        document.getElementsByClassName("owl-nav")[0].style.display = "none"
    }

    owlStage.innerHTML = ""

    for (const s in res) {
        let go = urlParams.get("table") == "movies" ? "movie.php" : "serie.php";
        go += `?id=${res[s].id}`;
        let modablaj = res[s].title.includes("مدبلج")  || res[s].translate == "yes" ? "<em class='modablaj'>( نسخة مدبلجة )</em>" : "";

        owlStage.innerHTML += `<div class="owl-item" style="width: auto; margin-left: 16px;">
                                <div class="GridItem">
                                    <div class="Thumb--GridItem">
                                        <a href="${go}" title="${res[s].title}"><span class="BG--GridItem" style="background-image:url(${res[s].posterlink});">
                                        </span><strong dir="auto" class="hasyear">${modablaj}${res[s].title}<span class="year">&nbsp;(${res[s].year})</span></strong></a></div>
                                </div>
                                </div>`
    }

}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function iniMain(data) {
    params.type = "main"
    const res = fetch("api/api.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(res => setMain(res))
}


function setMain(res) {
    const MycimaPosts = document.getElementsByClassName("Grid--MycimaPosts")[0]
    MycimaPosts.innerHTML = ""

    for (const s in res) {
        let go = urlParams.get("table") == "movies" ? "movie.php" : "serie.php";
        go += `?id=${res[s].id}`;
        let modablaj = res[s].title.includes("مدبلج")  || res[s].translate == "yes" ? "<em class='modablaj'>( نسخة مدبلجة )</em>" : "";
        
        MycimaPosts.innerHTML += `<div class="GridItem">
                                    <div class="Thumb--GridItem"><a href="${go}" title="${res[s].title}"><span class="BG--GridItem" style="background-image:url(${res[s].posterlink});">
                                    </span><strong dir="auto" class="hasyear">${modablaj}${res[s].title}<span class="year">&nbsp;(${res[s].year})</span></strong></a></div>
                                </div>`
    }

}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function iniPagination(data) {
    // params.table = location.pathname.substring(location.pathname.lastIndexOf("/")+1 , location.pathname.lastIndexOf("."))
    params.type = "pagination"
    fetch("api/api.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(res => setPagination(res))
}




function setPagination(res) {

    const total = res.total
    const page = res.page
    const pageNumbers = document.getElementsByClassName("page-numbers")[0]
    pageNumbers.innerHTML = ""

    if (page == 0) {} else if (page == 1) {
        for (i = 1; i <= total; i++) {
            if (i == page) {
                pageNumbers.innerHTML += `<li><span class="page-numbers current">${i}</span></li>`
            } else {
                pageNumbers.innerHTML += `<li><a class="page-numbers hoverable activable" onClick="setNewquery('page' , ${i})">${i}</a></li>`
            }
            if (i == 3) break;

        }

        pageNumbers.innerHTML += `<li><span class="page-numbers dots">…</span></li>`
        pageNumbers.innerHTML += `<li><a class="page-numbers hoverable activable" onClick="setNewquery('page' , ${total})">${total}</a></li>`
    } else if (page == total || page == (total - 1) || page == (total - 2)) {
        for (i = (total - 3); i <= total; i++) {
            if (i == page) {
                pageNumbers.innerHTML += `<li><span class="page-numbers current">${i}</span></li>`
            } else {
                pageNumbers.innerHTML += `<li><a class="page-numbers hoverable activable" onClick="setNewquery('page' , ${i})">${i}</a></li>`
            }
            // if(i == 3) break ;

        }
    } else {
        for (i = (page - 1); i <= total; i++) {
            if (i == page) {
                pageNumbers.innerHTML += `<li><span class="page-numbers current">${i}</span></li>`
            } else {
                pageNumbers.innerHTML += `<li><a class="page-numbers hoverable activable" onClick="setNewquery('page' , ${i})">${i}</a></li>`
            }
            if (i == (parseInt(page) + 1)) {
                break;
            }



        }
        pageNumbers.innerHTML += `<li><span class="page-numbers dots">…</span></li>`
        pageNumbers.innerHTML += `<li><a class="page-numbers hoverable activable" onClick="setNewquery('page' , ${total})">${total}</a></li>`
    }


}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function setNewquery(name, value) {
    if (value == "all") {
        urlParams.delete(name);
        params = Object.fromEntries(urlParams.entries());

        iniSlide(params)
        iniMain(params)
        iniPagination(params)
    } else {

        if (location.pathname.includes("movies.php") || location.pathname.includes("series.php")) {
            urlParams.set(name, value);
            params = Object.fromEntries(urlParams.entries());

            iniSlide(params)
            iniMain(params)
            iniPagination(params)
        } else {
            if (location.pathname.includes("movie.php")) {
                location.href = "movies.php?" + name + "=" + value
            } else {
                location.href = "series.php?" + name + "=" + value
            }
        }
    }


}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function iniArticle(p) {
    params.table = p.table
    params.type = "article"
    params.id = p.id
    fetch("api/api.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: JSON.stringify(params)
        })
        .then(res => res.json())
        .then(res => setArticle(res))
}

function setArticle(article) {
  
  if (article["seasons"] != null && article["seasons"] != "" && article["episodes"] != null && article["episodes"] != "") {

       
        $(".AsideContext").html(`<h2><i class="fas fa-tv"></i>  الحلقات و المواسم</h2>
        <div class="Seasons--Episodes">
            <div class="List--Seasons--Episodes">
            </div>
            <div class="Episodes--Seasons--Episodes">
            </div>
        </div>`)


        article["seasons"].forEach(seasons  => {

            let SeasonsClass = (article["article"]["season"] != null) && (seasons["season"] == article["article"]["season"]) ? "selected" : "hoverable activable";

            $(".List--Seasons--Episodes").append(`<a class="${SeasonsClass}" 
                     href="season.php?id=${seasons["id"]}"
                     >موسم ${seasons["season"]}</a>`)

        });


        article["episodes"].forEach(episode => {

            let episodesClass = (article["article"]["episode"] != null) && (episode["episode"] == article["article"]["episode"]) ? "selected" : "hoverable activable";
            $(".Episodes--Seasons--Episodes").append(`</a><a class="${episodesClass}" 
                href="episode.php?id=${episode["id"]}">
                      <div class="Thumb"><span><i class="fa fa-play"></i></span></div>
                      <episodearea>
                          <episodetitle>الحلقة ${episode["episode"]}</episodetitle>
                      </episodearea>
                  </a>`)

        })

    }

   if(article["article"] != null && article["article"] != ""){
   
    let go = location.pathname.includes("movie.php") ? "movies.php" : "series.php"

    $("ol.BreadcrumbsFilters").html("")

    if (article["article"]["season"] != null) {
        $("ol.BreadcrumbsFilters")
            .append(`<li> <a class ="unline" href="series.php"> <span>مسلسلات</span> </a></li><i class="fas fa-chevron-left"></i>`)
    } else {
        $("ol.BreadcrumbsFilters")
            .append(`<li> <a class ="unline" href="movies.php"> <span>افلام</span> </a></li><i class="fas fa-chevron-left"></i>`)
    }



    if (article["article"]["group"] != null && article["article"]["group"] != "empty") {
        $("ol.BreadcrumbsFilters")
            .append(`<li> <a class ="unline" href="${go}?caty=${article["article"]["group"]}"> <span>${article["article"]["group"]}</span> </a></li><i class="fas fa-chevron-left"></i>`)
    }


    if (article["article"]["seriestitle"] != null && article["article"]["seriestitle"] != "") {
        $("ol.BreadcrumbsFilters")
            .append(`<li> <a class ="unline" href="serie.php?id=${article["article"]["seriesid"]}"><span>${article["article"]["seriestitle"]}</span> </a></li><i class="fas fa-chevron-left"></i>`)
    }


    if (article["article"]["season"] != null && article["article"]["season"] != "") {
        $("ol.BreadcrumbsFilters")
            .append(`<li> <a class ="unline" href="season.php?id=${article["article"]["seasonsid"]}"><span>موسم  ${article["article"]["season"]}</span> </a></li><i class="fas fa-chevron-left"></i>`)
    }

    if (article["article"]["episode"] != null && article["article"]["episode"] != "") {
        $("ol.BreadcrumbsFilters")
            .append(`<li> <a class ="unline" href="episode.php?id=${article["article"]["id"]}"><span>الحلقة ${article["article"]["episode"]}</span> </a></li><i class="fas fa-chevron-left"></i>`)
    }

    if (article["article"]["moviestitle"] != null && article["article"]["moviestitle"] != "n/a") {
        $("ol.BreadcrumbsFilters")
            .append(`<li> <a class ="unline" href=""> <span>${article["article"]["moviestitle"]}</span> </a></li>`)
    }

    if (article["article"]["title"] != null && article["article"]["title"] != "empty") {
        $(".Title--Content--Single-begin").html(`<h1>${article["article"]["title"]}</h1>`)
    }


    $(".Terms--Content--Single-begin").html("")

    if (article["article"]["year"] != null  && article["article"]["year"] != "empty") {
        $(".Title--Content--Single-begin").find("h1").append(` (<a  href="${go}?year=${article["article"]["year"]}" class="unline">${article["article"]["year"]}</a>)`)
    }

    if (article["article"]["title_ar"] != null && article["article"]["title_ar"] != "n/a") {
        $(".Terms--Content--Single-begin").append(` <li><span>الإسم بالعربي</span><p dir="auto">${article["article"]["title_ar"]}</p></li>`)
    }
    if (article["article"]["rating"] != null && article["article"]["rating"] != "n/a") {
        $(".Terms--Content--Single-begin").append(` <li><span>التصنيف</span><p><span class="mpaadesc">${article["article"]["rating"]}</span></p></li>`)
    }

    if (article["article"]["quality"] != null && article["article"]["quality"] != "n/a") {
        $(".Terms--Content--Single-begin").append(`<li><span>الجودة</span><p dir="auto"><a class="unline" href="${go}?quality=${ article["article"]["quality"]}">${ article["article"]["quality"]}</a></p></li>`)
    }


    if (article["article"]["age"] != null && article["article"]["age"] != "n/a") {
        $(".Terms--Content--Single-begin").find(".mpaadesc").parent().append(`<a class="unline" href="${go}?age=${article["article"]["age"]}">${article["article"]["age"]}</a>`)
    }

    if (article["article"]["countryLang"] != null) {
        if ((countryLang = JSON.parse(article["article"]["countryLang"]))) {
            if (countryLang.length > 0) {

                $(".Terms--Content--Single-begin").append(` <li><span>البلد و اللغة</span>
                   <p dir="auto"></p>
                   </li>`)
                countryLang.forEach(countryLang => {
                    $(".Terms--Content--Single-begin li p").last().append(`<a class="unline">${countryLang}</a><em></em>`)
                });

            }
        }
    }

    if (article["article"]["duration"] != null && article["article"]["duration"] != "n/a") {
        $(".Terms--Content--Single-begin").append(` <li><span>المدة</span><p dir="auto">${article["article"]["duration"]}</p></li>`)
    }


    if (article["article"]["type"] != null) {
        if ((type = JSON.parse(article["article"]["type"]))) {
            if (type.length > 0) {

                $(".Terms--Content--Single-begin").append(` <li><span>النوع</span>
                   <p dir="auto"></p>
                   </li>`)
                type.forEach(type => {
                    $(".Terms--Content--Single-begin li p").last().append(`<a class="unline"  href="${go}?typ=${type}">${type}</a><em></em>`)
                });

            }
        }
    }

    if (article["article"]["wins"] != null) {
        if ((wins = JSON.parse(article["article"]["wins"]))) {
            if (wins.length > 0) {

                $(".Terms--Content--Single-begin").append(` <li><span>الجوائز</span>
                   <p dir="auto"></p>
                   </li>`)
                wins.forEach(wins => {
                    $(".Terms--Content--Single-begin li p").last().append(`<a class="unline">${wins}</a><em></em>`)
                });

            }
        }
    }

    if (article["article"]["company"] != null) {
        if ((company = JSON.parse(article["article"]["company"]))) {
            if (company.length > 0) {

                $(".Terms--Content--Single-begin").append(` <li><span>شركات الإنتاج</span>
                   <p dir="auto"></p>
                   </li>`)
                company.forEach(company => {
                    $(".Terms--Content--Single-begin li p").last().append(`<a class="unline">${company}</a><em></em>`)
                });

            }
        }
    }

    if (article["article"]["alsoKnown"] != null && article["article"]["alsoKnown"] != "n/a") {
        $(".Terms--Content--Single-begin").append(` <li><span>معروف ايضاََ بـ</span><p dir="auto">${article["article"]["alsoKnown"]}</p></li>`)
    }
    if (article["article"]["location"] != null && article["article"]["location"] != "n/a") {
        $(".Terms--Content--Single-begin").append(` <li><span>مواقع التصوير</span><p dir="auto">${article["article"]["location"]}</p></li>`)
    }
    if (article["article"]["posterlink"] != null) {
        $(".Poster--Single-begin").html(`<a style="background-image:url(${article["article"]["posterlink"]});"
            href="" class="Img--Poster--Single-begin"></a>`)
    }

    // $(".AsideContext").html("")

    if (article["article"]["tdescription"] != null && article["article"]["tdescription"] != "empty") {
        $(".AsideContext").append(`<br><h2><i class="fas fa-paragraph"></i> ${article["article"]["tdescription"]}</h2>`)
    }

    if (article["article"]["description"] != null && article["article"]["description"] != "empty") {
        $(".AsideContext").append(`<div class="StoryMovieContent">${article["article"]["description"]}</div>`)
    }




    // $("singlesection#Watch").html("")

    if (article["article"]["watches"] != null) {
        if ((watches = JSON.parse(article["article"]["watches"]))) {
            if (watches.length > 0) {
                $("singlesection#Watch").show()

                $(".WatchServers").html(`<titleshape>سيرفرات المشاهدة</titleshape><ul class="WatchServersList"><ul></ul></ul>`)
                watches.forEach((watche, i) => {
                    $(".WatchServers ul ul").append(`<li style="--color:#E30713;">
                       <btn data-id="${i}" class="hoverable activable"><i class="fas fa-play"></i>
                          <strong>${watche["site"]}</strong>
                          </btn>
                       </li>`)
                });
                $(".WatchServers btn:eq(0)").parent().addClass("selected")

                $(".Inner--WatchServersEmbed").html(`<iframe name="watch" src="${watches[0]["link"]}" id="IframeEmbed" height="100%" width="100%" allowfullscreen="" frameborder="0" scrolling="no"></iframe>`)

            }
        }
    }





   

    if (article["article"]["downloads"] != null) {
                $(".Download--Mycima--Single").html(`<titleshape>سيرفرات التحميل</titleshape><ul class="List--Download--Mycima--Single"></ul>`)

                $(".Download--Mycima--Single ul").append(`<li>
                                        <a class="hoverable activable" onclick="iniDownload( {'url' : '${article["article"]["link"]}' , 'po' : '*'} );">
                                        <i class="fas fa-file-download"></i> 
                                        <quality>تحميل</quality>
                                        </a>
                                       </li>`)
    }


    $(".Season--Download--Mycima--Single").html("")

    if (article["article"]["seasonsdownloads"] != null) {

                    $(".Season--Download--Mycima--Single").append(`<li>
                        <a class="hoverable activable" onclick="iniDownload( {'url' : '${article["article"]["link"]}' , 'po' : 'ss'} );">
                        <i class="fas fa-file-download"></i> 
                        <quality>تحميل المسلسل</quality>
                        </a>
                    </li>`)
    }


    if (article["article"]["trailer"] != null && article["article"]["trailer"] != "empty") {
        $("singlesection#trailer").html(`
                           <h2 class="singlesection--title">إعلان العرض</h2>
                           <br>
                           <div class="TrailerCode">
                              <iframe allowfullscreen="" name="trailer" src=" ${article["article"]["trailer"]}" 
                                 frameborder="0" scolling="no" width="600" height="350" ></iframe>
                           </div>`)
    }


    // $("singlesection#Teamwork").html("")

    if (article["article"]["actors"] != null) {
        if ((actors = JSON.parse(article["article"]["actors"]))) {
            if (actors.length > 0) {
                $("singlesection#Teamwork").show()
                $("singlesection#Teamwork").html(`<div class="Teamwork--Area">
                                       <h2>فريق العمل</h2>
                                       <div class="List--Teamwork">
                                          <ul class="Inner--List--Teamwork">
                                          </ul>
                                       </div>
                                    </div>`)


                for (let index = 0; index < actors.length; index++) {
                    $("singlesection#Teamwork ul.Inner--List--Teamwork").append(`<li style="background-image:url(${actors[index]["img"]});">
                                           <a href="actor.php?actor=${actors[index]["actor"]}">
                                           <span class="Photo"><i class="fas fa-user-alt"></i></span>
                                           <div class="ActorName"><span dir="auto">${actors[index]["actor"]}</span><em dir="auto">${actors[index]["role"]}</em></div>
                                           </a>
                                       </li>`)
                    if (index == 3) break
                }

                if (actors.length > 4) {
                    $("singlesection#Teamwork div.List--Teamwork").append(`<a class="MoreTeamworkList"><i class="fas fa-plus"></i> يوجد <em><span>${actors.length - 4}</span></em> ممثل آخر</a>`)

                }



            }
        }
    }

 }//if

}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function iniDownload(p) {
    params.type = "download"
    params.url = p.url
    params.po = p.po
    fetch("api/api.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: JSON.stringify(params)
        })
        .then(res => res.json())
        .then(res => setDownload(res))
}

function setDownload(res){

$(".Download--Mycima--Single ul li.rm").remove()
$(".Season--Download--Mycima--Single li.rm").remove()

if(res.length > 0){
    res.forEach(down => {
        if (down["t"] == "ss") {
            $(".Season--Download--Mycima--Single").append(`<li class="rm">
                    <a class="hoverable activable" href="${down["link"]}">
                    <i class="fas fa-file-download"></i> 
                    <quality> ${down["quality"]}</quality>
                    <resolution><i class="fal fa-arrow-to-bottom"></i> ${down["resolution"]}</resolution>
                    </a>
                </li>`)

        } else {
            $(".Download--Mycima--Single ul").append(`<li class="rm">
                    <a class="hoverable activable" href="${down["link"]}">
                    <i class="fas fa-file-download"></i> 
                    <quality> ${down["quality"]}</quality>
                    <resolution><i class="ion ion-md-laptop"></i> ${down["resolution"]}</resolution>
                    </a>
                </li>`)
            
        }
    });

}else{
    alert("لا يوجد رابط للتحميل")
}

}




$("body").on("click", ".WatchServers btn", function() {

    if (watches.length > 0) {
        $(".Inner--WatchServersEmbed iframe").attr("src", watches[$(this).data("id")]["link"])
        $(".WatchServers btn").parent().removeClass("selected")
        $(this).parent().addClass("selected")
    }

});

$("body").on("click", "a.MoreTeamworkList", function() {

    if (actors.length > 4) {

        let extraActors = actors.slice(4);

        if ($("singlesection#Teamwork ul.Inner--List--Teamwork li").length == 4) {
            $(".MoreTeamworkList span").text("0")

            extraActors.forEach(actor => {
                $("singlesection#Teamwork ul.Inner--List--Teamwork").append(`<li style="background-image:url(${actor["img"]});">
                        <a href="actor.php?actor=${actor["actor"]}">
                        <span class="Photo"><i class="fas fa-user-alt"></i></span>
                        <div class="ActorName"><span dir="auto">${actor["actor"]}</span><em dir="auto">${actor["role"]}</em></div>
                        </a>
                    </li>`)
            });

        } else {
            $(".MoreTeamworkList span").text(actors.length - 4)

            $('singlesection#Teamwork ul.Inner--List--Teamwork li').slice(4).remove();
        }
    }

});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function iniMore(p) {
    urlParams.set("table", p.table)
    params.table = p.table
    params.type = "more"
    params.id = p.id
    fetch("api/api.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: JSON.stringify(params)
        })
        .then(res => res.json())
        .then(res => setMore(res))
}


function setMore(res) {


 if (res.length > 0) {
    $("singlerelated#more").show()
    $("singlerelated#more").html(`<h2>عروض مشابهة</h2><div class="Grid--MycimaPosts"></div>`)

    for (const s in res) {
        let modablaj = res[s].title.includes("مدبلج")  || res[s].translate == "yes" ? "<em class='modablaj'>( نسخة مدبلجة )</em>" : "";
        let go = urlParams.get("table") == "movies" ? "movie.php" :
            urlParams.get("table") == "series" ? "serie.php" :
            urlParams.get("table") == "episodes" ? "episode.php" :
            urlParams.get("table") == "seasons" ? "season.php" :
            "/";

        go += `?id=${res[s].id}`;

        $("singlerelated#more .Grid--MycimaPosts").append(`<div class="GridItem">
                                        <div class="Thumb--GridItem"><a href="${go}" title="${res[s].title}"><span class="BG--GridItem" style="background-image:url(${res[s].posterlink});">
                                        </span><strong dir="auto" class="hasyear">${modablaj}${res[s].title}<span class="year">&nbsp;(${res[s].year})</span></strong></a></div>
                                    </div>`)
    }
 }
 
}




///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function iniSearch(p) {
    params.search = p.s
    params.so = p.so
    params.type = "search"
    fetch("api/api.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: JSON.stringify(params)
        })
        .then(res => res.json())
        .then(res => setSearch(res))
}


function setSearch(res) {

    if ($(".Searching--Overlay").html() == null || $(".Searching--Overlay").html() == "") {
        $(".Grid--MycimaPosts").html("")

        for (const s in res) {
            let modablaj = res[s].title.includes("مدبلج")  || res[s].translate == "yes" ? "<em class='modablaj'>( نسخة مدبلجة )</em>" : "";

            $(".Grid--MycimaPosts").append(`<div class="GridItem">
                <div class="Thumb--GridItem"><a href="${res[s].table}.php?id=${res[s].id}" title="${res[s].title}"><span class="BG--GridItem" style="background-image:url(${res[s].posterlink});">
                </span><strong dir="auto" class="hasyear">${modablaj}${res[s].title}<span class="year">&nbsp;(${res[s].year})</span></strong></a></div>
            </div>`)
        }
    } else {
        $(".Searching--Overlay .Grid--MycimaPosts").html("")

        for (const s in res) {
            let modablaj = res[s].title.includes("مدبلج")  || res[s].translate == "yes" ? "<em class='modablaj'>( نسخة مدبلجة )</em>" : "";

            $(".Searching--Overlay .Grid--MycimaPosts").append(`<div class="GridItem">
                <div class="Thumb--GridItem"><a href="${res[s].table}.php?id=${res[s].id}" title="${res[s].title}"><span class="BG--GridItem" style="background-image:url(${res[s].posterlink});">
                </span><strong dir="auto" class="hasyear">${modablaj}${res[s].title}<span class="year">&nbsp;(${res[s].year})</span></strong></a></div>
            </div>`)
        }
    }


}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$("body").on("focus , keyup , click", ".search--userarea--rightbar  , .Results--Searching--Overlay .hoverable", function() {

    if ($(".Searching--Overlay").html() == null || $(".Searching--Overlay").html() == "") {

        $("body").append(`<div class="Searching--Overlay">

    <form-search class="search--userarea--rightbar">
       <input type="text" name="s" autocomplete="off" autocorrect="off" spellcheck="false" placeholder="إبحث">
       <button><i class="fas fa-search"></i></button>
       <div class="Close--SearchingBox hoverable activable"><i class="fas fa-times"></i></div>
    </form-search>
 
    <div class="Results--Searching--Overlay">
          <div class="list--Tabsui">
          <a onClick="urlParams.set('so' , 'year')" class="hoverable active"><i class="far fa-clock"></i> الاخير</a>
          <a onClick="urlParams.set('so' , 'ryear')"  class="hoverable"><i class="far fa-folder-open"></i> الاقدم</a>
          <a onClick="urlParams.set('so' , 'top')"  class="hoverable"><i class="fas fa-fire"></i> الاكثر مشاهدة</a>
          <a onClick="urlParams.set('so' , 'last')"  class="hoverable"><i class="fas fa-laptop"></i> آخر الإضافات</a>
      </div>
       <div class="Grid--MycimaPosts">
 
       </div>
    </div>
 </div>`)
    }

    $(".search--userarea--rightbar input").val($(".search--userarea--rightbar input").val())
    iniSearch({
        "s": $(".search--userarea--rightbar input").val(),
        'so': urlParams.get("so") || "*"
    })

});

$("body").on("click", ".Searching--Overlay .Grid--MycimaPosts .GridItem , .Results--Searching--Overlay .hoverable", function(e) {
    e.stopPropagation();
});


$("body").on("click", ".Searching--Overlay", function() {

    $(".search--userarea--rightbar input").val("")
    $(".Searching--Overlay").remove()

});