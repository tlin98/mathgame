<?php
session_start();

$msg = $_GET["msg"];

include("include/header.php");
?>

<h2>Please login to enjoy our math game.</h2>

<?php
$_SESSION["count"] = -1;
$_SESSION["score"] = -1;
/*$_SESSION["login"] = false;
    $_SESSION["email"] = "";
    $_SESSION["password"] = "";

    $_SESSION["number1"] = 0;
    $_SESSION["number2"] = 0;
    $_SESSION["answer"] = 0;
    $_SESSION["operator"] = 0;*/


if (!empty($msg)) {
    echo "<div class=\"alert alert-dismissible alert-danger\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  <strong>Whoops!</strong> " . $msg . "</div>";
}

?>
<form class="form-horizontal" action="index.php" method="post">
    <div class="form-group">
        <div class="col-sm-3">
            <label class="control-label" for="email">Email: </label>
        </div>
        <div class="col-sm-9 form-group-req">
            <div>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email"> </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-3">
            <label class="control-label" for="password">Password: </label>
        </div>
        <div class="col-sm-9 form-group-req">
            <div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"> </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-default" name="submit">Login</button>
            <button type="reset" class="btn btn-default" name="reset">Clear form</button>
        </div>
    </div>
</form>
<?php include("include/footer.php"); ?>
