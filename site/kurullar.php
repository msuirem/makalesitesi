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


<br>
<div class="card card-body bg-light">
<table border="0" cellpadding="0" align="center">
<tbody>
<tr>
<td>
<p align="center"><strong>Sempozyum Onursal Başkanı</strong></p>
<p align="center">Yıldız Teknik &Uuml;niversitesi Rekt&ouml;r&uuml;&nbsp;<br />Prof. Dr. Bahri Şahin</p>
</td>
</tr>
<tr>
<td>
<p align="center"><strong>Sempozyum D&uuml;zenleme Kurulu Başkanı</strong></p>
<p style="text-align: center;" align="center">Prof. Dr. Halit Keskin</p>
</td>
</tr>
<tr>
<td width="591">
<table width="100%">
<tbody>
<tr>
<td valign="top" width="50%">
<p align="center"><strong>Sempozyum D&uuml;zenleme Kurulu</strong></p>
<p align="center">Do&ccedil;. Dr. Selim Hilmi &Ouml;zkan&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi B&uuml;lent Alcı&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Gen&ccedil; Osman İlhan&nbsp;</p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td align="center" valign="top">
<p><strong>Bilim Kurulu</strong></p>
<p>Prof. Dr. Ali Tilbe&nbsp;<br />Prof. Dr. Abdulkadir Bahar&ccedil;i&ccedil;ek&nbsp;<br />Prof. Dr. Adnan &Ccedil;elik&nbsp;<br />Prof. Dr. Ahmet Yatkın&nbsp;<br />Prof. Dr. Aleksandra Vranes&nbsp;<br />Prof. Dr. Ali Yılmaz G&uuml;nd&uuml;z&nbsp;<br />Prof. Dr. Anaid Donabedian Inalco&nbsp;<br />Prof. Dr. A. Melek &Ouml;zyetgin&nbsp;<br />Prof. Dr. Belkacem Boumahdi&nbsp;<br />Prof. Dr. B&uuml;nyamin Akdemir&nbsp;<br />Prof. Dr. Canan &Ccedil;etin&nbsp;<br />Prof. Dr. Candalene J. McCombs&nbsp;<br />Prof. Dr. Cemile Hesenzade&nbsp;<br />Prof. Dr. Choi Han &ndash; Woo&nbsp;<br />Prof. Dr. Cihan Işıkhan&nbsp;<br />Prof. Dr. &Ccedil;ağatay İnam Karahan&nbsp;<br />Prof. Dr. Daoud Djefafla&nbsp;<br />Prof. Dr. David Carr&nbsp;<br />Prof. Dr. Elena Oganova&nbsp;<br />Prof. Dr. Elif Y&uuml;ksel Oktay&nbsp;<br />Prof. Dr. Emin &Ccedil;elebi&nbsp;<br />Prof. Dr. Erica H. Gilson&nbsp;<br />Prof. Dr. Erol Asilt&uuml;rk&nbsp;<br />Prof. Dr. Eva Agnes Csato&nbsp;<br />Prof. Dr. Fadime Suata Alpaslan&nbsp;<br />Prof. Dr. Flera Sayfulina&nbsp;<br />Prof. Dr. G&uuml;ldane Araz Ay&nbsp;<br />Prof. Dr. Gwendolyn Alexander&nbsp;<br />Prof. Dr. H. Birsen Hekimoglu-&Ouml;rs&nbsp;<br />Prof. Dr. Hacer Tor&nbsp;<br />Prof. Dr. Himmet Karadal&nbsp;<br />Prof. Dr. Hocine Boukara&nbsp;<br />Prof. Dr. Işıl Ulu&ccedil;am Wegmann&nbsp;<br />Prof. Dr. İ. G&uuml;lsel Sev&nbsp;<br />Prof. Dr. İbrahim &Ouml;rnek&nbsp;<br />Prof. Dr. İhsan &Ccedil;ap&ccedil;ıoğlu&nbsp;<br />Prof. Dr. Joachim Klose&nbsp;<br />Prof. Dr. Kathleen Malu&nbsp;<br />Prof. Dr. Kazuyuki Nagai&nbsp;<br />Prof. Dr. Khalil Awda&nbsp;<br />Prof. Dr. Kim Hyo Joung&nbsp;<br />Prof. Dr. Liptai Kalman&nbsp;<br />Prof. Dr. Ljiljana Markovi&ccedil;&nbsp;<br />Prof. Dr. Lubov Kopanitsya&nbsp;<br />Prof. Dr. M. Ali Kırman&nbsp;<br />Prof. Dr. Mahmut Tekin&nbsp;<br />Prof.Dr. Mehmet Koştumoğlu&nbsp;<br />Prof. Dr. Mashood Baderin&nbsp;<br />Prof. Dr. Mohammed Hardan Ali&nbsp;<br />Prof. Dr. Moheddin Bananeh&nbsp;<br />Prof. Dr. Mustafa Arslan&nbsp;<br />Prof. Dr. Mustafa İsmail Kaya&nbsp;<br />Prof. Dr. Nabeel Madallah Hamad Al-Obaidi&nbsp;<br />Prof. Dr. Nassıra Hedjerassı&nbsp;<br />Prof. Dr. Olena Ivanovska&nbsp;<br />Prof. Dr. Orhan &Ccedil;oban&nbsp;<br />Prof. Dr. Recep Dikici&nbsp;<br />Prof. Dr. Robert Elliott&nbsp;<br />Prof. Dr. Roberto Veraldi&nbsp;<br />Prof. Dr. Sanjin Kodric&nbsp;<br />Prof. Dr. Sedat Cereci&nbsp;<br />Prof. Dr. Serpil Ağcakaya&nbsp;<br />Prof. Dr. Sevil Mehdiyeva&nbsp;<br />Prof. Dr. Sevgi Soylu Koyuncu&nbsp;<br />Prof. Dr. Sven Tarp&nbsp;<br />Prof. Dr. Tahir Akgemci&nbsp;<br />Prof. Dr. Tarık &Ouml;zcan&nbsp;<br />Prof. Dr. Tetsuya Sato&nbsp;<br />Prof. Dr. Tofiq Abd&uuml;lhasanli&nbsp;<br />Prof. Dr. Tom Schoeneman&nbsp;<br />Prof. Dr. Viktoria Serzhanova</p>
<p>&nbsp;</p>
<p>Do&ccedil;. Dr. Ahmet Talimciler&nbsp;<br />Do&ccedil;. Dr. Besir Mustafayev&nbsp;<br />Do&ccedil;. Dr. Beyhan Kanter&nbsp;<br />Do&ccedil;. Dr. Beyhan Zabun&nbsp;<br />Do&ccedil;. Dr. Bur&ccedil;in Cevdet &Ccedil;etins&ouml;z&nbsp;<br />Do&ccedil;. Dr. Duygu Kızıldağ&nbsp;<br />Do&ccedil;. Dr. D&uuml;ndar Alikılı&ccedil;&nbsp;<br />Do&ccedil;. Dr. Elmas Şahin&nbsp;<br />Do&ccedil;. Dr. Elmira Memmedova Keke&ccedil;&nbsp;<br />Do&ccedil;. Dr. Erdal Arlı&nbsp;<br />Do&ccedil;. Dr. Esra Birkan Baydan&nbsp;<br />Do&ccedil;. Dr. Evrim Mayat&uuml;rk Akyol&nbsp;<br />Do&ccedil;. Dr. Fatih Arslan&nbsp;<br />Do&ccedil;. Dr. Fatih Mehmet &Ouml;cal&nbsp;<br />Do&ccedil;. Dr. Fatma Nur Yorgancılar&nbsp;<br />Do&ccedil;. Dr. Ferit İzci&nbsp;<br />Do&ccedil;. Dr. Fulya Erl&uuml;le&nbsp;<br />Do&ccedil;. Dr. Funda Kızıler Emer&nbsp;<br />Do&ccedil;. Dr. Gulnara Kanbarova&nbsp;<br />Do&ccedil;. Dr. G&uuml;l Kayalıdere&nbsp;<br />Do&ccedil;. Dr. G&uuml;ldane Araz Ay&nbsp;<br />Do&ccedil;. Dr. G&uuml;ler Tozkoparan&nbsp;<br />Do&ccedil;. Dr. Halil İbrahim Koruca&nbsp;<br />Do&ccedil;. Dr. Halil Tokcan&nbsp;<br />Do&ccedil;. Dr. Hasan G&uuml;ner Berkant&nbsp;<br />Do&ccedil;. Dr. İrina Pokrovskaya&nbsp;<br />Do&ccedil;. Dr. Kader S&uuml;rmeli&nbsp;<br />Do&ccedil;. Dr. Kemal Erol&nbsp;<br />Do&ccedil;. Dr. K&uuml;rşat &Ccedil;elik&nbsp;<br />Do&ccedil;. Dr. L&uuml;tfiye &Ouml;zdemir&nbsp;<br />Do&ccedil;. Dr. Mahmut Yardımcıoğlu&nbsp;<br />Do&ccedil;. Dr. Mary Beth Schaefer&nbsp;<br />Do&ccedil;. Dr. Mehmet Ak&nbsp;<br />Do&ccedil;. Dr. Muhittin Kapanşahin&nbsp;<br />Do&ccedil;. Dr. Murat Elmalı&nbsp;<br />Do&ccedil;. Dr. Mutlu Deveci&nbsp;<br />Do&ccedil;. Dr. Nazile Abdullazade&nbsp;<br />Do&ccedil; Dr. Necdet Yaşar Bayatlı&nbsp;<br />Do&ccedil;. Dr. Nevin &Ouml;zdemir&nbsp;<br />Do&ccedil;. Dr. Olca S&uuml;rgevil&nbsp;<br />Do&ccedil;. Dr. &Ouml;zlem Demirel D&ouml;nmez&nbsp;<br />Do&ccedil;. Dr. Sare Şeng&uuml;l&nbsp;<br />Do&ccedil;. Dr. Sibel Kılı&ccedil;&nbsp;<br />Do&ccedil;. Dr. Şafak Kaypak&nbsp;<br />Do&ccedil;. Dr. Tamer Budak&nbsp;<br />Do&ccedil;. Dr. Tarana Khalilova Ahmed Gizi&nbsp;<br />Do&ccedil;. Dr. Tuba B&uuml;y&uuml;kbeşe&nbsp;<br />Do&ccedil;. Dr. Tudora Arnaut&nbsp;<br />Do&ccedil;. Dr. Turan Akkoyun&nbsp;<br />Do&ccedil;. Dr. Yegane &Ccedil;ağlayan&nbsp;<br />Do&ccedil;. Dr. Yılmaz Karadeniz&nbsp;<br />Do&ccedil;. Dr. Yusuf Şahin</p>
<p>&nbsp;</p>
<p>Dr. &Ouml;ğretim &Uuml;yesi Ahmed Aldyab&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Bahadır K&ouml;ksalan&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Banu Tanrı&ouml;ver&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Beng&uuml; Hırlak&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Beyzade Nadir &Ccedil;etin&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Birol İpek&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Bur&ccedil;ak Erdal&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Burcu &Ouml;zge &Ouml;zaslan &Ccedil;alışkan&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Duygu Ko&ccedil;ak&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Ebru Onurlubaş&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Fadime Tosik Din&ccedil;&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi G&uuml;ls&uuml;m Vezir Oğuz&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Hakan Yalap&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi İbrahim G&ouml;r&uuml;c&uuml;&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi İdil Tuncer Kazancı&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi İzzet Taşar&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi K&uuml;rşat Yusuf Ayta&ccedil;&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi L&uuml;tfi Alıcı&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi L&uuml;tfiye &Ouml;zaydın Akyol&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Mehmet Levent Erdaş&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Mehmet Yılmaz&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Mustafa Uğraş&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Nil&uuml;fer Alimen&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Nurhodja Akbulaev&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi &Ouml;zlem Yaşar Uğurlu&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Ramazan Yirci&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Recep &Ouml;zdemir&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Se&ccedil;il Eda Kartal&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Semra Kıranlı G&uuml;ng&ouml;r&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Sezgin Demir&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Tahir &Ccedil;elikbağ&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Tuncay Yavuz &Ouml;zdemir&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi T&uuml;rkan Askerova&nbsp;<br />Dr. &Ouml;ğretim &Uuml;yesi Yavuz Haykır</p>
<p>&nbsp;</p>
<p>&nbsp;&nbsp;<br />Dr. El&ccedil;in İbrahimov</p>
<br />
<p><strong>Sempozyum Sekreteri</strong></p>
<p>Muhammet &Ouml;zcan&nbsp;<br />0530 473 23 00</p>
</td>
</tr>
</tbody>
</table>

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