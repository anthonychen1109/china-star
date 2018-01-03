<?php

//$txt = "First line of text\nSecond line of text";

// 如果一行大于 70 个字符，请使用 wordwrap()。
$txt = "You Got A New Catering! \n";
$txt .="================================================= \n";
$txt = $txt . "Location: \n";
$txt = $txt . "117 W. Adams St.";
$txt = $txt . "================================================= \n";
$txt = $txt . "Customer Name: \n";
$txt = $txt . $_POST['Name'] ."\n";
$txt = $txt . "================================================= \n";
$txt = $txt . "Customer Email: \n";
$txt = $txt . $_POST['Email']."\n";
$txt = $txt . "================================================= \n";
$txt = $txt . "Customer Phone: \n";
$txt = $txt . $_POST['Phone']. "\n";
$txt = $txt . "================================================= \n";
$txt = $txt . "Customer Company: \n";
$txt = $txt . $_POST['Name']."\n";
$txt = $txt . "================================================= \n";
$txt = $txt . "Catering Event date: \n";
$txt = $txt . $_POST['Date']."\n";
$txt = $txt . "================================================= \n";
$txt = $txt . "Catering Pickup time: \n";
$txt = $txt . $_POST['Time']."\n";
$txt = $txt . "================================================= \n" ;
$txt = $txt . "Catering Items: \n";
$txt = $txt . "............ \n";
$txt = $txt . "KAZU SUSHI BURRITO * " . $_POST['KAZU_SUSHI_BURRITO']."\n";
$txt = $txt . "............ \n";
$txt = $txt . "POKÉ-POKÉ * " . $_POST['POKÉ-POKÉ']."\n";
$txt = $txt . "............ \n";
$txt = $txt . "SPECTRUM * " . $_POST['SPECTRUM']."\n";
$txt = $txt . "............ \n";
$txt = $txt . "TUNA LOVERS * " . $_POST['TUNA_LOVERS']."\n";
$txt = $txt . "............ \n";
$txt = $txt . "HAWAIIAN * " . $_POST['HAWAIIAN']."\n";
$txt = $txt . "............ \n";
$txt = $txt . "DYNAMITE BURRITO (FRIED) * " . $_POST['DYNAMITE_BURRITO']."\n";
$txt = $txt . "............ \n";
$txt = $txt . "DANCING SHRIMP * " . $_POST['DANCING_SHRIMP']."\n";
$txt = $txt . "............ \n";
$txt = $txt . "SURF N TURF * " . $_POST['SURF_N_TURF']."\n";
$txt = $txt . "............ \n";
$txt = $txt . "FOUNTAIN DRINKS (24OZ) * " . $_POST['FOUNTAIN_DRINKS']."\n";
$txt = $txt . "............ \n";
$txt = $txt . " Sweet/Unsweetened Tea * " . $_POST['Tea']."\n";
$txt = $txt . "............ \n";
$txt = $txt . "Dansani (16.9oz) * " . $_POST['Dansani']."\n";
$txt = $txt . "............ \n";
$txt = $txt . "Iced Green Tea (16.9oz) * " . $_POST['Iced_Green_Tea']."\n";
$txt = $txt . "............ \n";
$txt = $txt . "Aloe Vera (16.9oz) * " . $_POST['Aloe_Vera']."\n";
$txt = $txt . "================================================= \n" ;
$txt = $txt . "Catering Information: \n";
$txt = $txt . $_POST['Items']."\n";
$txt = $txt . "================================================= \n" ;
//$txt = wordwrap($txt,70);
/*echo "<script> alert('{$txt}') </script>";*/
// 发送邮件
mail("web@abcpos.com","New Catering Reminder!",$txt);

$Sc = "We already recived your email. Please Wait our reply or call us at +1 904-683-6391 ";
echo "<script>alert('{$Sc}');window.history.go(-1)</script>"

?>
