<?php

include 'conn.php';

$sql = "SELECT * from easyparcel";
$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Item | Easyparcel</title>
</head>
<style>
table,td,th {
    border-collapse : collapse;
    border : 1px solid;
}
</style>
<body>
    <center>
        <?php if (mysqli_num_rows($result) > 0) {

        ?>
        <table>
            <tr>
            <th>NO.</th>
            <th>NAME</th>
            <th>DATE RECEIVED</th>
            <th>COURIER</th>
            <th>TRACKING NUMBER</th>

            </tr>
            <?php

            $count = 1 ; 
            while($row = mysqli_fetch_assoc($result)){

            ?>
                <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $row['name_parcel']; ?></td>
                <td><?php echo $row['date_received']; ?></td>
                <td><?php echo $row['courier']; ?></td>
                <td><?php echo $row['tracking_num']; ?></td>

                </tr>
                <?php
            }
            ?>
        </table>
        <?php  } else { ?>
            <p>No Result found</p>
            <?php } ?>
        
        <a href="index.php">Main Page</a>

    </center>
</body>
</html>
