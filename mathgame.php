<?php extract($_POST);
$err = "";
$numErr = " entered was not a number.";

if (empty($name)) {
    $err .= "Name must be entered<br>";
}
if (empty($pennies)) {
    $pennies = 0;
} else if (!is_numeric($pennies)) {
    $err .= "Pennies" . $numErr . "<br>";
    //header("Location: index.php");
    //die();
}
if (empty($nickels)) {
    $nickels = 0;
} else if (!is_numeric($nickels)) {
    $err .= "Nickels" . $numErr . "<br>";
    //header("Location: index.php");
    //die();
}
if (empty($dimes)) {
    $dimes = 0;
} else if (!is_numeric($dimes)) {
    $err .= "Dimes" . $numErr . "<br>";
    //header("Location: index.php");
    //die();
}
if (empty($quarters)) {
    $quarters = 0;
} else if (!is_numeric($quarters)) {
    $err .= "Quarters" . $numErr . "<br>";
    //header("Location: index.php");
    //die();
}
if (empty($onedollars)) {
    $onedollars = 0;
} else if (!is_numeric($onedollars)) {
    $err .= "1 Dollar Coins" . $numErr . "<br>";
    //header("Location: index.php");
    //die();
}
if (empty($twodollars)) {
    $twodollars = 0;
} else if (!is_numeric($twodollars)) {
    $err .= "1 Dollar Coins" . $numErr . "<br>";
    //header("Location: index.php");
    //die();
}
if (!empty($err)) {
    header("Location: index.php?msg=$err");
    die();
}

include("include/header2.php");

$totalPennies = $pennies + $nickels * 5 + $dimes * 10 + $quarters * 25 + $onedollars * 100 + $twodollars * 200;
$totalDollars = $totalPennies / 100;
?>

<h2><?php echo $name ?></h2>
<div class="col-sm-6">
    <div class="col-xs-6">
        <p>Pennies</p>
    </div>
    <div class="col-xs-6">
        <p><?php echo $pennies ?></p>
    </div>
</div>
<div class="col-sm-6">
    <div class="col-xs-6">
        <p>Nickels</p>
    </div>
    <div class="col-xs-6">
        <p><?php echo $nickels ?></p>
    </div>
</div>
<div class="col-sm-6">
    <div class="col-xs-6">
        <p>Dimes</p>
    </div>
    <div class="col-xs-6">
        <p><?php echo $dimes ?></p>
    </div>
</div>
<div class="col-sm-6">
    <div class="col-xs-6">
        <p>Quarters</p>
    </div>
    <div class="col-xs-6">
        <p><?php echo $quarters ?></p>
    </div>
</div>
<div class="col-sm-6">
    <div class="col-xs-6">
        <p>Dollar Coin</p>
    </div>
    <div class="col-xs-6">
        <p><?php echo $onedollars ?></p>
    </div>
</div>
<div class="col-sm-6">
    <div class="col-xs-6">
        <p>2 Dollar Coin</p>
    </div>
    <div class="col-xs-6">
        <p><?php echo $twodollars ?></p>
    </div>
</div>

<h3>You therefore have:</h3>
<div class="col-sm-6">
    <div class="col-xs-6">
        <p>Total Cents</p>
    </div>
    <div class="col-xs-6">
        <p><?php echo $totalPennies . "&cent;" ?></p>
    </div>
</div>
<div class="col-sm-6">
    <div class="col-xs-6">
        <p>Total Dollars</p>
    </div>
    <div class="col-xs-6">
        <p><?php echo "$" . $totalDollars ?></p>
    </div>
</div>
<a href="index.php" class="btn btn-default">Start again</a>
<?php include("include/footer.php"); ?>
