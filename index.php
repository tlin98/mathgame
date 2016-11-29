<?php session_start();
extract($_POST);
$err = "";

$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
// $_SESSION["err"] = $err;

/*if (!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {
    header("Location: login.php");
    die();
}*/



if (empty($_SESSION["email"])) {
    $err .= "Please enter a valid email.<br>";
} else if (strcmp($_SESSION["email"], "a@a.a") != 0) {
    $err .= "Incorrect email.<br>";
}
if (empty($_SESSION["email"])) {
    $err .= "Please enter a valid password.<br>.";
} else if (strcmp($_SESSION["password"], "aaa") != 0) {
    $err .= "Incorrect password.<br>";
}
if (!empty($err)) {
    header("Location: login.php?msg=$err");
    die();
}

include("include/header.php");

?>
<a href="#" class="btn btn-default pull-right">Logout</a>
<?

?>
    <p>You got past the login page!</p>
    <?php //include("include/footer.php"); ?>
