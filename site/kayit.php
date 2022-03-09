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
  <div class="sign-in-wrapper">
    <div class="sign-container">
        <div class="text-center">
          
            <h4 class="ozelFont">KAYIT OL </h4>
        </div>

        <form id="kayitOlForm" role="form" method="POST" action="kayit2.php">
            <input type="hidden" name="modul" value="yeni_kullanici"/>

            
            <div class="form-group">

                <select class="form-control js-example-basic-select2" name="unvan" id="rol" placeholder="Ünvan Seçiniz">

                    
                    <option value="">Ünvan Seçiniz</option>                   
                    <option>Prof.Dr.</option>
<option>Doç.Dr.</option>
<option>Dr. Öğretim Üyesi</option>
<option>Dr.</option>
<option>Araştırmacı</option>
<option>Dr.Araştırmacı</option>
<option>Uzman</option>
<option>Arş.Gör.Dr.</option>
<option>Arş.Gör</option>
<option>Öğr.Gör</option>
<option>Okutman</option>
<option>Diğer</option>


                </select>
            </div>

            <div class="form-group">
                <input type="text" id="isim" name="isim" class="form-control" placeholder="İsim Soyad">
            </div>
            <div class="form-group">
                <input type="text" id="isim" name="kurum" class="form-control" placeholder="Kurum">
            </div>
            <div class="form-group">
                <input type="text" id="isim" name="ceptelefonu" class="form-control" placeholder="Cep Telefonu">
            </div>
            <div class="form-group">
                <input type="email" id="eposta" name="eposta" class="form-control" placeholder="E-Mail">
            </div>
            
           
            <div class="form-group">
                <input type="text" id="akademik" name="akademik" class="form-control" placeholder="Akademik Çalışma Alanlarınız">
            </div>

            <div class="form-group">
                <select class="form-control js-example-basic-select2" name="ulke" id="rol" placeholder="Ülke">
                    
                    
                   <option>Türkiye</option>
<option>Afghanistan</option>
<option>Albania</option>
<option>Algeria</option>
<option>Andorra</option>
<option>Angola</option>
<option>Antigua and Barbuda</option>
<option>Argentina</option>
<option>Armenia</option>
<option>Aruba</option>
<option>Australia</option>
<option>Austria</option>
<option>Azerbaijan</option>
<option>Bahamas, The</option>
<option>Bahrain</option>
<option>Bangladesh</option>
<option>Barbados</option>
<option>Belarus</option>
<option>Belgium</option>
<option>Belize</option>
<option>Benin</option>
<option>Bhutan</option>
<option>Bolivia</option>
<option>Bosnia and Herzegovina</option>
<option>Botswana</option>
<option>Brazil</option>
<option>Brunei</option>
<option>Bulgaria</option>
<option>Burkina Faso</option>
<option>Burma</option>
<option>Burundi</option>
<option>Cabo Verde</option>
<option>Cambodia</option>
<option>Cameroon</option>
<option>Canada</option>
<option>Central African Republic</option>
<option>Chad</option>
<option>Chile</option>
<option>China</option>
<option>Colombia</option>
<option>Comoros</option>
<option>Congo, Democratic Republic of the</option>
<option>Congo, Republic of the</option>
<option>Costa Rica</option>
<option>Cote d'Ivoire</option>
<option>Croatia</option>
<option>Cuba</option>
<option>Curacao</option>
<option>Cyprus</option>
<option>Czechia</option>
<option>Denmark</option>
<option>Djibouti</option>
<option>Dominica</option>
<option>Dominican Republic</option>
<option>East Timor (see Timor-Leste)</option>
<option>Ecuador</option>
<option>Egypt</option>
<option>El Salvador</option>
<option>Equatorial Guinea</option>
<option>Eritrea</option>
<option>Estonia</option>
<option>Ethiopia</option>
<option>Fiji</option>
<option>Finland</option>
<option>France</option>
<option>Gabon</option>
<option>Gambia, The</option>
<option>Georgia</option>
<option>Germany</option>
<option>Ghana</option>
<option>Greece</option>
<option>Grenada</option>
<option>Guatemala</option>
<option>Guinea</option>
<option>Guinea-Bissau</option>
<option>Guyana</option>
<option>Haiti</option>
<option>Holy See</option>
<option>Honduras</option>
<option>Hong Kong</option>
<option>Hungary</option>
<option>Iceland</option>
<option>India</option>
<option>Indonesia</option>
<option>Iran</option>
<option>Iraq</option>
<option>Ireland</option>
<option>Israel</option>
<option>Italy</option>
<option>Jamaica</option>
<option>Japan</option>
<option>Jordan</option>
<option>Kazakhstan</option>
<option>Kenya</option>
<option>Kiribati</option>
<option>Korea, North</option>
<option>Korea, South</option>
<option>Kosovo</option>
<option>Kuwait</option>
<option>Kyrgyzstan</option>
<option>Laos</option>
<option>Latvia</option>
<option>Lebanon</option>
<option>Lesotho</option>
<option>Liberia</option>
<option>Libya</option>
<option>Liechtenstein</option>
<option>Lithuania</option>
<option>Luxembourg</option>
<option>Macau</option>
<option>Macedonia</option>
<option>Madagascar</option>
<option>Malawi</option>
<option>Malaysia</option>
<option>Maldives</option>
<option>Mali</option>
<option>Malta</option>
<option>Marshall Islands</option>
<option>Mauritania</option>
<option>Mauritius</option>
<option>Mexico</option>
<option>Micronesia</option>
<option>Moldova</option>
<option>Monaco</option>
<option>Mongolia</option>
<option>Montenegro</option>
<option>Morocco</option>
<option>Mozambique</option>
<option>Namibia</option>
<option>Nauru</option>
<option>Nepal</option>
<option>Netherlands</option>
<option>New Zealand</option>
<option>Nicaragua</option>
<option>Niger</option>
<option>Nigeria</option>
<option>North Korea</option>
<option>Norway</option>
<option>Oman</option>
<option>Pakistan</option>
<option>Palau</option>
<option>Palestinian Territories</option>
<option>Panama</option>
<option>Papua New Guinea</option>
<option>Paraguay</option>
<option>Peru</option>
<option>Philippines</option>
<option>Poland</option>
<option>Portugal</option>
<option>Qatar</option>
<option>Romania</option>
<option>Russia</option>
<option>Rwanda</option>
<option>Saint Kitts and Nevis</option>
<option>Saint Lucia</option>
<option>Saint Vincent and the Grenadines</option>
<option>Samoa</option>
<option>San Marino</option>
<option>Sao Tome and Principe</option>
<option>Saudi Arabia</option>
<option>Senegal</option>
<option>Serbia</option>
<option>Seychelles</option>
<option>Sierra Leone</option>
<option>Singapore</option>
<option>Sint Maarten</option>
<option>Slovakia</option>
<option>Slovenia</option>
<option>Solomon Islands</option>
<option>Somalia</option>
<option>South Africa</option>
<option>South Korea</option>
<option>South Sudan</option>
<option>Spain</option>
<option>Sri Lanka</option>
<option>Sudan</option>
<option>Suriname</option>
<option>Swaziland</option>
<option>Sweden</option>
<option>Switzerland</option>
<option>Syria</option>
<option>Taiwan</option>
<option>Tajikistan</option>
<option>Tanzania</option>
<option>Thailand</option>
<option>Timor-Leste</option>
<option>Togo</option>
<option>Tonga</option>
<option>Trinidad and Tobago</option>
<option>Tunisia</option>
<option>Turkmenistan</option>
<option>Tuvalu</option>
<option>Türkiye</option>
<option>Uganda</option>
<option>Ukraine</option>
<option>United Arab Emirates</option>
<option>United Kingdom</option>
<option>Uruguay</option>
<option>Uzbekistan</option>
<option>Vanuatu</option>
<option>Venezuela</option>
<option>Vietnam</option>
<option>Yemen</option>
<option>Zambia</option>
<option>Zimbabwe</option>
                    
                    
                    
                    
                </select>
            </div>

<div class="form-group">
               
				
				<textarea rows="10" cols="108" id="ozet" name="ozet" placeholder="Özetinizi Yükleyiniz"></textarea>
            </div>
    
            
            <button type="submit" class="btn btn-info btn-block">Kayıt Ol</button>
            <p class="text-muted text-center help-block"><small>Zaten bir hesabın var ise</small></p>
            <a class="btn btn-md btn-default btn-block" href="?modul=giris">Oturum Aç</a>
            
        </form>


    </div>


   
</div>

        

</div>
<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="" alt="" />
            </div>
        </div>
    </div>
</div>
<br><br>
    <br>
    <br>

</div></div></div>
</div>




<?php include "footer.php";?>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="plugins/jquery-3.2.1.slim.min.js"></script>
<script src="plugins/popper.min.js"></script>
<script src="plugins/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>