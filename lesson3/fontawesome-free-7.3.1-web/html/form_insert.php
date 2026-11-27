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
    <div class=" container d-flex justify-content-center align-items-start mt-5">
        <div class=" card w-50">
            <div class=" card-header">
                <h2 class=" text-center">ຟ້ອມປ້ອນຂໍ້ມູນ</h2>
            </div>
            <form action="insert.php" method="get">
                <div class=" card-body">
                    <label for="">ຊື່ເມນູ</label>
                    <input type="text" name="name" id="" class=" form-control">
                    <label for="">ໝາຍເຫດ</label>
                    <textarea name="remark" id="" class=" form-control"></textarea>
                </div>
                <div class=" card-footer">
                    <button type="submit" class=" btn btn-success"><i class=" fas fa-save"></i>ບັນທຶກຂໍ້ມູນ</button>
                    <button type="reset" class=" btn btn-warning"><i class=" fas fa-eraser"></i>ລ້າງຂໍ້ມູນ</button>
                </div>
            </form>

        </div>
    </div>

</body>

</html>