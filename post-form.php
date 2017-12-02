<?php

$EmailFrom = "guemilproject@gmail.com";
$EmailTo = "rramireo@uc.cl";
$Subject = "Una nueva respuesta al formulario";
$Country = Trim(stripslashes($_POST['Country']));
$Year = Trim(stripslashes($_POST['Year']));
$Picto1 = Trim(stripslashes($_POST['Picto1']));
$ImagenPicto1 = Trim(stripslashes($_POST['ImagenPicto1']));
$Picto2 = Trim(stripslashes($_POST['Picto2']));
$ImagenPicto2 = Trim(stripslashes($_POST['ImagenPicto2']));
$Picto3 = Trim(stripslashes($_POST['Picto3']));
$ImagenPicto3 = Trim(stripslashes($_POST['ImagenPicto3']));
$Picto4 = Trim(stripslashes($_POST['Picto4']));
$ImagenPicto4 = Trim(stripslashes($_POST['ImagenPicto4']));
$Picto5 = Trim(stripslashes($_POST['Picto5']));
$ImagenPicto5 = Trim(stripslashes($_POST['ImagenPicto5']));
$Picto6 = Trim(stripslashes($_POST['Picto6']));
$ImagenPicto6 = Trim(stripslashes($_POST['ImagenPicto6']));
// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body .= "País: ";
$Body .= $Country;
$Body .= "\n";
$Body .= "Fecha de Nacimiento: ";
$Body .= $Year;
$Body .= "\n";
$Body .= "Para ";
$Body .= $ImagenPicto1;
$Body .= ", indica: ";
$Body .= $Picto1;
$Body .= "\n";
$Body .= "Para ";
$Body .= $ImagenPicto2;
$Body .= ", indica: ";
$Body .= $Picto2;
$Body .= "\n";
$Body .= "Para ";
$Body .= $ImagenPicto3;
$Body .= ", indica: ";
$Body .= $Picto3;
$Body .= "\n";
$Body .= "Para ";
$Body .= $ImagenPicto4;
$Body .= ", indica: ";
$Body .= $Picto4;
$Body .= "\n";
$Body .= "Para ";
$Body .= $ImagenPicto5;
$Body .= ", indica: ";
$Body .= $Picto5;
$Body .= "\n";
$Body .= "Para ";
$Body .= $ImagenPicto6;
$Body .= ", indica: ";
$Body .= $Picto6;
$Body .= "\n";
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=sent-form.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
