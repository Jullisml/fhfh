<?php
if (isset ($_GET['page'])) {
	switch ($_GET['page']) {
	case '1':
		header ('Location:http://localhost/ravi/category/aks.php'); exit();
	case '2':
		header ('Location:http://localhost/ravi/category/dress.php'); exit();
	case '3':
		header ('Location:http://localhost/ravi/category/blus.php'); exit();
	case '4':
		header ('Location:http://localhost/ravi/category/kurtki.php'); exit();
	case '5':
		header ('Location:http://localhost/ravi/category/bruki.php'); exit();
	}
}
?>