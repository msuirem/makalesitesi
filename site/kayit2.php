<?php
 $unvan = $_POST['unvan'];
 $isim = $_POST['isim'];
 $kurum = $_POST['kurum'];
 $ceptelefonu = $_POST['ceptelefonu'];
 $eposta = $_POST['eposta'];
 $ozet= $_POST['ozet'];
 $akademik= $_POST['akademik'];
 $ulke= $_POST['ulke'];


 $baglan=mysqli_connect("localhost","root","","ornek");
mysqli_set_charset($baglan, "utf8");
 
$sql="select unvan from ozetkayit";
$sonuc1=mysqli_query($baglan,$sql);


$sqlekle="INSERT INTO ozetkayit( unvan, isim,  ceptelefonu, email, ozet,  akademik, ulke,kurum) 
VALUES ('$unvan','$isim','$ceptelefonu','$eposta','$ozet', '$akademik' ,'$ulke','$kurum')";
 
$sonuc=mysqli_query($baglan,$sqlekle);
 
if ($sonuc==0)
echo "Eklenemedi, kontrol ediniz";
else
echo "Başarıyla eklendi";

 
?>