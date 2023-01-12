<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
</head>
<body>
    <h1>To Do List</h1>

    <form method="POST">
        Add New : <input type="text" name="chevre">
        <input type="submit">
    </form>


<?php
    echo $_POST["chevre"];
?>


</body>
</html>