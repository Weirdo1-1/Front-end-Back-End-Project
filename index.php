<?php

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];

if (isset($_POST['submit'])) {
    
    echo $firstName . ' / ' . $lastName . "/" . $email;
    

}

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>


<form action="index.php" method="POST">

<input type="text" name="firstname" id="firstname" placeholder="first name">
<input type="text" name="lastname" id="lastname" placeholder="last name">
<input type="text" name="email" id="email" placeholder="email">
<input type="submit" name="submit" value="send">

</form>

    
<script src="./js/script.js"></script>

</body>
</html>

