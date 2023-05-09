                    <?php
error_reporting( E_ERROR );

if (isset($_POST['fam']))			{$fam			= $_POST['fam'];		if ($fam == '')	{unset($fam);}}
if (isset($_POST['name']))			{$name			= $_POST['name'];		if ($name == '')	{unset($name);}}
if (isset($_POST['otch']))			{$otch			= $_POST['otch'];		if ($otch == '')	{unset($otch);}}
if (isset($_POST['tel']))			{$tel			= $_POST['tel'];		if ($tel == '')	{unset($tel);}}
if (isset($_POST['email']))		{$email		= $_POST['email'];		if ($email == '')	{unset($email);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}

if (isset($fam) ) {
    $fam=stripslashes($fam);
    $fam=htmlspecialchars($fam);
}
if (isset($name) ) {
    $name=stripslashes($name);
    $name=htmlspecialchars($name);
}
if (isset($otch) ) {
    $otch=stripslashes($otch);
    $otch=htmlspecialchars($otch);
}  
if (isset($tel) ) {
    $tel=stripslashes($tel);
    $tel=htmlspecialchars($tel);
}    
if (isset($email) ) {
    $email=stripslashes($email);
    $email=htmlspecialchars($email);
}

$address="aliyakat.jais@gmail.com";

$note_text="Тема : Заявка с сайта \r\n Фамилия : $fam \r\n Имя : $name \r\n Отчество : $otch \r\n Телефон : $tel \r\n Email : $email;

if (isset($name)  &&  isset ($sab) ) {
mail($address,$note_text,"Content-type:text/plain; windows-1251"); 
    
echo "<p style='color:green;'>Уважаемый(ая) <b style='color:red;'>$name</b> Ваше письмо отправленно успешно. <br> Спасибо. <br>Вам скоро ответят на почту <b style='color:red;'> $email</b>.</p>";
}

?>
