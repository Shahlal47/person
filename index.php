<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Person</title>
</head>
<body style="text-align: center;">
<br><br><br>

<fieldset>
    <legend>Person Name</legend>
<form action="index.php" method="post">

    <label>Your First Name: </label>
    <input type="text" name="firstName"><br>

    <label>Your Middle Name: </label>
    <input type="text" name="middleName"><br>

    <label>Your Last Name: </label>
    <input type="text" name="lastName"><br>

    <input type="submit" name="submit" value="Submit">
</form>
</fieldset>

</body>
</html>


<?php

    require_once('person.php');

    if(isset($_POST['firstName']) && isset($_POST['middleName']) && isset($_POST['lastName'])){

        $aPerson = new Person();

//        $aPerson->firstName = $_POST['firstName'];
//        $aPerson->middleName = $_POST['middleName'];
//        $aPerson->lastName = $_POST['lastName'];


        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];

        $aPerson->setFirstName($firstName);
        $aPerson->setMiddleName($middleName);
        $aPerson->setLastName($lastName);

        echo $aPerson->getFullName();
        echo "<br>";
        echo $aPerson->getReverseFullName();

    }

?>