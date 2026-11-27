<?php
include('./connect.php');
$id = $_GET['id'];
$name = $_GET['name'];
$remark = $_GET['remark'];

$sql = "update food set 
    name = '$name',
    remark = '$remark'
    where id = '$id'";
$insert = mysqli_query($conn, $sql);
if ($insert) {
    echo "
        <script>
        alert ('ການແກ້ໄຂຂໍ້ມູນສຳເລັດ');
        location = './select.php';
        </script>
        ";
} else {
    echo "ແກ້ໄຂຂໍ້ມູນບໍ່ສຳເລັດ";
}

?>
