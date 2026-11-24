<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>

<body>
    <div class=" container-fluid py-5">
        <div class=" row">
            <div class=" col-md-4">
                <div class=" card">
                    <div class=" card-header text-center text-white bg-success-subtle">
                        <h2 class=" text-center" align="center">ຟອມປ້ອນຂໍ້ມູນ</h2>
                    </div>
                    <div class=" card-body">
                        <form action="./get.php" class=" vertical" method="get">
                            <div class=" mt-3">
                                <label for="">ຊື່ : </label>
                                <input type="text" name="fname" placeholder="ປ້ອນຊື່" id="" class=" form-control">

                            </div>
                            <div class=" mt-3">
                                <label for="">ນາມສະກຸນ : </label>
                                <input type="text" name="lname" placeholder="ປ້ອນນາມສະກຸນ" id="" class=" form-control">
                            </div>
                            <div class=" mt-3">
                                <label for="">ເລືອກເພດ</label>
                                <div class=" radio-inline">
                                    <input type="radio" name="gender" value="ເພດຍິງ">ເພດຍິງ
                                    <input type="radio" name="gender" value="ເພດຊາຍ">ເພດຊາຍ
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="button" class=" btn btn-success" id="send">ສົ່ງຂໍ້ມນ</button>
                                <button type="button" class=" btn btn-success" id="reset">ລ້າງຂໍ້ມູນ</button>
                            </div>
                        </form>
                    </div>
                    <div class=" card-footer">
                        <div id="show"></div>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">

            </div>
        </div>
    </div>
</body>

</html>