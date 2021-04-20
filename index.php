<?php include "views/layout/header.php"?>
<?php include "views/layout/aside.php"?>

<?php 

	if (isset($_GET['view'])){

		if ($_GET['view'] == 'admController'){


			include_once("adm/{$_GET['view']}.php");



		} else{

			include_once("views/{$_GET['view']}.php");

		}



	} else {

		include_once("views/inicio.php");

	}


?>
	

<?php include "views/layout/chat.php"?>
<?php include "views/layout/footer.php"?>
	

	


	

