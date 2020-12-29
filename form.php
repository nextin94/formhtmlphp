<?php



if (!empty($_POST['name']) and !empty($_POST['age'])) {
    var_dump($_POST);
} else {
?> 

<form action="" method="POSt">
<?php if (isset($_POST['name']) and empty($_POST['name'])) echo "Введите имя"."<br>";  ?>
<input type="text" name="name" placeholder="Введите имя"><br><br>
<?php if (isset($_POST['age']) and empty($_POST['age'])) echo "Введите возрость"."<br>";  ?>
<input type="text" name='age' placeholder="Введите возрость"><br><br>
<textarea name="message" rows="10" cols="30">Сообщение</textarea><br><br>
<input type="submit">
</form>
hello world
<?php } ?>
