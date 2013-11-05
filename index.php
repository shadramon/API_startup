<?
session_start();
require("lib.php");
require("api.php");

header("Content-Type: application/json");



switch ($_POST['command']) {
	case "login": 
		login($_POST['username'], $_POST['pass']); break;
 
	case "register":
		register($_POST['username'], $_POST['pass']); break;
       case "upload":
	       upload($_SESSION['IdUser'], $_FILES['file'], $_POST['title']);break;
       case "logout":
	      logout();break;
       case "stream":
	      stream((int)$_POST['IdPhoto']);
              break;
 
}

exit();
?>