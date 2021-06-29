<html>
<head>
    <title>Random</title>
    </style>
</head>
<body style="background-color: black;color: yellow;">
    <center>
        <form method="post" action="content.php">
    <table border="1" style="text-align:left">
        <tr>
            <th colspan="2" style="text-align:center"> Set Tour Flight Preference</th>
        </tr>
        <tr>
            <th>Name</th><th><input type="text" name="name"></th>
        </tr>
        <tr>
            <th>Seat Selection</th><th><input type="radio" name="seat" value="Middle">Middle<input type="radio" name="seat" value="Window">Window<input type="radio" name="seat" value="Center">Center</th>
        </tr> 
        <tr>
            <th>Meal Selection</th><th><input type="radio" name="meal" value="Vegeterian">Vegetarian<input type="radio" name="meal" value="Non-Vegetarian">Non Vegetarian<input type="radio" name="meal" value="Diabetic">Diabetic<input type="radio" name="meal" value="Child">Child</th>
        </tr>       
        <tr>
            <th colspan="2" style="text-align:center"><input type="submit" name="submit" value="Submit"></th>
        </tr> 
    </table>
    </form>
    </center>
</body>
</html>