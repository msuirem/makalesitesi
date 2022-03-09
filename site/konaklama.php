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


<br><div class="card card-body bg-light">
    <p>Konaklama İstanbul Deluxe Golden Horn Hotel'de sağlanacaktır. </p>
	
	<div class="mod" data-md="1002" data-hveid="CAsQLg" data-ved="2ahUKEwiFouTcvvjbAhWNZVAKHYapC8kQkCkoAzAUegQICxAu">
<div class="Z1hOCe">
<div class="zloOqf kno-fb-ctx" data-dtype="d3ifr" data-local-attribute="d3adr" data-ved="2ahUKEwiFouTcvvjbAhWNZVAKHYapC8kQghwoADAUegQICxAv"><span class="w8qArf"><a class="fl" href="https://www.google.com.tr/search?sa=X&amp;rlz=1C1PRFE_enTR713TR713&amp;hotel_dates=2018-07-08,2018-07-09&amp;rlla=0&amp;hotel_occupancy=2&amp;biw=1350&amp;bih=635&amp;q=deluxe+golden+horn+hotel+adres&amp;stick=H4sIAAAAAAAAAOPgE-LWT9c3LEmJjy8xM9eSzU620s_JT04syczPgzOsElNSilKLiwFfqPaZLgAAAA&amp;ved=2ahUKEwiFouTcvvjbAhWNZVAKHYapC8kQ6BMwFHoECAsQMA" data-ved="2ahUKEwiFouTcvvjbAhWNZVAKHYapC8kQ6BMwFHoECAsQMA">Adres</a>:&nbsp;</span><span class="LrzXr">Binbirdirek Mh., Binbirdere Meydanı Sk. No:1, 34400 istanbul/Fatih/İstanbul</span></div>
</div>
</div>
<div class="mod" data-md="1006" data-hveid="CAsQMQ" data-ved="2ahUKEwiFouTcvvjbAhWNZVAKHYapC8kQkCkoBDAVegQICxAx">
<div class="Z1hOCe">
<div class="zloOqf kno-fb-ctx" style="text-align: justify;" data-dtype="d3ifr" data-local-attribute="d3ph" data-ved="2ahUKEwiFouTcvvjbAhWNZVAKHYapC8kQ8I0BKAAwFXoECAsQMg"><span class="w8qArf"><a class="fl" href="https://www.google.com.tr/search?sa=X&amp;rlz=1C1PRFE_enTR713TR713&amp;hotel_dates=2018-07-08,2018-07-09&amp;rlla=0&amp;hotel_occupancy=2&amp;biw=1350&amp;bih=635&amp;q=deluxe+golden+horn+hotel+telefon&amp;ved=2ahUKEwiFouTcvvjbAhWNZVAKHYapC8kQ6BMwFXoECAsQMw" data-ved="2ahUKEwiFouTcvvjbAhWNZVAKHYapC8kQ6BMwFXoECAsQMw">Telefon</a>:&nbsp;</span><span class="LrzXr zdqRlf kno-fv"><a class="fl r-iyWLIxAZKpR0" title="Hangout &uuml;zerinden ara" href="https://www.google.com.tr/search?rlz=1C1PRFE_enTR713TR713&amp;hotel_dates=2018-07-08,2018-07-09&amp;rlla=0&amp;hotel_occupancy=2&amp;q=Deluxe+Golden+Horn+Hotel&amp;sa=X&amp;ved=0ahUKEwjT8ovbvvjbAhUJalAKHT3IC1wQuzEICigA&amp;biw=1350&amp;bih=635#" data-number="+902125181717" data-pstn-out-call-url="" data-rtid="iyWLIxAZKpR0" data-ved="2ahUKEwiFouTcvvjbAhWNZVAKHYapC8kQkAgoADAVegQICxA0">(0212) 518 17 17</a></span></div>
</div>
</div>
<br><br>
	<img src="images/otel1.jpg" alt="Örnek Resim"  class="rounded"  width="782" height="300">
	<br><br><br>
<img src="images/otel.jpg" alt="Örnek Resim"  class="rounded"  width="782" height="300">
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