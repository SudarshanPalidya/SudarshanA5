<?php
include 'con_db.php';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body style="background-color: black;color: yellow;">
    <center>
        <form method="post">
    <table border="2" style="text-align:left;" cellpadding="2px">
        <thead>
                                            <tr>
                                                <th>Sl. No</th>
                                                <th>Account Number</th>
                                                <th>Customer Name</th>                                       
                                                <th>Customer Address</th> 
                                                <th>Account Type</th>                                        
                                                <th>Balance</th>   

                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"SELECT * FROM customer ORDER BY acno ASC");
                                            while($row=mysqli_fetch_array($sql))
                                            {
                                          ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $i++;  ?></td>
                                                
                                                <td ><?php echo $row['acno'];  ?></td>
                                                <td><?php echo $row['cust_name'];  ?></td>
                                                <td><?php echo $row['cust_address'];  ?></td>
                                                <td><?php echo $row['acc_type'];  ?></td>
                                                <td><?php echo $row['balance'];  ?></td>
                                            </tr>
                                           <?php } ?> 
                                           <tr></tr>
                                           <tr><td colspan="6" style="text-align:left"></td></tr>
                                        </tbody>
    </table>

</form>
    </center>
</body>
</html>
