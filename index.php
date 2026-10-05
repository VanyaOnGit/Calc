<html>

<head>
    <title>Calc the elec bill</title>
</head>

<body>
    <h2>Calculate Home Electric Bill</h2>
    <div style="margin bottom: 50px;">
        <table border="1">
            <tr>
                <th>Block Tariff (per month)</th>
                <th>Unit</th>
                <th>Rate</th>
            </tr>

            <tr>
                <td>For the first 200 kWh (1-200 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.218</td>
            </tr>

            <tr>
                <td>For the next 100 kWh (201 – 300 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.344</td>
            </tr>

            <tr>
                <td>For the next 300 kWh (301 – 600 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.516</td>
            </tr>

            <tr>
                <td>For the next 300 kWh (601 – 900 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.546</td>
            </tr>

            <tr>
                <td>For the next kWh (901 kWh onwards) per month</td>
                <td>sen/kWh</td>
                <td>0.571</td>
            </tr>

            <tr>
                <td colspan="3">The minimum monthly chafe is RM300</td>
            </tr>
        </table>
    </div>
    <br>

    <form method="post">
        Enter your first 200 kWh (1-200 kWh) per month :
        <input type="text" name="block1" value=""> <br> <br>
        Enter the next 100 kWh (201 – 300 kWh) per month :
        <input type="text" name="block2" value=""> <br> <br>
        Enter the next 300 kWh (301 – 600 kWh) per month :
        <input type="text" name="block3" value=""> <br> <br>
        Enter the next 300 kWh (601 – 900 kWh) per month :
        <input type="text" name="block4" value=""> <br> <br>
        Enter the next kWh (901 kWh onwards) per month :
        <input type="text" name="block5" value=""> <br> <br>

        <input type="submit" name="calculate" value="Calculate Bill">
        <input type="submit" name="reset" value="Reset">
    </form>


</body>

</html>