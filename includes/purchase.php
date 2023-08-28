<?php
require_once('connection.php');

if (isset($_GET['uid'])) {
    $uid =  $_GET['uid'];
    $sql1 = "SELECT * FROM cart WHERE userid = '$uid' ORDER BY userid DESC";
    $result = mysqli_query($connect, $sql1);

    // Check if there are items in the cart
    if (mysqli_num_rows($result) > 0) {
        $today = date('Y-m-d');

        // Process each item in the cart
        while ($rows = mysqli_fetch_assoc($result)) {
            $id = $rows['id'];
            $userid = $rows['userid'];
            $dealerid = $rows['dealerid'];
            $bagid = $rows['bagid'];
            $brand = $rows['brand'];
            $sex = $rows['sex'];
            $color = $rows['color'];
            $designer = $rows['designer'];
            $price = $rows['price'];
            $img = $rows['img'];

            // Insert the item into the sold_items table
            $sql2 = "INSERT INTO sold_items(bagid, userid, dealerid, brand, sex, color, designer, img, solddate, price)
                     VALUES('$bagid', '$userid', '$dealerid', '$brand', '$sex', '$color', '$designer', '$img', '$today', '$price')";
            $result2 = mysqli_query($connect, $sql2);

            // Delete the item from the cart
            $sql3 = "DELETE FROM cart WHERE id = '$id'";
            $res3 = mysqli_query($connect, $sql3);

            // Delete the item from the items table (if needed)
            if ($res3) {
                $sql4 = "DELETE FROM items WHERE id = '$bagid'";
                $res4 = mysqli_query($connect, $sql4);
            }
        }

        // All items are processed successfully
        $success = 'Purchase made successfully';
        header('Location: ../CornerLuggage/cart.php?success=' . $success);
        return false;
    } else {
        // Cart is empty
        $error = 'Your cart is empty';
        header('Location: ../CornerLuggage/cart.php?error=' . $error);
        return false;
    }
} else {
    // Invalid request
    header('Location: ../');
    return false;
}
?>
