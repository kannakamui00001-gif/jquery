<?php
include('./connect.php');
$name = $_GET['name'];
$remark = $_GET['remark'];

if ($name == "" and $remark == "") {
    echo "ກະລຸນາປ້ອນຂໍ້ມູນ";
} else if ($name == "") {
    echo "ກະລຸນາປ້ອນຊື່";
} else {
    $sql = "insert into food ( name , remark ) values ( '$name' , '$remark' )";
    $insert = mysqli_query($conn, $sql);
    if ($insert) {
        echo "
        <script>
        alert ('ບັນທຶກຂໍ້ມູນສຳເລັດ');
        location = './select.php';
        </script>
        ";
    } else {
        echo "ການບັນທຶກຂໍ້ມູນບໍ່ສຳເລັດ";
    }
}

?>