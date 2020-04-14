
<?php
	include_once  "parts/header.php";
	include_once  "parts/contact.php";
	if(!empty($_POST)):
?>
	<div class = "container">
		<div class = "row justify-content-center">
			<div class = "col-md-6 col-12" style = "padding: 50px 0;">
	<?php 
        echo "<p>Дякую за вашу заявку!</p>";
        echo "<p>Зміст заявки:</p>";
        echo "<p>Ім'я - ".$_POST["name"]."</p>";
        echo "<p>Прізвище - ".$_POST["surname"]."</p>";
        echo "<p>Телефон - ".$_POST["phone"]."</p>";
        echo "<p>Електронна пошта - ".$_POST["mail"]."</p>";
        if (!empty($_POST["info"])) {
            echo "<p>Додаткова інформація - ".$_POST["info"]."</p>";
        }
    else {
        echo "<p>Деяких данних не знайдено, спробуйте ще раз!</p>";
    }?>
			</div>
		</div>
	</div>
<?php endif;
include_once   "parts/footer.php"; ?>
