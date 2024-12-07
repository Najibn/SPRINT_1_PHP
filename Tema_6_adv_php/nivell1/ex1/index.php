<?php
session_start();
?>

<?php



if (isset($_POST["login"])) {


    if (!empty($_POST["username"]) && !empty($_POST["password"])) {

        // $username = $_POST["username"];
        //  echo "form submitted: <br> {$username}";

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        echo $_SESSION["username"] . " <br>";
        echo $_SESSION["password"] . "<br>";


        header("Location: home.php");
    } else {
        echo "incorrect! password/username";
    }
}


if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
    echo "<h2>Name: " . ($_SESSION["username"]) . "</h2>";
    echo "<h2>password: " . ($_SESSION["password"]) . "</h2>";
}
?>