<?php

    include("test/users.test.php");

    // Testing Users
    $userTest = new UsersTest();
    
    $result = $userTest->getAllUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For esting Data Purposes Only</title>
</head>
<body>
    
    <?php
        var_dump($result->fetch_assoc());
    ?>

</body>
</html>