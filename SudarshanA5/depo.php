<?php
include 'con_db.php';
if(isset ($_POST["add"]))
{
$amt = $_POST['amt'];
$acno = $_POST['acno'];
        $q =mysqli_query($con, "select * from customer WHERE acno = $acno ");
        $row=mysqli_fetch_array($q);

$bal = $row['balance'];

$tot=$amt+$bal;
$sql = mysqli_query($con,"UPDATE `customer` set `balance`='$tot' WHERE acno='$acno'");
if($sql)
                    {
                        echo '<script>alert("Amount Deposited Successfully");window.location="view_bank.php"</script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed");</script>'; 
                    }
}
?>