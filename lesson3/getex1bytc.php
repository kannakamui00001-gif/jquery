<?php

$room_no = htmlspecialchars($_GET['room_no']);
$room_type = htmlspecialchars($_GET['room_type']);
$price = htmlspecialchars($_GET['price']);
$status = htmlspecialchars($_GET['status']);

// echo "ເບີຫ້ອງ : $room_no <br>";
// echo "ປະເພດຫ້ອງ : $room_type <br>";
// echo "ລາຄາ :" .number_format($price)." <br>";
// echo "ສາຖານະ : $status <br>";

?>
<div class="form"> 
    <div class=" mt-3">
        <label for="">ເບີຫ້ອງ </label>
        <input type="text" id="roomnumber" name="roomnumber" value="<?php echo "$room_no"; ?>" class=" form-control" readonly>
    </div>
    <div class=" mt-3">
        <label for="">ປະເພດຫ້ອງ </label>
        <input type="text" id="roomnumber" name="roomnumber" value="<?php echo "$room_type"; ?>" class=" form-control" readonly>
    </div>
    <div class=" mt-3">
        <label for="">ລາຄາຫ້ອງ </label>
        <input type="text" id="roomnumber" name="roomnumber" value="<?php echo "$price"; ?>" class=" form-control" readonly>
    </div>
    <div class=" mt-3 mb-3 >
        <label for="">ສະຖານະ </label>
        <input type="text" id="roomnumber" name="roomnumber" value="<?php echo "$status"; ?>" class=" form-control" readonly>
    </div>
</div>