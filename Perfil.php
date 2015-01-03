<?php ?>
<div id="fullpage">
	<div class="section " id="section0">
		<div class="intro">

<?php
$array = $_GET["array"];
if(!isset($array)){
$unick = $usu;
}else{
$unick = $array;
$title = "- ".$unick;
}
?>
<?php  //me
$link = @mysql_connect('localhost','user','*******') or die ("Error al conectar a la base de datos."); @mysql_select_db("MYDB", $link) or die ("Error al seleccionar la base de datos.");

$query = "SELECT * FROM Usuarios WHERE usuario='".$unick."'"; 
$result = mysql_query($query); 
if ($row = mysql_fetch_array($result))
 { 
$gusu = $row['usuario'];
$gimg2 = $row['imagen2'];
$gimg = $row['imagen'];
$gabout = $row['acerca'];
$gmail = $row['correo'];
$gtel = $row['telefono'];
$gocu = $row['ocupacion'];
$gfb = $row['facebook'];
$ggp = $row['gplus'];
$gtw = $row['twitter'];

echo ' 
<title>Ludwingamd - Perfil '.$unick.'</title>
<link href="'.$gimg.'" rel="image_src" />
<meta property="og:image" content="'.$gimg.'">
<meta property="og:image:type" content="image/jpeg">
<div id="social" style="position:absolute; top:26; right: 0%;">
<div class="fb-like" data-href="/Perfil/'.$unick.'" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>

&nbsp; &nbsp; &nbsp;
<a href="https://twitter.com/share" class="twitter-share-button" data-url="/Perfil/'.$unick.'" data-text="Ludwingamd - perfil de: '.$unick.'
" data-hashtags="Ludwingamd">Tweet</a>
</div>

<style>
body {
  background-image: url('.$gimg2.');
  background-size: 100% 100%;
  background-repeat: no-repeat;
}
</style>

<center>
<div id="profile" style="top: 140; text-align:center; width: 100%" >
<br><br><br><br>
<a href="#firstPage" rel="imagen" target="_top"><img src="'.$gimg.'" alt="'.$gusu.'" width="200" height="200" align="center" style="border-radius: 120;"/></a><br>
<table align="center"><td class="infowall"><center><font class="usu" size="7">'.$gusu.'</font></center></td></table>
</div>
</center>
<br><br>

<center>
<div id="info" class="infowall">
<table width="100%">
<td width="50%" valign="top">
<font size="6">Informacion</font><br>
<font size="4">
Correo: <a href="mailto:'.$gmail.'" class="usu">'.$gmail.'</a><br>

Telefono: <text class="usu">'.$gtel.'</text><br>

Ocupacion: <text class="usu">'.$gocu.'</text><br><br>

<font size="6">Sobre mi</font><br>
'.$gabout.'

</font>
</td>
<td width="50%" valign="top">

<a href="https://www.facebook.com/'.$gfb.'" target="_blank"><img src="/Imagenes/fb.png" width="50" height="50" align="left"/><font size="7">'.$gfb.'</font></a><br>

<a href="https://www.twitter.com/'.$gtw.'" target="_blank"><img src="/Imagenes/twitter.png" width="50" height="50" align="left"/><font size="7">'.$gtw.'</font></a><br>

<a href="https://plus.google.com/+'.$gfb.'" target="_blank"><img src="/Imagenes/googlep.png" width="50" height="50" align="left"/><font size="7">'.$ggp.'</font></a>

</td>
</table>
</div>
</center>

';

} else {
echo'
<title>Ludwingamd - Perfil Error</title>
<h1>Error</h1><br>
No encontramos a este usuario: <text class="usu">'.$unick.'</text> :/
';
}

mysql_free_result($result); mysql_close($link); ?>

</div>
	</div>
