<div class="RightUI">
   <div class="userarea--rightbar">
      <form-search class="search--userarea--rightbar">
         <input type="text" name="s" autocomplete="off" autocorrect="off" spellcheck="false" placeholder="إبحث">
         <button><i class="fa fa-search"></i></button></form-search>
         
      <ul class="menu-userarea--rightbar">
         <!-- class="selected" -->
         <li >
         <a href="/"><i class="fas fa-home"></i><span>الصفحة الرئيسية</span></a></li>
         <li><a href="movies.php"><i class="fas fa-film"></i><span>أفلام</span></a></li>
         <li><a href="series.php"><i class="fas fa-compact-disc"></i><span>مسلسلات</span></a></li>
         <!-- <li><a href=""><i class="fas fa-turtle colorui--anime"></i><span>انيمي و كرتون</span></a></li>
         <li><a href=""><i class="fas fa-dumbbell colorui--wrestling"></i><span>مصارعة حرة</span></a></li>
         <li><a href=""><i class="fas fa-satellite-dish colorui--tv"></i><span>برامج تليفزيونية</span></a></li> -->
      </ul>
   </div>
   <mycima--filter>
      <title--mycima--filter>الفلاتر و التخصيص</title--mycima--filter>
      <filterboxselection>
         <title--filterboxselection class="uicolors--mpaa hoverable activable"><i class="fa fa-users-cog"></i><span>الفئة العمرية</span><strong>الرقابة على المشاهد</strong></title--filterboxselection>
         <dropdownlist>
            <title--dropdownlist>إختر الفئة العمرية<span class="hoverable activable"><i class="fa fa-times"></i></span></title--dropdownlist>
            <list--dropdownlist data-param="age">
               <item class="clearall--item hoverable activable">
                  <checkbox></checkbox>
                  <txt>
                     <name>بدون تخصيص</name>
                     <describe>عرض كل الفئات بدون رقابة مخصصة</describe>
                  </txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>
                  <name>R</name>
                  <describe>للكبار فقط, يحتوى على مشاهد فاضحة او عنيفة.</describe>
                  <txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>
                  <name>PG-13</name>
                  <describe>يجب إرشاد الآباء, لا يناسب الأطفال أقل من 13 سنة</describe>
                  <txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>
                  <name>TV-MA</name>
                  <describe>يحتوي على مشاهد فاضحة و عنيفة ، غير ملائم لمن هم أقل من 17 عام </describe>
                  <txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>
                  <name>TV-14</name>
                  <describe>يجب إرشاد الآباء, لا يناسب الأطفال أقل من 14 سنة.</describe>
                  <txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>
                  <name>PG</name>
                  <describe>ينصح بإرشاد الآباء, بعض المشاهد ربما لا تناسب الاطفال</describe>
                  <txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>
                  <name>TV-PG</name>
                  <describe>تحتاج إرشاد من الأباء حيث أنها قد تحتوي على مشاهد غير ملائمة</describe>
                  <txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>
                  <name>G</name>
                  <describe>فيلم مناسب لجميع الأعمار و لا يوجد به أى مشاهد فاضحة أو عنيفة أو أى أفكار تحتاج إرشادات</describe>
                  <txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>
                  <name>TV-Y7</name>
                  <describe>للكبار فقط و غير ملائم عرضه بأى شكل لمن هم أقل من 17 عام</describe>
                  <txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>
                  <name>TV-G</name>
                  <describe>ملائم لجميع الأعمار و لكنه غير موجه للأطفال</describe>
                  <txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>
                  <name>TV-Y</name>
                  <describe>مناسب للأطفال و جميع الأعمار</describe>
                  <txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>
                  <name>NC-17</name>
                  <describe>للكبار فقط و يحتوي على مشاهد عارية و فاضحة جدا</describe>
                  <txt>
               </item>
            </list--dropdownlist>
         </dropdownlist>
      </filterboxselection>
      <divider></divider>
      <filterbox filteringbox="" taxonomy="genre" class="">
         <title--filterbox class="hoverable"><span>نوع العرض</span><strong>إختر نكهتك السينمائية</strong>
         <i class="fa fa-angle-down"></i></title--filterbox>
         <list--filterbox style="display: none;">
            <inner--list--filterbox data-param="typ">
               <item class="clearall--item hoverable activable">
                  <txt>جميع الأنواع</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>دراما</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>اكشن</txt>
               </item>
               <item class="hoverable activable">
                  <txt>رومانسي</txt>
               </item>
               <item class="hoverable activable">
                  <txt>جريمة</txt>
               </item>
               <item class="hoverable activable">
                  <txt>اثارة</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>كوميديا</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>غموض</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>مغامرات</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>فانتازيا</txt>
               </item>
               <item class="hoverable activable">
                  <txt>رعب</txt>
               </item>
               <item class="hoverable activable">
                  <txt>خيال علمي</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>تاريخي</txt>
               </item>
               <item class="hoverable activable">
                  <txt>عائلي</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>سيرة ذاتية</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>كوميدي</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>انيميشن</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>كرتون</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>رياضة</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>موسيقي</txt>
               </item>
               <item class="hoverable activable">
                  <txt>وثائقي</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>حربي</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>ويسترن</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>قصير</txt>
               </item>
               <item class="hoverable activable">
                  <txt>رياضي</txt>
               </item>
               <item class="hoverable activable">
                  <txt>حروب</txt>
               </item>
            </inner--list--filterbox>
         </list--filterbox>
      </filterbox>
      <divider></divider>
      <filterboxselection>
         <title--filterboxselection class="hoverable activable"><i class="fa fa-search-minus"></i><span>سنة الإنتاج</span><strong>تخصيص سنة الإنتاج</strong></title--filterboxselection>
         <dropdownlist>
            <title--dropdownlist>إختر السنة<span class="hoverable activable"><i class="fa fa-times"></i></span></title--dropdownlist>
            <years--dropdownlist data-param="year">
               <item class="clearall--item hoverable activable">
                  <checkbox></checkbox>
                  <txt>الكل</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1936</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1937</txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>1938</txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>1939</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1940</txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>1941</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1942</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1943</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1944</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1945</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1946</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1947</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1948</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1949</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1950</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1951</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1952</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1953</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1954</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1955</txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>1956</txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>1957</txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>1958</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1959</txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>1960</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1961</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1962</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1963</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1964</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1965</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1966</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1967</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1968</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1969</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1970</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1971</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1972</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1973</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1974</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1975</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1976</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1977</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1978</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1979</txt>
               </item>
               <item class="hoverable activable">
                  <checkbox></checkbox>
                  <txt>1980</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1981</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1982</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1983</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1984</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1985</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1986</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1987</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1988</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1989</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1990</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1991</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1992</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1993</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1994</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1995</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1996</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1997</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1998</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>1999</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2000</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2001</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2002</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2003</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2004</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2005</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2006</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2007</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2008</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2009</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2010</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2011</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2012</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2013</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2014</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2015</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2016</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2017</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2018</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2019</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2020</txt>
               </item>
               <item class="hoverable activable" >
                  <checkbox></checkbox>
                  <txt>2021</txt>
               </item>
            </years--dropdownlist>
         </dropdownlist>
      </filterboxselection>
      <divider></divider>
      <filterbox>
         <title--filterbox class="hoverable"><span>جودة العرض</span><strong>جودة تناسب جهازك</strong><i class="fa fa-angle-down"></i></title--filterbox>
         <list--filterbox style="display: none;">
            <inner--list--filterbox class="minilist" data-param="quality">
               <item class="clearall--item hoverable activable">
                  <txt>جميع الجودات</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p HDTV</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p WEBRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p BluRay</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>1080p BluRay</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>1080p WEB-DL</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>1080p HD</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p HD</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p WEB-Dl</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>HDTV</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>1080p WEBRip</txt>
               </item>
               <item class="hoverable activable">
                  <txt>BluRay</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>1080p HDTV</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p HDCAM</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>WEB-DL</txt>
               </item>
               <item class="hoverable activable">
                  <txt>WEBRip</txt>
               </item>
               <item class="hoverable activable">
                  <txt>1080p HDTC</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>DVD Rip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>DVD</txt>
               </item>
               <item class="hoverable activable">
                  <txt>DVDRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>1080p BDRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>HD</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>1080p HDRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p HDRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>HDCAM</txt>
               </item>
               <item class="hoverable activable">
                  <txt>1080p BRRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>HDRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p WEB</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p HDTC</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p HC HDRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>1080p HDCAM</txt>
               </item>
               <item class="hoverable activable">
                  <txt>720p BRRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>DVDSCR</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p BDRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>1080p WEB</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p HDTS</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>1080p HC WEB-DL</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>TVRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>480p WEBRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>72</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p WEBRrip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>BRRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>BDRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>DSR</txt>
               </item>
               <item class="hoverable activable">
                  <txt>1080p HC HDRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>DVBRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>1080p BRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>DSRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>HDTVRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>HC HDRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p DVD</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>1080p FHDRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p DVDSCR</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p WEBRi</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>480p HDTV</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720p DVDRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>720 DVDRip</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>WEBRip SCr</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>Bloray</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>480p WEB-DL</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>480p HD</txt>
               </item>
               <item class="hoverable activable" >
                  <txt>4K</txt>
               </item>
            </inner--list--filterbox>
         </list--filterbox>
      </filterbox>
      <divider></divider>
     
   </mycima--filter>
   <gototop class="hoverable activable"><i class="fas fa-level-up-alt"></i> ذهاب الى أعلي</gototop>
</div>
<div class="LeftUI ToggledSide">

   <widgetattach>
      <strong>جميع الأنواع</strong>
      <div class="genres--list--widget">
         <a onClick="setNewquery('typ' , 'all')" class="hoverable activable">الكل</a>
         <a onClick="setNewquery('typ' , 'دراما')" class="hoverable activable">دراما</a>
         <a onClick="setNewquery('typ' , 'اكشن')" class="hoverable activable">اكشن</a>
         <a onClick="setNewquery('typ' , 'رومانسي')" class="hoverable activable">رومانسي</a>
         <a onClick="setNewquery('typ' , 'جريمة')" class="hoverable activable">جريمة</a>
         <a onClick="setNewquery('typ' , 'اثارة')" class="hoverable activable">اثارة</a>
         <a onClick="setNewquery('typ' , 'كوميديا')" class="hoverable activable">كوميديا</a>
         <a onClick="setNewquery('typ' , 'غموض')" class="hoverable activable">غموض</a>
         <a onClick="setNewquery('typ' , 'مغامرات')" class="hoverable activable">مغامرات</a>
         <a onClick="setNewquery('typ' , 'فانتازيا')" class="hoverable activable">فانتازيا</a>
         <a onClick="setNewquery('typ' , 'رعب')" class="hoverable activable">رعب</a>
         <a onClick="setNewquery('typ' , 'خيال علمي')" class="hoverable activable">خيال علمي</a>
         <a onClick="setNewquery('typ' , 'تاريخي')" class="hoverable activable">تاريخي</a>
         <a onClick="setNewquery('typ' , 'عائلي')" class="hoverable activable">عائلي</a>
         <a onClick="setNewquery('typ' , 'سيرة ذاتية')" class="hoverable activable">سيرة ذاتية</a>
         <a onClick="setNewquery('typ' , 'كوميدي')" class="hoverable activable">كوميدي</a>
         <a onClick="setNewquery('typ' , 'انيميشن')" class="hoverable activable">انيميشن</a>
         <a onClick="setNewquery('typ' , 'كرتون')" class="hoverable activable">كرتون</a>
         <a onClick="setNewquery('typ' , 'رياضة')" class="hoverable activable">رياضة</a>
         <a onClick="setNewquery('typ' , 'موسيقي')" class="hoverable activable">موسيقي</a>
         <a onClick="setNewquery('typ' , 'وثائقي')" class="hoverable activable">وثائقي</a>
         <a onClick="setNewquery('typ' , 'حربي')" class="hoverable activable">حربي</a>
         <a onClick="setNewquery('typ' , 'ويسترن')" class="hoverable activable">ويسترن</a>
         <a onClick="setNewquery('typ' , 'قصير')" class="hoverable activable">قصير</a>
         <a onClick="setNewquery('typ' , 'رياضي')" class="hoverable activable">رياضي</a>
         <a onClick="setNewquery('typ' , 'حروب')" class="hoverable activable">حروب</a>
      </div>
   </widgetattach>
                

   <widgetattach>
      <strong>جميع الفئات</strong>
      <div class="genres--list--widget">
         <a onClick="setNewquery('age' , 'all')" class="hoverable activable">الكل</a>
         <a onClick="setNewquery('age' , 'R')" class="hoverable activable">R</a>
         <a onClick="setNewquery('age' , 'PG-13')" class="hoverable activable">PG-13</a>
         <a onClick="setNewquery('age' , 'TV-MA')" class="hoverable activable">TV-MA</a>
         <a onClick="setNewquery('age' , 'TV-14')" class="hoverable activable">TV-14</a>
         <a onClick="setNewquery('age' , 'PG')" class="hoverable activable">PG</a>
         <a onClick="setNewquery('age' , 'TV-PG')" class="hoverable activable">TV-PG</a>
         <a onClick="setNewquery('age' , 'G')" class="hoverable activable">G</a>
         <a onClick="setNewquery('age' , 'TV-Y7')" class="hoverable activable">TV-Y7</a>
         <a onClick="setNewquery('age' , 'TV-G')" class="hoverable activable">TV-G</a>
         <a onClick="setNewquery('age' , 'TV-Y')" class="hoverable activable">TV-Y</a>
         <a onClick="setNewquery('age' , 'NC-17')" class="hoverable activable">NC-17</a>
      </div>
   </widgetattach>

   <widgetattach>
      <strong>جميع الجودات</strong>
      <div class="genres--list--widget">
         <a onClick="setNewquery('quality' , 'all')" class="hoverable activable">الكل</a>
         <a onClick="setNewquery('quality' , '720p HDTV')" class="hoverable activable">720p HDTV</a>
         <a onClick="setNewquery('quality' , '720p WEBRip')" class="hoverable activable">720p WEBRip</a>
         <a onClick="setNewquery('quality' , '720p BluRay')" class="hoverable activable">720p BluRay</a>
         <a onClick="setNewquery('quality' , '1080p BluRay')" class="hoverable activable">1080p BluRay</a>
         <a onClick="setNewquery('quality' , '1080p WEB-DL')" class="hoverable activable">1080p WEB-DL</a>
         <a onClick="setNewquery('quality' , '1080p HD')" class="hoverable activable">1080p HD</a>
         <a onClick="setNewquery('quality' , '720p HD')" class="hoverable activable">720p HD</a>
         <a onClick="setNewquery('quality' , '720p WEB-Dl')" class="hoverable activable">720p WEB-Dl</a>
         <a onClick="setNewquery('quality' , 'HDTV')" class="hoverable activable">HDTV</a>
         <a onClick="setNewquery('quality' , '1080p WEBRip')" class="hoverable activable">1080p WEBRip</a>
         <a onClick="setNewquery('quality' , 'BluRay')" class="hoverable activable">BluRay</a>
         <a onClick="setNewquery('quality' , '1080p HDTV')" class="hoverable activable">1080p HDTV</a>
         <a onClick="setNewquery('quality' , '720p HDCAM')" class="hoverable activable">720p HDCAM</a>
         <a onClick="setNewquery('quality' , 'WEB-DL')" class="hoverable activable">WEB-DL</a>
         <a onClick="setNewquery('quality' , 'WEBRip')" class="hoverable activable">WEBRip</a>
         <a onClick="setNewquery('quality' , '1080p HDTC')" class="hoverable activable">1080p HDTC</a>
         <a onClick="setNewquery('quality' , 'DVD Rip')" class="hoverable activable">DVD Rip</a>
         <a onClick="setNewquery('quality' , 'DVD')" class="hoverable activable">DVD</a>
         <a onClick="setNewquery('quality' , 'DVDRip')" class="hoverable activable">DVDRip</a>
         <a onClick="setNewquery('quality' , '1080p BDRip')" class="hoverable activable">1080p BDRip</a>
         <a onClick="setNewquery('quality' , '1080p HDRip')" class="hoverable activable">1080p HDRip</a>
         <a onClick="setNewquery('quality' , 'HD')" class="hoverable activable">HD</a>
         <a onClick="setNewquery('quality' , '720p HDRip')" class="hoverable activable">720p HDRip</a>
         <a onClick="setNewquery('quality' , '1080p BRRip')" class="hoverable activable">1080p BRRip</a>
         <a onClick="setNewquery('quality' , 'HDRip')" class="hoverable activable">HDRip</a>
         <a onClick="setNewquery('quality' , '720p WEB')" class="hoverable activable">720p WEB</a>
         <a onClick="setNewquery('quality' , '720p HDTC')" class="hoverable activable">720p HDTC</a>
         <a onClick="setNewquery('quality' , '720p HC HDRip')" class="hoverable activable">720p HC HDRip</a>
         <a onClick="setNewquery('quality' , '1080p HDCAM')" class="hoverable activable">1080p HDCAM</a>
         <a onClick="setNewquery('quality' , '720p BRRip')" class="hoverable activable">720p BRRip</a>
         <a onClick="setNewquery('quality' , 'DVDSCR')" class="hoverable activable">DVDSCR</a>
         <a onClick="setNewquery('quality' , '720p BDRip')" class="hoverable activable">720p BDRip</a>
         <a onClick="setNewquery('quality' , '1080p WEB')" class="hoverable activable">1080p WEB</a>
         <a onClick="setNewquery('quality' , '1080p HC WEB-DL')" class="hoverable activable">1080p HC WEB-DL</a>
         <a onClick="setNewquery('quality' , 'TVRip')" class="hoverable activable">TVRip</a>
         <a onClick="setNewquery('quality' , '480p WEBRip')" class="hoverable activable">480p WEBRip</a>
         <a onClick="setNewquery('quality' , '720p HDTS')" class="hoverable activable">720p HDTS</a>
         <a onClick="setNewquery('quality' , '720p WEBRrip')" class="hoverable activable">720p WEBRrip</a>
         <a onClick="setNewquery('quality' , '72')" class="hoverable activable">72</a>
         <a onClick="setNewquery('quality' , 'BRRip')" class="hoverable activable">BRRip</a>
         <a onClick="setNewquery('quality' , 'BDRip')" class="hoverable activable">BDRip</a>
         <a onClick="setNewquery('quality' , 'DSR')" class="hoverable activable">DSR</a>
         <a onClick="setNewquery('quality' , '1080p HC HDRip')" class="hoverable activable">1080p HC HDRip</a>
         <a onClick="setNewquery('quality' , 'DVBRip')" class="hoverable activable">DVBRip</a>
         <a onClick="setNewquery('quality' , '1080p BRip')" class="hoverable activable">1080p BRip</a>
         <a onClick="setNewquery('quality' , 'DSRip')" class="hoverable activable">DSRip</a>
         <a onClick="setNewquery('quality' , 'HC HDRip')" class="hoverable activable">HC HDRip</a>
         <a onClick="setNewquery('quality' , 'HDTVRip')" class="hoverable activable">HDTVRip</a>
         <a onClick="setNewquery('quality' , '720p DVD')" class="hoverable activable">720p DVD</a>
         <a onClick="setNewquery('quality' , '1080p FHDRip')" class="hoverable activable">1080p FHDRip</a>
         <a onClick="setNewquery('quality' , '720p DVDSCR')" class="hoverable activable">720p DVDSCR</a>
         <a onClick="setNewquery('quality' , '720p WEBRi')" class="hoverable activable">720p WEBRi</a>
         <a onClick="setNewquery('quality' , '480p HDTV')" class="hoverable activable">480p HDTV</a>
         <a onClick="setNewquery('quality' , '720p DVDRip')" class="hoverable activable">720p DVDRip</a>
         <a onClick="setNewquery('quality' , '720 DVDRip')" class="hoverable activable">720 DVDRip</a>
         <a onClick="setNewquery('quality' , 'WEBRip SCr')" class="hoverable activable">WEBRip SCr</a>
         <a onClick="setNewquery('quality' , 'Bloray')" class="hoverable activable">Bloray</a>
         <a onClick="setNewquery('quality' , '480p WEB-DL')" class="hoverable activable">480p WEB-DL</a>
         <a onClick="setNewquery('quality' , '480p HD')" class="hoverable activable">480p HD</a>
         <a onClick="setNewquery('quality' , '4K')" class="hoverable activable">4K</a>
      </div>
   </widgetattach>

   
</div>
<footer>
   <copyrights><span>تصميم و برمجة </span><a href="" rel="nofollow" target="_blank">
      <!-- <img width="120" height="23" src="" alt="" title=""></a> -->
   </copyrights>
   <about__us><a href="">About us</a></about__us>
</footer>
</rootinside>
</root>
<div class="GotoTop"><span><i class="fas fa-level-up-alt"></i> للأعلي</span></div>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/main.js"></script>








</body>
</html>