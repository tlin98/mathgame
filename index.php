<?php
$_GET["msg"];
include("include/header.php");
if (!empty($_GET["msg"])) {
    echo "<div class=\"alert alert-dismissible alert-danger\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  <strong>Whoops!</strong> " . $_GET["msg"] . "</div>";
}
?>
<form class="form-horizontal" action="coincount.php" method="post">
    <div class="form-group">
        <div class="col-sm-3">
            <label class="control-label" for="name">Your name: </label>
        </div>
        <div class="col-sm-9 form-group-req">
            <div>
                <input type="text" class="form-control col-sm-10" id="name" name="name" placeholder="Enter name">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="pennies">Pennies(1 &cent;): </label>
        <div class="col-sm-9">
            <input type="text" class="form-control col-sm-10" id="pennies" name="pennies" min="0" placeholder="Enter pennies">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="nickels">Nickels (5 &cent;): </label>
        <div class="col-sm-9">
            <input type="text" class="form-control col-sm-10" id="nickels" name="nickels" min="0" placeholder="Enter nickels">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="dimes">Dimes (10 &cent;): </label>
        <div class="col-sm-9">
            <input type="text" class="form-control col-sm-10" id="dimes" name="dimes" min="0" placeholder="Enter dimes">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="quarters">Quarters (25 &cent;): </label>
        <div class="col-sm-9">
            <input type="text" class="form-control col-sm-10" id="quarters" name="quarters" min="0" placeholder="Enter quarters">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="onedollars">1 Dollar Coins: </label>
        <div class="col-sm-9">
            <input type="text" class="form-control col-sm-10" id="onedollars" name="onedollars" min="0" placeholder="Enter one dollar coins">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="twodollars">2 Dollar Coins: </label>
        <div class="col-sm-9">
            <input type="text" class="form-control col-sm-10" id="twodollars" name="twodollars" min="0" placeholder="Enter two dollar coins">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-default" name="submit">Calculate Coins</button>
            <button type="reset" class="btn btn-default" name="reset">Clear form</button>
        </div>
    </div>

</form>
<?php include("include/footer.php"); ?>
