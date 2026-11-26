<?php
$roomnumber = $_GET['roomnumber'];
$type = $_GET['type'];
$price = $_GET['price'];
$status = $_GET['status'];
echo "ເລກຫ້ອງ : $roomnumber<br>";
echo "ປະເພດຫ້ອງ : $type.<br>";
echo "ລາຄາຫ້ອງ : $price<br>";
echo "ສະຖານະຫ້ອງ : $status<br>";

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
    <form action="./get.php" class=" vertical" method="get">
        <div class=" mt-3">
            <label for="">ເບີຫ້ອງ : </label>
            <input type="text" id="roomnumber" name="roomnumber" placeholder="ປ້ອນເລກຫ້ອງ" class=" form-control">

        </div>
        <div class=" mt-3">
            <label for="">ປະເພດຫ້ອງ</label>
            <select name="type" id="type" class=" form-select">
                <option value="">ກະລຸນາເລືອກປະເພດຫ້ອງ</option>
                <option value="good">good</option>
                <option value="bad">bad</option>
            </select>
        </div>
        <div class=" mt-3">
            <label for="">ລາຄາຫ້ອງ</label>
            <select name="price" id="price" class=" form-select">
                <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
            </select>
        </div>
        <div class=" mt-3">
            <label for="">ສະຖານະຫ້ອງ : </label>
            <input type="text" name="" id="" value="<?php echo $status; ?>">
        </div>
    </form>
</body>

</html>