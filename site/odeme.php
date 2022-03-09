<?php include "menu.php";?>
<div id="staticbuttons" style="position:absolute;">
<a href="javascript:" onmouseover="myspeed=-thespeed" onmouseout="myspeed=0"><img src="images\yukari.png" border="0"></a><br>
<a href="javascript:" onmouseover="myspeed=thespeed" onmouseout="myspeed=0"><img src="images\asagi.png" border="0"></a>
</div>

<script>



var Hoffset=70 
var Voffset=80 
var thespeed=3 

var ieNOTopera=document.all&&navigator.userAgent.indexOf("Opera")==-1
var myspeed=0

var ieHoffset_extra=document.all? 15 : 0
var cross_obj=document.all? document.all.staticbuttons : document.getElementById? document.getElementById("staticbuttons") : document.staticbuttons

function iecompattest(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function positionit(){
var dsocleft=document.all? iecompattest().scrollLeft : pageXOffset
var dsoctop=document.all? iecompattest().scrollTop : pageYOffset
var window_width=ieNOTopera? iecompattest().clientWidth+ieHoffset_extra : window.innerWidth+ieHoffset_extra
var window_height=ieNOTopera? iecompattest().clientHeight : window.innerHeight

if (document.all||document.getElementById){
cross_obj.style.left=parseInt(dsocleft)+parseInt(window_width)-Hoffset+"px"
cross_obj.style.top=dsoctop+parseInt(window_height)-Voffset+"px"
}
else if (document.layers){
cross_obj.left=dsocleft+window_width-Hoffset
cross_obj.top=dsoctop+window_height-Voffset
}
}

function scrollwindow(){
window.scrollBy(0,myspeed)
}

function initializeIT(){
positionit()
if (myspeed!=0){
scrollwindow()
}
}

if (document.all||document.getElementById||document.layers)
setInterval("initializeIT()",20)

</script>
<!-- Header - set the background image for the header in the line below -->


		<div class="col-md-9">


<br> <div class="card card-body bg-light">
<h4 style="text-align: justify;">&nbsp;</h4>
<h1 style="text-align: justify;">&Ouml;deme</h1>
<p style="text-align: justify;"><strong>Yurt i&ccedil;inden katılacak katılımcılar i&ccedil;in;</strong>&nbsp;<br />1. Sempozyum katılım bedeli 425 TL&rsquo;dir.&nbsp;<br /><br />2. Bir yazar en fazla iki bildiri ile katılabilir. İki bildiri ile katılanlar i&ccedil;in ikinci bildiri &uuml;creti 250 TL&rsquo;dir.&nbsp;<br /><br />3. Sergi i&ccedil;in katılım &uuml;creti 250 TL dir.&nbsp;<br /><br />4. Sergi &ccedil;alışmalarında ikinci eser ile katılacaklar ikinci eseri i&ccedil;in 175 TL &ouml;demelidir.&nbsp;<br /><br />5. Poster Sunum katılım bedeli 200 TL dir.&nbsp;<br /><br />6.Milli eğitim personeli, &ccedil;alışan ya da &ccedil;alışmayan y&uuml;ksek lisans ve doktora &ouml;ğrencileri i&ccedil;in katılım bedeli 300 TL'dir. İkinci bildiri &uuml;creti ise 200 TL'dir.&nbsp;<br /><br />7. Dinleyici olarak katılacaklar i&ccedil;in katılım bedeli 150 TL'dir.(Katılım belgesi,yaka kartı ve oturumlararası ikramları kapsamaktadır)&nbsp;<br /><br />8. &Ccedil;ok yazarlı bildirilerde sorumlu yazar katılım bedelini 425 TL &ouml;der. Diğer yazarların sempozyuma katılması halinde yazar başına 200 TL (oturumlar arası ikramlar, yaka kartı, kongre &ccedil;antası, gezi programı, gala yemeği) &ouml;deme yapmaları gerekmektedir. Kabul edilen bildiri &ouml;demesi yapılırken a&ccedil;ıklama kısmına mutlaka<strong>yazarın/yazarların adı-soyadı</strong>&nbsp;ve ilgili makalenin&nbsp;<strong>id numarası</strong>&nbsp;(İd numarasına &ouml;zet g&ouml;nder b&ouml;l&uuml;m&uuml;nden kullanıcı bilgileriniz ile giriş yaparak ulaşabilirsiniz.) yazılmalıdır.&nbsp;<br /><br />9. &Ccedil;ok yazarlı bildirilerde sorumlu yazar diğer yazarların katılım belgesini alabilir.&nbsp;<br /><br />10. Sempozyum katılım bedeli 20.9.2018 tarihine kadar &ouml;denebilir.&nbsp;<br /><br />11. Sempozyum katılım bedeli aşağıdaki hizmetleri kapsar:&nbsp;<br />Oturumlar arası ikramlar, yaka kartı, katılım belgesi, sempozyum &ccedil;antası, gezi programı, gala yemeği, sunulan bildirilerin kitap olarak basılması , sunulan bildirilerin dergilerde &uuml;cretsiz olarak yayınlanması.&nbsp;<br /><br /><strong>Yurt dışından katılacak katılımcılar i&ccedil;in;</strong>&nbsp;<br />Sempozyum katılım bedeli 400 dolardır. Katılım bedeli 3 gece d&ouml;rt g&uuml;nd&uuml;z otel konaklaması, havalimanı transferleri, sempozyum katılım &uuml;creti, yemekler, promosyon &uuml;r&uuml;nlerini kapsamaktadır.</p>
<p style="text-align: justify;"><strong>Sempozyum Sekreteryası&nbsp;</strong><br />Muhammet &Ouml;zcan&nbsp;<br />+90 0530 473 23 00&nbsp;</p>
<p style="text-align: justify;">TL &Ouml;demeler İ&ccedil;in:&nbsp;<br /><strong>Alıcı Adı:</strong>&nbsp;Asos Eğitim Bilişim Danışmanlık&nbsp;<br /><strong>Banka:</strong>&nbsp;Yapı Kredi Bankası&nbsp;<br /><strong>Şube:</strong>&nbsp;129 Elazığ Şubesi&nbsp;<br /><strong>Hesap No:</strong>&nbsp;48551891&nbsp;<br /><strong>IBAN:&nbsp;</strong>TR38 0006 7010 0000 0048 5518 91&nbsp;<br /><br /><strong>Online &ouml;deme ile de &ouml;zet g&ouml;nder kısmından giriş yaparak kredi kartı ile &ouml;demenizi yapabilirsiniz.&nbsp;</strong></p>
<p style="text-align: justify;">D&ouml;viz &Ouml;demeler İ&ccedil;in:&nbsp;<br /><strong>Alıcı Adı:</strong>&nbsp;Asos Eğitim Bilişim Danışmanlık&nbsp;<br /><strong>Banka:</strong>&nbsp;Yapı Kredi Bankası&nbsp;<br /><strong>Şube:</strong>&nbsp;129 Elazığ Şubesi&nbsp;<br /><strong>Hesap No:</strong>&nbsp;48551891&nbsp;<br /><strong>Swift Kod:</strong>&nbsp;YAPITRISFEX&nbsp;<br /><strong>D&ouml;viz IBAN:&nbsp;</strong>TR78 0006 7010 0000 0048 5519 47</p>
<h1>&nbsp;</h1>


<br><br>
    <br>
    <br>

</div></div></div></div>
<?php include "footer.php";?>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="plugins/jquery-3.2.1.slim.min.js"></script>
<script src="plugins/popper.min.js"></script>
<script src="plugins/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

