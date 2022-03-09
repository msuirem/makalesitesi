<?php include "menu.php";?>
<?php include "vt_bag.php";?>


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




            <div class="col-md-9">

                <!-- Content section -->
                <section class="py-5">
                    <div class="container" border="1" >

					<div class="container">

					<div class="card card-body bg-light">
   </nav><div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
	

    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active"> <img class="first-slide" src="images/y1.jpg" alt="First slide">
            <div class="container">

			
                <div class="carousel-caption d-none d-md-block"> <img src="images/asoslogo.png" alt="" style="margin:0 auto;"> </div>
            </div>
        </div>
        <div class="carousel-item"> <img class="second-slide" src="images/y2.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption d-none d-md-block"> <img src="images/asoslogo.png" alt="" style="margin:0 auto;"> </div>
            </div>
        </div>
        <div class="carousel-item"> <img class="third-slide" src="images/y3.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption d-none d-md-block"> <img src="images/asoslogo.png" alt="" style="margin:0 auto;"> </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</div>
<div class="container">
    <div class="row" style="padding:20px 0">
        <div class="col-md-8">
						
</div>


  
  <hr>
  
  
  
  					<div class="card card-body bg-light">
   <h2>DUYURULAR</h2>
     <div class="card-body">
                        <p>
                            <i>

                                Sempozyumda kabul edilen bildirilerin özetleri sempozyum özet kitabında yayınlanacak, bildirilerin tam metinleri yazarın seçeceği sempozyumu destekleyen uluslararası hakemli dergilerde hakem süreci tamamlandıktan sonra yayınlanacak ayrıca isteyen yazarların bildiri tam metinleri elektronik kitap olarak yayınlanacaktır.

                            </i>
                        </p>

                        <hr>
                     
                    </div>
   
   
  </div>
  <hr>
			
                        

		
<div class="card card-body bg-light">
<div class="container">
                        <p><img class="img-thumbnail" src="images/sosyal.jpg" alt="Sempozyum Afiş" width="300px" style="float:left;margin:10px;"></p>

                       <p style="text-align: justify;">Sizleri 25-27 Ekim 2018 (<a href="http://www.asoscongress.com/">www.asoscongress.com</a>) tarihleri arasında Yıldız Teknik &Uuml;niversitesi ev sahipliğinde İstanbul&rsquo;da d&uuml;zenlenecek olan 5. Uluslararası Sosyal Beşeri ve İdari Bilimler Sempozyumu&rsquo;na davet etmekten b&uuml;y&uuml;k mutluluk duyuyoruz.</p>
<p style="text-align: justify;">5. Uluslararası Sosyal Beşeri ve İdari Bilimler Sempozyumu&rsquo;nda nitelik a&ccedil;ısından akademisyenlerin &ccedil;alışmalarına ve araştırmalarına en &uuml;st d&uuml;zeyde katkı sağlanması, disiplinlerarası &ccedil;alışma ortamı oluşturarak alanla ilgili deneyimlerin, kuramsal ve uygulamalı bilgilerin paylaşılması ve eğitim bilimleri alanındaki g&uuml;ncel konuların tartışılması hedeflenmektedir. İlkini Elazığ&rsquo;da Fırat &Uuml;niversitesi ev sahipliğinde, ikincisini Alanya&rsquo;da Alanya Alaaddin Keykubat &Uuml;niversitesi ev sahipliğinde, &uuml;&ccedil;&uuml;nc&uuml;s&uuml;n&uuml; Kahramanmaraş&rsquo;ta S&uuml;t&ccedil;&uuml; İmam &Uuml;niversitesi ev sahipliğinde, d&ouml;rd&uuml;nc&uuml;s&uuml;n&uuml; ise Alanya&rsquo;da Alanya Alaaddin Keykubat &Uuml;niversitesi ev sahipliğinde ger&ccedil;ekleştirdik. 5. Uluslararası Sosyal Beşeri ve İdari Bilimler Sempozyumu&rsquo;nu ise Yıldız Teknik &Uuml;niversitesi ev sahipliğinde d&uuml;zenleyeceğiz.</p>
<p style="text-align: justify;">Sempozyumda kabul edilen bildirilerin &ouml;zetleri &ouml;zet kitabında yayınlanacak, bildirilerin tam metinleri yazarın se&ccedil;eceği sempozyumu destekleyen uluslararası hakemli dergilerde hakem s&uuml;reci tamamlandıktan sonra &uuml;cretsiz yayınlanacaktır. &nbsp;Ayrıca yazarların bildiri tam metinleri elektronik kitap olarak yayınlanabilir. T&uuml;m bildiriler Sobiad veritabanında indekslenecektir.</p>
<p style="text-align: justify;">Bildiriler İngilizce ve T&uuml;rk&ccedil;e olarak yazılabilir ve sunulabilir. Katılımcıların bildirilerini 15 dakikalık s&uuml;re ile s&ouml;zl&uuml; olarak sunmaları beklenmektedir. B&uuml;t&uuml;n bildiriler &ccedil;ift k&ouml;r-hakem s&uuml;reciyle değerlendirilecektir.</p>
<p style="text-align: justify;">Sempozyum kapsamında; A&ccedil;ık ve Uzaktan &Ouml;ğrenme, Arkeoloji, Avrupa Birliği, Bankacılık ve Sigortacılık, Batı Sanatı ve &Ccedil;ağdaş Sanat, Coğrafya, tarih, Bilgi ve Belge Y&ouml;netimi, B&ouml;lgesel &Ccedil;alışmalar, &Ccedil;ocuk Gelişimi, Dilbilimi, Ekonometri, Erken Hristiyan ve Bizans Sanatları, Felsefe, Finans, Gazetecilik ve Medya, Gelişim Psikolojisi, G&ouml;rsel İletişim ve Tasarım, Halkla İlişkiler, İktisadi d&uuml;ş&uuml;nce, İktisat Tarihi, İletişim &Ccedil;alışmaları, Kamu Y&ouml;netimi, Makro İktisat, Maliye, Mikro İktisat, Muhasebe, Nicel Karar Y&ouml;ntemleri, Organizasyon, Osmanlı Kurumları Medeniyeti, &Ouml;ğrenme-Bilişsel-Biyo-Deneysel Psikoloji, Pazarlama, Reklamcılık, Sanat Tarihi, Sinema, Siyasal D&uuml;ş&uuml;nceler, Siyasal Hayat ve Kurumlar, Siyaset Bilimi, Siyasi Tarih, Sosyal Hizmet, Sosyal Politika, Sosyal Psikoloji, Sosyal ve K&uuml;lt&uuml;rel Antropoloji, Sosyoloji, Turizm, T&uuml;rk İslam Sanatı, Uluslararası İktisat, Uluslararası İlişkileri, Uluslararası Ticaret, Uluslararası Psikoloji, &Uuml;retim ve Operasyon Y&ouml;netimi, Yerel Y&ouml;netimler, Kent ve &Ccedil;evre Politikaları, Y&ouml;netim Bilişim Sistemleri, Y&uuml;ksek&ouml;ğretim &Ccedil;alışmaları alanlarında bildiriler kabul edilecektir.</p>
<p style="text-align: justify;">Sempozyum b&uuml;nyesinde Poster sunumları i&ccedil;in oturumlara da yer verilecektir. Poster sunum hazırlama kuralları i&ccedil;in&nbsp;<a href="https://asoscongress.com/Sosyal_Beseri_idariBilimler/poster_sunum.pdf">tıklayınız.</a></p>
<p style="text-align: justify;">Sempozyuma ulusal ve uluslararası d&uuml;zeyde sosyal, beşeri ve idari bilimler alanında &ccedil;alışmakta olan akademisyenler, y&ouml;neticiler, eğitim uzmanları, &ouml;ğretmenler, mezun &ouml;ğrenciler ve sivil toplum kurum ve temsilcileri davetlidir.</p>
<p style="text-align: justify;">İstanbul&rsquo;da ger&ccedil;ekleşecek olan&nbsp;<em>5. Uluslararası Sosyal Beşeri ve İdari Bilimler Sempozyumu</em>&rsquo;nda sizleri aramızda g&ouml;rmeyi bekliyoruz.</p>


                    </div>
                </section>

            </div>


            <hr>

        </div>

        <hr>




        <!--
        <div class="row">
            <h3 class="my-4">
                Konuşmacılar - <small><i>Etkinliğe katılacak misafirlerimiz</i></small>
            </h3>
        </div>
        <div class="row">

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img class="img-thumbnail" src="https://www.asoscongress.com/EgitimBilimleri/images/schoenemann-oct2016.jpg" style="max-width:100%;" alt="" />
                        <h5 class="card-title">Tom SCHOENEMANN</h5>
                        <h6 class="card-subtitle mb-2 text-muted">The origins and evolution of language </h6>
                        <a href="#" class="card-link">Associate Professor, Anthropology Department , Indiana Univ.</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img class="img-thumbnail" src="https://www.asoscongress.com/EgitimBilimleri/images/schoenemann-oct2016.jpg" style="max-width:100%;" alt="" />
                        <h5 class="card-title">Tom SCHOENEMANN</h5>
                        <h6 class="card-subtitle mb-2 text-muted">The origins and evolution of language </h6>
                        <a href="#" class="card-link">Associate Professor, Anthropology Department , Indiana Univ.</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img class="img-thumbnail" src="https://www.asoscongress.com/EgitimBilimleri/images/schoenemann-oct2016.jpg" style="max-width:100%;" alt="" />
                        <h5 class="card-title">Tom SCHOENEMANN</h5>
                        <h6 class="card-subtitle mb-2 text-muted">The origins and evolution of language </h6>
                        <a href="#" class="card-link">Associate Professor, Anthropology Department , Indiana Univ.</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img class="img-thumbnail" src="https://www.asoscongress.com/EgitimBilimleri/images/schoenemann-oct2016.jpg" style="max-width:100%;" alt="" />
                        <h5 class="card-title">Tom SCHOENEMANN</h5>
                        <h6 class="card-subtitle mb-2 text-muted">The origins and evolution of language </h6>
                        <a href="#" class="card-link">Associate Professor, Anthropology Department , Indiana Univ.</a>
                    </div>
                </div>
            </div>

        </div>

        <hr>
        <div class="row">
            <h3 class="my-4">
                SPONSORLAR - <small><i>Etkinliğe destek verenler</i></small>
            </h3>
        </div>
        -->
       


    </div>

<?php include "footer.php";?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="plugins/jquery-3.2.1.slim.min.js"></script>
    <script src="plugins/popper.min.js"></script>
    <script src="plugins/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>