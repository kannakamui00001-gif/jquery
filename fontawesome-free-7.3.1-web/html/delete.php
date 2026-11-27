<?php
include('./connect.php');
$id = $_GET['id'];

$sql = "delete from food where id = '$id'";
$delete = mysqli_query($conn, $sql);

if ($delete) {
    echo "
    <script>
    alert ('ລົບຂໍ້ມູນສຳເລັດ');
    location = './select.php';
    </script>
    ";
} else {
    echo "ລົບຂໍ້ມູນບໍ່ສຳເລັດ";
}

?>