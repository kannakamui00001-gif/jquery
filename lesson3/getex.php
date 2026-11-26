<?php
$roomnumber = $_GET['roomnumber'];
$type = $_GET['type'];
$price = $_GET['price'];
$status = $_GET['status'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>

<body>
    <form>
        <div class=" mt-3">
            <label for="">ເບີຫ້ອງ : </label>
            <input type="text" name="" id="" value="<?php echo $roomnumber; ?>" class=" form-control" readonly>

        </div>
        <div class=" mt-3">
            <label for="">ປະເພດຫ້ອງ</label>
            <input type="text" name="" id="" value="<?php echo $type; ?>" class=" form-control" readonly>
        </div>
        <div class=" mt-3">
            <label for="">ລາຄາຫ້ອງ</label>
            <input type="text" name="" id="" value="<?php echo $price; ?>" class=" form-control" readonly>
        </div>
        <div class=" mt-3 mb-3">
            <label for="">ສະຖານະຫ້ອງ : </label>
            <input type="text" name="" id="" value="<?php echo $status; ?>" class=" form-control" readonly>
        </div>
    </form>
</body>

</html>