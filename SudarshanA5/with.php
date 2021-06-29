<?php
include 'con_db.php';
if(isset ($_POST["del"]))
{
$amt = $_POST['amt'];
$acno = $_POST['acno'];
        $q =mysqli_query($con, "select * from customer WHERE acno = $acno ");
        $row=mysqli_fetch_array($q);

$bal = $row['balance'];

$tot=$bal-$amt;
if($tot>=500)
{
$sql = mysqli_query($con,"UPDATE `customer` set `balance`='$tot' WHERE acno='$acno'");
if($sql)
                    {
                        echo '<script>alert("Amount Withdrawn Successfully");window.location="view_bank.php"</script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed");</script>'; 
                    }
}else
{
  echo '<script>alert("Minimum 500 Rupees should be maintained");window.location="withdraw.php"</script>';  
}
}
?>