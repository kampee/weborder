<?php
switch($session_lang)
{
	case "en":
		include("lang_en.php");
		break;
	case "fr":
		include("lang_fr.php");
		break;
	default:
		include("lang_en.php");
}		

?>