<?php session_start();
extract($_POST);
$err = "";

if ($_SESSION["login"] == false) {
    // Blank state, first time opening the site.
    if (!isset($email) && !isset($password)) {
        header("Location: login.php");
        die();
    } else if (strcmp($email, "a@a.a") != 0 || strcmp($password, "aaa") != 0) {
        $err = "Incorrect login credentials.";
    }
    if (!empty($err)) {
        unset($_SESSION["email"]);
        unset($_SESSION["password"]);
        header("Location: login.php?msg=$err");
        die();
    }
}
// If survive, login credentials correct
$_SESSION["login"] = true;
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;

include("include/header.php");
// Code for math game
$_SESSION["score"];
if ($_SESSION["score"] == null) {
    $_SESSION["score"] = 0;
    $_SESSION["count"] = 0;
}

// Fraction testing
list($top, $bottom) = explode('/', $answer);
if ($bottom == 0) {
    $fraction = 0;
} else {
    $fraction = $top / $bottom;
}

if ($_SESSION["answer"] == $answer || $fraction == $_SESSION["number1"] / $_SESSION["number2"]) {
    $_SESSION["score"]++;
    $_SESSION["count"]++;
    $mathout = "Correct";
    $correct = true;
} else if ((!is_numeric($answer) || empty($answer)) && $answer != 0) {
    $mathout = "You must enter a number for your answer.";
    $correct = false;
} else {
    $correct = false;
    $_SESSION["count"]++;
    $number1 = $_SESSION["number1"];
    $number2 = $_SESSION["number2"];
    $mathout = "INCORRECT, " . $_SESSION["number1"] . " ";
    if ($_SESSION["operator"] == 0) { // add
        $answer = $number1 + $number2;
        $sign = "+";
    } else if ($_SESSION["operator"] == 1) { // minus
        $answer = $number1 - $number2;
        $sign = "-";
    } else if ($_SESSION["operator"] == 2) { // multiply
        $answer = $number1 * $number2;
        $sign = "x";
    } else if ($_SESSION["operator"] == 3) { // divide
        $answer = $number1 / $number2;
        $sign = "&#247;";
    }
    $mathout .= $sign . " " . $_SESSION["number2"] . " is " . $answer . ".";
}

// New Question

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
$_SESSION["answer"] = $answer;
$_SESSION["number1"] = $number1;
$_SESSION["number2"] = $number2;
$_SESSION["operator"] = $operator;
?>
<form class="form-horizontal" action="login.php" method="post">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h1 class="text-center">Math Game</h1> </div>
        <div class="col-sm4">
            <div class="form-group">
                <button type="logout" href="login.php?msg=&quot;logout&quot;" class="btn btn-default pull-right" name="u">Logout</button>
            </div>
        </div>
    </div>
</form>
<form class="form-horizontal" action="index.php" method="post">
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
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2 col-sm-offset-5">
                <hr>
                <input type="text" value="" class="form-control" id="answer" name="answer" placeholder="answer" align="right" autofocus></input>
        </div>
    </div>
    </div>
<div class="form-group">
    <div class="col-sm-offset-5 text-center col-sm-2">
        <button type="submit" class="btn btn-success" name="submit">Submit</button>
    </div>
</div>
</form>
<div class="row">
    <div class="col-sm-offset-3 text-center col-sm-6">
        <label>
            <?php
    if ($correct) {
        echo "<span id=\"correct\" >";
    } else {
        echo "<span id=\"incorrect\" >";
    }
            echo $mathout . "</span>";
            ?> </label>
    </div>
</div>
<div class="row">
    <div class="col-sm-offset-5 text-center col-sm-2">
        <label>
            <?php
            echo "Score: " . $_SESSION["score"] . " / " . $_SESSION["count"];
            ?>
        </label>
    </div>
</div>
    <?php include("include/footer.php"); ?>
