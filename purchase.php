<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'pharma-master');

if (mysqli_connect_error()) {
    echo "<script>
    alert('cannot connect to database');
    window.location.href='cart.php';
    </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['purchase'])) {
        $query1 = "INSERT INTO `manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
        if (mysqli_query($db, $query1)) {
            $Order_Id = mysqli_insert_id($db);
            $query2 = "INSERT INTO `orders`(`order_id`, `item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($db, $query2);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "isii", $Order_Id, $Item_Name, $Price, $Quantity);
                foreach ($_SESSION['cart'] as $key => $values) {
                    $Item_Name = $values['Item_Name'];
                    $Price = $values['Price'];
                    $Quantity = $values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo "<script>
window.location.href = 'thankyou.html';
</script>";
            } else {
                echo "<script>
alert('SQL Query Prepare Error');
window.location.href = 'cart.php';
</script>";
            }
        } else {
            echo "<script>
alert('SQL Error');
window.location.href = 'cart.php';
</script>";
        }
    }
}