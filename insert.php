<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Item | EasyParcel</title>
</head>
<body>
    <center>
    <form action="insertstock.php" method="post">
    <h3>EasyParcel | Insert Item</h3>
    <table>
    <tr>
        <td>NAME : </td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>DATE RECEIVED : </td>
        <td><input type="datetime-local" name="date"></td>
    </tr>
    <tr>
        <td>COURIER: </td>
        <td>
            <select name="courier">
                <option value="J&T EXPRESS">J&T EXPRESS</option>
                <option value="SHOPEE EXPRESS">SHOPEE EXPRESS</option>
                <option value="GDEX EXPRESS">GDEX EXPRESS</option>
                <option value="CITYLINK EXPRESS">CITYLINK EXPRESS</option>
                <option value="POSLAJU EXPRESS">POSLAJU EXPRESS</option>
        
        </select>
        </td>
    </tr>
    <tr>
        <td>TRACKING NUMBER : </td>
        <td><input type="number" name="tracking"></td>
    </tr>

    </table>
    <button type="submit" name="submit">Insert Item</button>
    </form>

    </center>
</body>
</html>