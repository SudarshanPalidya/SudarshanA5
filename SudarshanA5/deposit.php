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
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body style="background-color: black;color: yellow;">
    <center>
        <form method="post" action="dep.php">
    <table border="1">
        <tr>
            <th colspan="3" style="text-align: center;"> Deposit</th>
        </tr>   

        <tr>
            <th>Enter Account Number</th><th><input type="text" name="acno"></th>
        </tr>
        <tr>
            <th colspan="3" style="text-align:center"><input type="submit" name="submit" value="Deposit"></th>
        </tr>
    </table>
    <br><br>
        <div id="tab">
            <br>
        </div>
</form>
    </center>
</body>
</html>
