<?php

$name=$_POST["name"];
$email=$_POST["email"];
$pwd1=$_POST["pwd1"];
$pwd2=$_POST["pwd2"];

if (empty($email) || empty($name) || empty($pwd1) || empty($pwd2)){
    $msg="Entrez des valeurs";
}
?>

<html lang="php">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>

<body>

    <form action="" method="post">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name">
        <label for="email">Email :</label>
        <input type="email" name="email" id="email">
        <label for="pwd1">Password :</label>
        <input type="password" name="pwd1" id="pwd1">
        <label for="pwd2">Password confirme :</label>
        <input type="password" name="pwd2" id="pwd2">
        <input type="submit" value="submit">
    </form>

</body>

</html>