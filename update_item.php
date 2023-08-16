<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item | EasyParcel</title>
</head>
<body>
    <?php 
    include 'conn.php';

    if($conn){
        if(isset($_POST['update'])){
            $name = mysqli_escape_string($conn,$_POST['name']);
            $dateReceived = $_POST['date'];
            $courier = $_POST['courier'];
            $trackingNumber = $_POST['tracking'];

            $update = mysqli_query($conn,"UPDATE easyparcel SET date_received='$dateReceived',courier='$courier',
            tracking_num='$trackingNumber' WHERE name_parcel ='$name'");

            if ($update){
                header("Location:view.php");
                exit();
            }else {
                echo "Error updating parcel info". mysqli_error($conn);

            }
            }

            $name = $_REQUEST['mid'];
            $sql = mysqli_query($conn,"SELECT * FROM easyparcel WHERE name_parcel = '$name'");

            if ($sql){
                $row = mysqli_fetch_array($sql);
            } else {
                echo "Error fetching data". mysqli_error($conn);
            }
            mysqli_close($conn);
            }else {
                echo "Error connection to the database". mysqli_connect_error();
            }
        
    
?>
    <center>
    <form action="" method="post">
    <h3>EasyParcel | Update Item</h3>
    <table>
    <tr>
        <td>NAME : </td>
        <td><input type="text" name="name" value="<?php echo $row['name_parcel']; ?>"></td>
    </tr>
    <tr>
        <td>DATE RECEIVED : </td>
        <td><input type="datetime-local" name="date" value="<?php echo $row['date_received']; ?>"></td>
    </tr>
    <tr>
        <td>COURIER: </td>
        <td>
        <select name="courier">
                <option value="J&T Express" <?php if ($row['courier'] === 'J&T Express') echo 'selected'; ?>>J&T Express</option>
                <option value="Shopee Express" <?php if ($row['courier'] === 'Shopee Express') echo 'selected'; ?>>Shopee Express</option>
                <option value="GDEX Express" <?php if ($row['courier'] === 'GDEX Express') echo 'selected'; ?>>GDEX Express</option>
                <option value="City Link Express" <?php if ($row['courier'] === 'City Link Express') echo 'selected'; ?>>City Link Express</option>
                <option value="PosLaju Express" <?php if ($row['courier'] === 'PosLaju Express') echo 'selected'; ?>>PosLaju Express</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>TRACKING NUMBER : </td>
        <td><input type="number" name="tracking" value="<?php echo $row['tracking_num']; ?>"></td>
    </tr>

    </table>
    <button type="submit" name="update">Update Item</button>
    </form>

    </center>
</body>
</html>