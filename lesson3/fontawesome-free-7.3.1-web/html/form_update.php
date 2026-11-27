<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-7.3.1-web/css/all.min.css">
</head>

<body>
    <?php
    include('./connect.php');
    $id = $_GET['id'];
    $sql = "select * from food where id = '$id'";
    $select = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($select);
    ?>
    <div class=" container d-flex justify-content-center align-items-start mt-5 ">
        <div class=" card w-50">
            <div class=" card-header">
                <h2 class=" text-center">ຟ້ອມປ້ອນຂໍ້ມູນ</h2>
            </div>
            <form action="update.php" method="get">
                <div class=" card-body">
                    <label for="">ລະຫັດ</label>
                    <input type="text" name="id" id="" class=" form-control" value="<?php echo $data['id'] ?>">
                    <label for="">ຊື່ເມນູ</label>
                    <input type="text" name="name" id="" class=" form-control" value="<?php echo $data['name'] ?>">
                    <label for="">ໝາຍເຫດ</label>
                    <textarea name="remark" id="" class=" form-control"><?php echo $data['remark'] ?></textarea>
                </div>
                <div class=" card-footer">
                    <button type="submit" class=" btn btn-success"><i class=" fas fa-save"></i>ແກ້ໄຂ</button>
                </div>
            </form>

        </div>
    </div>

</body>

</html>