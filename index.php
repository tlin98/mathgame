<?php session_start();
extract($_POST);
$_SESSION["email"];
$_SESSION["password"];
$err = "";

if (!isset($email) && !isset($password)) {
    header("Location: login.php");
    die();
}

$_SESSION["email"] = $email;
$_SESSION["password"] = $password;

if (strcmp($_SESSION["email"], "a@a.a") != 0 || strcmp($_SESSION["password"], "aaa") != 0) {
    $err = "Incorrect login credentials.";
}

if (!empty($err)) {
    header("Location: login.php?msg=$err");
    die();
}

include("include/header.php");

// Code for math game
$_SESSION["score"];
if ($_SESSION["score"] == null) {
    $_SESSION["score"] = 0;
}
    $number1 = rand(0, 20);
    $number2 = rand(0, 20);
    $operator = rand(0, 3);

    if ($operator == 0) { // add
    $answer = $number1 + $number2;
    $sign = "+";
} else if ($operator == 1) { // minus
    $answer = $number1 - $number2;
    $sign = "-";
} else if ($operator == 2) { // multiply
    $answer = $number1 * $number2;
    $sign = "x";
} else if ($operator == 3) { // divide
    $answer = $number1 / $number2;
    $sign = "&#247;";
}

?>
<form class="form-horizontal" action="index.php" method="post">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h1 class="text-center">Math Game</h1></div>
        <div class="col-sm4">
            <div class="form-group">
                <button type="logout" href="login.php?msg=&quotlogout&quot" class="btn btn-default pull-right" name="u">Logout</button>
            </div>
        </div>
    </div>
    <div class="row">
        <label class="col-sm-1 text-right col-sm-offset-6">
            <?php echo $number1 ?>
        </label>
    </div>
    <div class="row">
        <label class="col-sm-1 col-sm-offset-5">
            <?php echo $sign ?>
        </label>
        <label class="col-sm-1 text-right">
            <?php echo $number2 ?>
        </label>
    </div>
    <div class="row">

    </div>
</form>
    <?php include("include/footer.php"); ?>
