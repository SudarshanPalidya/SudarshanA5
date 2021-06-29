<?php
include 'con_db.php';
    if($_POST)
    {
        $pno  =$_POST['passno'];
        $q =mysqli_query($con, "select * from passport WHERE pass_no = $pno ");
        $row=mysqli_fetch_array($q);
    }
?>

<html>
<head>
    <title>Random</title>
    <style type="text/css">
        p {
color:white;
font-size:50px;
position: absolute;
top: 20%;
left: 40%;
transform: translate(-50%, -50%);
}
    </style>
</head>
<body style="background-color: black;color: yellow;">
    <center>
        <form method="post" enctype="multipart/form-data">
    <table border="1" style="text-align:left;">
        <tr>
            <th colspan="2" style="text-align:center;"> Update</th>
        </tr>
        <tr>
            <th>Enter Passport Number</th><th><input type="text" name="passno" value="<?php echo $row['pass_no']; ?>"></th>
        </tr>
        <tr>
            <th>Enter First Name</th><th><input type="text" name="fname" value="<?php echo $row['fname']; ?>"></th>
        </tr>
        <tr>
            <th>Enter Middle Name</th><th><input type="text" name="mname" value="<?php echo $row['mname']; ?>"></th>
        </tr>
        <tr>
            <th>Enter Last Number</th><th><input type="text" name="lname" value="<?php echo $row['lname']; ?>"></th>
        </tr>
        <tr>
            <th>Enter DOB</th><th><input type="date" name="dob" value="<?php echo $row['dob']; ?>"></th>
        </tr>
        <tr>
            <th>Enter Nationality</th><th><input type="text" name="nation" value="<?php echo $row['nationality']; ?>"></th>
        </tr>
        <tr>
            <th>Address</th><th><textarea name="address" ><?php echo $row['address']; ?></textarea></th>
        </tr>
        <tr>
            <th>Select Gender</th><th>
            	<input type="radio" name="gender" value="male" <?php if($row['gender']=="male"){ echo "checked";}?>>Male<input type="radio" name="gender" value="female" <?php if($row['gender']=="female"){ echo "checked";}?>>Female<input type="radio" name="gender" value="other" <?php if($row['gender']=="other"){ echo "checked";}?>>Other</th>
        </tr>      
        <tr>
            <th>Upload Picture</th><th><img src="<?php echo $row['pic']; ?>" height="100px" width="100px"><input type="file" name="file" ></th>
        </tr>  
        <tr>
            <th colspan="3" style="text-align:center"><input type="submit" name="update" value="Update"></th>
        </tr> 
    </table>
</form>
    </center>
<?php
if(isset ($_POST["update"]))
{
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$passno = $_POST['passno'];
$nation = $_POST['nation'];
$addr = $_POST['address'];
$gender = $_POST['gender'];
$pic=$row['pic'];
$pname=$_FILES['file']['name'];
        $ftype=$_FILES['file']['type'];
        $fsize=$_FILES['file']['size'];
        $floc=$_FILES['file']['tmp_name'];
        $fstore="upload/".$pname;
        move_uploaded_file($floc,$fstore);
    if($fstore=="upload/")
    {
    	$fstore=$pic;
    }

$sql = mysqli_query($con,"UPDATE `passport` set `pass_no`='$passno',`fname`='$fname',`mname`='$mname',`lname`='$lname',`dob`='$dob',`nationality`='$nation',`address`='$addr',`gender`='$gender',`pic`='$fstore' WHERE pass_no='$pno'");
if($sql)
                    {
                        echo '<script>alert("Data Updated Successfully");window.location="view.php"</script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed");</script>'; 
                    }
}
?>
</body>
</html>
