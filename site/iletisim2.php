

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>



<meta charset="UTF-8">

</head>

<body>

<?php



$isim = $_POST["isim"];

if($isim==""){



?>







<div data-role="page">

  <div data-role="main" class="ui-content">

    <form method="POST" action="iletisim2.php">

      <div class="ui-field-contain">

        Isim Soyad: <br>

        <input type="text"  name="isim" id="fname">

        E-Posta: <br>

        <input type="email"name="email" id="lname" placeholder="E-Mail Adresiniz">

        Telefon: <br>

        <input type="text" name="mobile" id="lname">



        Mesaj: <br>

    <textarea cols="40" data-autogrow="false"   rows="4" name="message" id="textarea"></textarea>      </div>



	<button style="background:#395c7a;color: white;" class="ui-shadow ui-btn ui-corner-all">Gönder</button>



    </form>

  </div>

</div>







<?php

}else{

$name = $_POST["isim"];

$email  = $_POST["email"];

$message = $_POST["message"];

$mobile      = $_POST["mobile"];



$konu       = "UKDA 2018";

$aliciemail ="ukdasempozyum2018@gmail.com";

//$aliciemail ="amungen@gmail.com";
 


if(($name=="" || $email=="" || $message=="" )){

if($name==""){

echo "<center><h4>İsim Boş</h4></center>";

}else if($email==""){

echo "<center><h4>Email Boş</h4></center>";

}else if($message==""){

echo "<center><h4>Mesaj Boş</h4></center>";

}

?>



<center><h3>Lütfen alanlardan hiçbirini bos birakmayiniz</h3></center>

<a href="iletisim.php" data-role="button">Tekrar basla</a>



<?





}else

{

//echo $message;

//$message      = mb_convert_encoding ( $message,  "ISO-8859-9","UTF-8"  );

//echo $message;

//echo $name;

//$name         = mb_convert_encoding ( $name,     "ISO-8859-9","UTF-8" );

//echo $name;

//echo $email;

//$email         = mb_convert_encoding ( $email,     "ISO-8859-9","UTF-8" );

//echo $email;





$message = str_replace("<", "&lt;", $message);

$message = str_replace(">", "&gt;", $message);

$message = str_replace("\n", "<br>", $message);









 $html = "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">\n"

                . "<html lang=\"tr\">\n"

                . "<head>\n"

                . "  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n"

                . "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> <!-- So that mobile will display zoomed in -->\n"

                . "  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> <!-- enable media queries for windows phone 8 -->\n"

                . "  <meta name=\"format-detection\" content=\"telephone=no\"> <!-- disable auto telephone linking in iOS -->\n"

                . "  <title></title>\n"

                . "  \n"

                . "  <style type=\"text/css\">\n"

                . "body {\n"

                . "  margin: 0;\n"

                . "  padding: 0;\n"

                . "  -ms-text-size-adjust: 100%;\n"

                . "  -webkit-text-size-adjust: 100%;\n"

                . "}\n"

                . "\n"

                . "table {\n"

                . "  border-spacing: 0;\n"

                . "}\n"

                . "\n"

                . "table td {\n"

                . "  border-collapse: collapse;\n"

                . "}\n"

                . "\n"

                . ".ExternalClass {\n"

                . "  width: 100%;\n"

                . "}\n"

                . "\n"

                . ".ExternalClass,\n"

                . ".ExternalClass p,\n"

                . ".ExternalClass span,\n"

                . ".ExternalClass font,\n"

                . ".ExternalClass td,\n"

                . ".ExternalClass div {\n"

                . "  line-height: 100%;\n"

                . "}\n"

                . "\n"

                . ".ReadMsgBody {\n"

                . "  width: 100%;\n"

                . "  background-color: #ebebeb;\n"

                . "}\n"

                . "\n"

                . "table {\n"

                . "  mso-table-lspace: 0pt;\n"

                . "  mso-table-rspace: 0pt;\n"

                . "}\n"

                . "\n"

                . "img {\n"

                . "  -ms-interpolation-mode: bicubic;\n"

                . "}\n"

                . "\n"

                . ".yshortcuts a {\n"

                . "  border-bottom: none !important;\n"

                . "}\n"

                . "\n"

                . "@media screen and (max-width: 599px) {\n"

                . "  .force-row,\n"

                . "  .container {\n"

                . "    width: 100% !important;\n"

                . "    max-width: 100% !important;\n"

                . "  }\n"

                . "}\n"

                . "@media screen and (max-width: 400px) {\n"

                . "  .container-padding {\n"

                . "    padding-left: 12px !important;\n"

                . "    padding-right: 12px !important;\n"

                . "  }\n"

                . "}\n"

                . ".ios-footer a {\n"

                . "  color: #aaaaaa !important;\n"

                . "  text-decoration: underline;\n"

                . "}\n"

                . "</style>\n"

                . "</head>\n"

                . "\n"

                . "<body style=\"margin:0; padding:0;\" bgcolor=\"#F0F0F0\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">\n"

                . "\n"

                . "<!-- 100% background wrapper (grey background) -->\n"

                . "<table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#F0F0F0\">\n"

                . "  <tr>\n"

                . "    <td align=\"center\" valign=\"top\" bgcolor=\"#F0F0F0\" style=\"background-color: #F0F0F0;\">\n"

                . "\n"

                . "      <br>\n"

                . "\n"

                . "      <!-- 600px container (white background) -->\n"

                . "      <table border=\"0\" width=\"600\" cellpadding=\"0\" cellspacing=\"0\" class=\"container\" style=\"width:600px;max-width:600px\">\n"

                . "        <tr>\n"

                . "          <td class=\"container-padding header\" align=\"left\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;color:#DF4726;padding-left:24px;padding-right:24px\">\n"

                . "           UKDA 2018\n"

                . "          </td>\n"

                . "        </tr>\n"

                . "        <tr>\n"

                . "          <td class=\"container-padding content\" align=\"left\" style=\"padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff\">\n"

                . "           \n"

                . "\n"

                . "\n"

                . "<br>\n"

                . "\n"

                . "<!-- example: two columns (simple) -->\n"

                . "\n"

                . "<!--[if mso]>\n"

                . "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"

                . "  <tr><td width=\"100%\" valign=\"top\"><![endif]-->\n"

                . "\n"

                . "    \n"

                . "    <!--[if mso]></td><td width=\"100%\" valign=\"top\"><![endif]-->\n"

                . "\n"

                . "    <table  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"right\" class=\"force-row\">\n"

                . "      <tr >\n"

                . "        <td valign=\"middle\" style=\"padding:15px 0px 25px 5px;\" class=\"col\" valign=\"top\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;width:30%\">\n"

                . "        Isim:\n"

                . "        </td>\n"

                . "		<td class=\"col\" valign=\"middle\" valign=\"top\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;width:70%\">\n"

                . "        " . $name . "\n"

                . "        </td>\n"

                . "      </tr>\n"

                . "	   <tr>\n"

                . "        <td  valign=\"middle\"style=\"padding:15px 0px 25px 5px;\"  class=\"col\" BGCOLOR=\"#E3E3E3\" valign=\"top\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;width:30%\">\n"

                . "        E-Posta:\n"

                . "        </td>\n"

                . "		<td class=\"col\" valign=\"middle\" BGCOLOR=\"#E3E3E3\" valign=\"top\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;width:70%\">\n"

                . "        " . $email . "\n"

                . "\n"

                . "        </td>\n"

                . "      </tr>\n"

                . "	  <tr>\n"

                . "        <td  valign=\"middle\"style=\"padding:15px 0px 25px 5px;\"  class=\"col\" valign=\"top\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;width:30%\">\n"

                . "       Telefon\n"

                . "        </td>\n"

                . "		<td class=\"col\" valign=\"middle\" valign=\"top\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;width:70%\">\n"

                . "        " . $mobile . "\n"

                . "\n"

                . "        </td>\n"

                . "      </tr>\n"

                . "	  <tr>\n"

                . "        <td  valign=\"middle\"style=\"padding:15px 0px 25px 5px;\"  class=\"col\" BGCOLOR=\"#E3E3E3\" valign=\"top\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;width:30%\">\n"

                . "       Mesaj\n"

                . "        </td>\n"

                . "		<td class=\"col\" valign=\"middle\" BGCOLOR=\"#E3E3E3\" valign=\"top\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;width:70%\">\n"

                . "       " . $message

                . "\n"

                . "        </td>\n"

                . "      </tr>\n"

                . "    </table>\n"

                . "\n"

                . "<!--[if mso]></td></tr></table><![endif]-->\n"

                . "\n"

                . "\n"

                . "<!--/ end example -->\n"

                . "\n"

                . "<div class=\"hr\" style=\"height:1px;border-bottom:1px solid #cccccc;clear: both;\">&nbsp;</div>\n"

                . "<br>\n"

                . "\n"

                . "\n"

                . "<br>\n"

                . "          </td>\n"

                . "        </tr>\n"

                . "        <tr>\n"

                . "          <td class=\"container-padding footer-text\" align=\"left\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px\">\n"

                . "            <br><br>\n"

                . "				<center> 		<a href=\"http://akademikiletisim.com\"><img src=\"http://www.ukdasempozyum.com/images/logo2.png\" style=\"\"> </a>\n"

                . " <br><br>\n"

                . "           T𭠈aklari Saklidir ɠCopyright <a href=\"http://akademikiletisim.com\"> Akademik Iletisim </a>\n"

                . "           \n"

                . "\n"

                . "\n"

                . "</center>\n"

                . "          </td>\n"

                . "        </tr>\n"

                . "      </table>\n"

                . "<!--/600px container -->\n"

                . "\n"

                . "\n"

                . "    </td>\n"

                . "  </tr>\n"

                . "</table>\n"

                . "<!--/100% background wrapper-->\n"

                . "\n"

                . "</body>\n"

                . "</html>";

				

				

			

			$headers = "From: UKDA 2018 <ukdasempozyum2018@gmail.com>\r\n";

			$headers .= "Reply-To: ". $email ."\r\n";

			$headers .= "MIME-Version: 1.0\r\n";

			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";



$mesajyolla = mail($aliciemail, $konu, $html,$headers);

if($mesajyolla)

{

?>

<center>

<h3 style="display:inline-block; width:92%; margin-top:5px;">Mesajınız Gönderildi. </h3>

<p style="font-size:85%; margin:-.3em 0 1em;">Bize Ulaştığınız için Teşekkür Ederiz.</p>

<a href="iletisim2.php" data-role="button">Yeni Mesaj Gonder</a>



<center>

<?

}

else

{

echo "Hata Var";

}



}

}

?>



</body>

</html>