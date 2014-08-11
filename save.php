<?php

$file = $_POST['file1'];
$xml = $_POST['xml1'];



$xml = simplexml_load_file($file . ".xml") or die ("Unable to load XML file!");

   
   $title = $_POST['title'];
   $heading = $_POST['heading'];
   $heading1 = $_POST['heading1'];
   $heading2 = $_POST['heading2'];
   $heading3 = $_POST['heading3'];
   $heading4 = $_POST['heading4'];
   $heading5 = $_POST['heading5'];
   $Plan1 = $_POST['plan1'];
   $Plantext1 = $_POST['plantext1'];
   $Plan2 = $_POST['plan2'];
   $Plantext2 = $_POST['plantext2'];
   $Plan3 = $_POST['plan3'];
   $Plantext3 = $_POST['plantext3'];
   $Plan4 = $_POST['plan4'];
   $Plantext4 = $_POST['plantext4'];
   $Plan5 = $_POST['plan5'];
   $Plantext5 = $_POST['plantext5'];
   $Plan6 = $_POST['plan6'];
   $Plantext6 = $_POST['plantext6'];
   $Plan7 = $_POST['plan7'];
   $Plantext7 = $_POST['plantext7'];
   $Plan8 = $_POST['plan8'];
   $Plantext8 = $_POST['plantext8'];
   $Plan7a = $_POST['plan7a'];
   $Plantext7a = $_POST['plantext7a'];
   $Plan8a = $_POST['plan8a'];
   $Plantext8a = $_POST['plantext8a'];
   $Plan9 = $_POST['plan9'];
   $Plantext9 = $_POST['plantext9'];
   $Plan10 = $_POST['plan10'];
   $Plantext10 = $_POST['plantext10'];
   $Plan11 = $_POST['plan11'];
   $Plantext11 = $_POST['plantext11'];
   $Plan11a = $_POST['plan11a'];
   $Plantext11a = $_POST['plantext11a'];
   $medical = $_POST['medical'];
   $medtext = $_POST['medtext'];
   $dental = $_POST['dental'];
   $dentext = $_POST['denttext'];
   $vision = $_POST['vision'];
   $vistext = $_POST['vistext'];
   $cap = $_POST['cap'];
   $Plan10a = $_POST['plan10a'];
   $Plantext10a = $_POST['plantext10a'];
   $Plan10b = $_POST['plan10b'];
   $Plantext10b = $_POST['plantext10b'];
   $Plan12 = $_POST['plan12'];
   $Plantext12 = $_POST['plantext12'];
   $Plan12a = $_POST['plan12a'];
   $Plantext12a = $_POST['plantext12a'];

   $xml->title = $title;
   $xml->heading = $heading; 
   $xml->heading1 = $heading1;
   $xml->heading2  = $heading2;
   $xml->heading3 = $heading3;
   $xml->heading4 = $heading4;
   $xml->heading5 = $heading5;
   $xml->plan1 = $Plan1;
   $xml->plantext1 = $Plantext1;
   $xml->plan2 = $Plan2; 
   $xml->plantext2 = $Plantext2;
   $xml->plan3 = $Plan3;
   $xml->plantext3 = $Plantext3;
   $xml->plan4 = $Plan4;
   $xml->plantext4 = $Plantext4;
   $xml->plan5 = $Plan5;
   $xml->plantext5 = $Plantext5;
   $xml->plan6 = $Plan6;
   $xml->plantext6 = $Plantext6;
   $xml->plan7 = $Plan7;
   $xml->plantext7 =  $Plantext7;
   $xml->plan8 = $Plan8;
   $xml->plantext8 = $Plantext8;
   $xml->plan7a = $Plan7a;
   $xml->plantext7a =  $Plantext7a;
   $xml->plan8a = $Plan8a;
   $xml->plantext8a = $Plantext8a;
   $xml->plan9 = $Plan9;
   $xml->plantext9 = $Plantext9;
   $xml->plan10 = $Plan10;
   $xml->plantext10 = $Plantext10;
   $xml->plan11 = $Plan11;
   $xml->plantext11 = $Plantext11;
   $xml->plan11a = $Plan11a;
   $xml->plantext11a = $Plantext11a;
   $xml->medical = $medical;
   $xml->medtext = $medtext;
   $xml->dental = $dental;
   $xml->denttext = $dentext;
   $xml->vision = $vision;
   $xml->vistext = $vistext;
   $xml->cap = $cap;
   $xml->plan10a = $Plan10a;
   $xml->plantext10a = $Plantext10a;
   $xml->plan10b = $Plan10b;
   $xml->plantext10b = $Plantext10b;
   $xml->plan12 = $Plan12;
   $xml->plantext12 = $Plantext12;
   $xml->plan12a = $Plan12a;
   $xml->plantext12a = $Plantext12a;

   
   $xml->asXML($file . ".xml");
   

header('Location: editor.php');






?>