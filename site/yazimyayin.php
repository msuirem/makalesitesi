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
    <p>Bildiri Özetleri (Kayıt ve Özet Gönder) sekmesinden girilecektir.</p>

<p>Bildiri özetleri en az 200, en fazla 500 kelimeden oluşmalı, yapılan veya yapılacak çalışmanın özgünlüğü, elde edilen bulgular, araştırmada kullanılan yöntem gibi bilgilere yer verilmelidir.
</p><p>
İngilizce başlık, makale özeti ve anahtar kelimelerin yazımı isteğe bağlıdır.</p>
<p>
Tam metin Yazım kuralları:</p>
<p>
Sempozyum bildirilerinde Sobiad yazım yayın ilkeleri esas alınacaktır.</p>

<p>Kâğıt Boyutu: A4 Dikey</p>
<p>Üst Kenar Boşluk: 3 cm</p>
<p>Alt Kenar Boşluk: 3 cm</p>
<p>Sol Kenar Boşluk: 3 cm</p>
<p>Sağ Kenar Boşluk: 3 cm</p>
<p>Yazı Tipi: Times New Roman</p>
<p>Yazı Boyutu: Başlıkta 12, özet ve metin 11 ve dipnotlarda 9 punto</p>
<p>Paragraf Aralığı: 6 nk </p>
<p>Satır Aralığı: Metinde 1.15, dipnotlarda Tek</p>

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