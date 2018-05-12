<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/ac/dto/AccountDTO.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/ac/bus/AccountBUS.php');
if(isset($_POST["bntSubmit"])){
    $acc = new AccountDTO($_POST["txtfullname"], $_POST["txtusername"], $_POST["txtpassword"], $_POST["txtcreateddate"], $_POST["txtimage"]);
    $date = date_create()->format('Y-m-d H:i:s');
    $acc->setCreatedDate($date);
    $accBus = new AccountBUS();
    $result = $accBus->insert($acc);
    
    if(!$result){
        header("Location:addaccount.php?failure");
    } else{
        header("Location:addaccount.php?inserted");
    }
}
?>

<?php include_once 'header.php'; ?>
<?php
if(isset($_GET["inserted"])){
    echo "<h2>Account is inserted sucessfully </h2>";
}
?>

<form method="POST">
    <div class="row">
        <div class="lbltitle">
            <label>Full Name:</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtfullname" value="<?php echo isset($_POST["txtfullname"])? $_POST["txtfullname"]: "" ?>">
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>User Name:</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtusername" value="<?php echo isset($_POST["txtusername"])? $_POST["txtusername"]: "" ?>">
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Password:</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtpassword" value="<?php echo isset($_POST["txtpassword"])? $_POST["txtpassword"]: "" ?>">
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Created Date:</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtcreateddate" value="<?php echo isset($_POST["txtcreateddate"])? $_POST["txtcreateddate"]: "" ?>">
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Image:</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtimage" value="<?php echo isset($_POST["txtimage"])? $_POST["txtimage"]: "" ?>">
        </div>
    </div>
    <div class="row">
        
        <div class="submit">
            <input type="submit" name="bntSubmit" value="Add Account">
        </div>
    </div>
</form>

<?php include_once 'footer.php'; ?>