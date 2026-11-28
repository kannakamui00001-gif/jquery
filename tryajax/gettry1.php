<?php
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$gender = $_GET['gender'];
$dob = $_GET['dob'];
$dis = $_GET['dis'];
$dis = $_GET['dis'];
$vill = $_GET['vill'];
$pro = $_GET['pro'];
$note = $_GET['note'];
?>
<form action="">
    <label for="" class=" mt-3 form-label">ຊື່</label>
    <input type="text" name="fname" id="" class="fname form-control" ;>
    <label for="" class=" mt-3 form-label">ນາມສະກຸມ</label>
    <input type="text" name="lname" id="" class="lname form-control" placeholder="ກະລຸນາປ້ອນ ນາມສະກຸນ">
    <label for="" class=" mt-3 form-label">ເພດ : </label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="ເພດຊາຍ"> ເພດຊາຍ
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="ເພດຍິງ"> ເພດຍິງ
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="femboy"> femboy
    </div>
    <label for="" class=" mt-3 form-label"> ວັນເດືອນປີເກິດ </label>
    <input type="date" name="dob" id="" class="dob form-control">
    <label for="" class=" mt-3 form-label">ບ້ານ</label>
    <input type="text" name="vill" id="" class="vill form-control" placeholder="ກະລຸນາປ້ອນ ບ້ານ">
    <label for="" class=" mt-3 form-label">ເມືອງ</label>
    <input type="text" name="dis" id="" class="dis form-control" placeholder="ກະລຸນາປ້ອນ ເມືອງ">
    <label for="" class=" mt-3 form-label">ແຂວງ</label>
    <select name="pro" id="" class="pro form-select ">
        <option value="">ກະລຸນາເລືອກເມືອງ</option>
        <option value="ວຽງຈັນ">ວຽງຈັນ</option>
        <option value="ອື່ນໆ">ອື່ນໆ</option>
    </select>
    <label for="" class=" mt-3 form-label">ຂໍ້ມູນຕິດຕໍ່</label>
    <textarea name="contact" id="" class="contact form-control" placeholder="ປ້ອນຂໍ້ມູນຕິດຕໍ່ "></textarea>
</form>