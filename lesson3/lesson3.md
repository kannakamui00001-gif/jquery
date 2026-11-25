
# ບົບທີ່ 3 ການນຳໃຊ້ jquery ເພື່ອຮັບຂໍ້ມູນຈາກແບບຟອມ

# 1 ການຮັບຂໍ້ມູນດ້ວຍ jquery 

ເຮົາຈະຂຽນ jquery ເພື່ອຮັບຂໍ້ມູນຈາກແບບຟອມ ຫຼັງຈາກນັ້ນຈື່ງຄ່ອຍດື່ງຂໍ້ມູນທີ່ຮັບມາ ໄປຫວາງອີກຟາຍໜຶ່ງ ເພື່ອໃຫ້ເຮັດວຽກຕາມຈຸດປະສົງທີ່ຕ້ອງການ

## ຮູບແບບການຮັບຂໍ້ມູນ : 

```java
$(function(){
    $('ເລືອກ ID ຫຼື class ຂອງປຸ່ມ').click(function(){
        var ຊື່ຕົວປຽນທີ່ 1 = $('ຮັບ id ຫຼື class ບ໊ອກ1').val();
        var ຊື່ຕົວປຽນທີ່ 2 = $('ຮັບ id ຫຼື class ບ໊ອກ2').val();
        $.get ຫຼຶ POST ('ຊື່ຟາຍ.ນາມສະກຸນ',{
            ວາງຕົວປຽນໃໝ່1:ຕົວປຽນ1,
            ວາງຕົວປຽນໃໝ່2:ຕົວປຽນ2
        },
        function(Output){
            $('ບ່ອນສະແດງຂໍ້ມູນ ເລືອກ id ຫຼຶ class').html(output);
        });
    });
});
```

## ຕົວຢ່າງ 1 

### 1 ຈົ່ງສ້າງຟອມບັນທຶກຂໍ້ມູນດັ່ງນີ້ໃຊ້ : (ນຳໃຊ້ bootstarp)
+ ມີດັ້ງນີ້ :​
  + ຊື່ 
  + ນາມສະກຸນ 
  + ເພດ 
  + ປຸ່ມສົ່ງຂໍ້ມູນ 
  + ປຸ່ມລ້າງຂໍ້ມູນ 
+ ຫຼັງຈາກນັ້ນຂຽນ jquery ເພື່ອຮັບຂໍ້ມູນຈາກ ຟອມ ແລ້ວ ສົ່ງຂໍ້ມູນໄປຫາ file ຊື່ວ່າ get.php

## **ຄຳສັ່ງທີ່ໃຊ້ :**

+ ໃນຂໍ້ນີ້ຕ້ອງໃຊ້ 2 file ຄື : 
  + file ຊື້ :​ ep1.php ເປັນ file ສະແດງໜ້າເວັບ ແລະ ຂຽນ scrpit
  + file ຊື່ : get.php ເປັນ file ທີ່ຈຳເອົາຂໍ້ມູນທີ່ໄດ້ຈາກ ep1.php ໄປໃຊ້ງານ ໃນທີ່ນີ້ຄືນຳໄປເຮັດໃຫ້ສາມາດສົ່ງຂໍ້ມູນກັບມາອອກທາງ file ep1.php ໄດ້
  
<br>

+ ຄຳສັ່ງຂອງແຕ່ລະ file 
+ file ຊື່ : ep1.php
```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <style>
        *{
            font-family: phetsarath ot;
            justify-content: center;
        }
    </style>
    
    <script src="./java/jquery.js"></script>
    <script>
        $(document).ready(function () {
            $('#send').click(function (e) { 
                e.preventDefault();
                var a = $("#fname").val();
                var b = $("#lname").val();
                var c = $("input[id='gender']:checked").val();
                $.get("get.php",{
                    fname:a,
                    lname:b,
                    gender:c
                },
                function(output){
                    $("#show").html(output);
                }
            );
            });
            $('#reset').click(function (e) { 
                e.preventDefault();
                var a = $("#fname").val();
                var b = $("#lname").val();
                var c = $("input[id='gender']:checked").val();
                $('#show').html("");
            });
        });
    </script>
</head>

<body>
    <div class=" container-fluid py-5">
        <div class=" row">
            <div class=" col-md-4"></div>
            <div class=" col-md-4">
                <div class=" card">
                    <div class=" card-header text-center text-white bg-success-subtle">
                        <h2 class=" text-center" align="center">ຟອມປ້ອນຂໍ້ມູນ</h2>
                    </div>
                    <div class=" card-body">
                        <form action="./get.php" class=" vertical" method="get">
                            <div class=" mt-3">
                                <label for="">ຊື່ : </label>
                                <input type="text"  id = "fname" name="fname" placeholder="ປ້ອນຊື່" id="" class=" form-control">

                            </div>
                            <div class=" mt-3">
                                <label for="">ນາມສະກຸນ : </label>
                                <input type="text"  id = "lname" name="lname" placeholder="ປ້ອນນາມສະກຸນ" id="" class=" form-control">
                            </div>
                            <div class=" mt-3">
                                <label for="">ເລືອກເພດ</label>
                                <div class=" radio-inline">
                                    <input type="radio"  id = "gender" name="gender" value="ເພດຍິງ">ເພດຍິງ
                                    <input type="radio"  id = "gender" name="gender" value="ເພດຊາຍ">ເພດຊາຍ
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
```
<br>

+ file ຊື່ : get.php
```php
<?php 
    $fname=$_GET['fname'] ;
    $lname=$_GET['lname'] ;
    $gender=$_GET['gender'] ;
    echo "ຊື່ : $fname<br>";
    echo "ນາມສະກຸນ : $lname.<br>";
    echo "ເພດ : $gender<br>";
?>
```  

## **ບົດເຝິກຫັດ 1**

### 1 ການນຳໃຊ້ if else , if else ເພື່ອກວບສອບຂໍ້ມູນ :

+ ເຮົາມີຂໍ້ມູນດັ່ງນີ້ : 
  + ເບີຫ້ອງ   
  + ປະເພດຫ້ອງ    selection
  + ລະຄາຫ້ອງ     selection
  + ສະຖ້ານະຫ້ອງ     radio
+ ຈົ່ງຂຽນ jquey ດັ່ງນີ້ : 
  + ຖ້າຫາກວ່າບໍ່ໄດ້ປ້ອນຂໍ້ມູນໃຫ້ຂື້ນຄຳວ່າ ກະລຸນາປ້ອນຂໍ້ມູນ
  + ຖ້າຫາກວ່າບໍ່ໄດ້ ເລືອກປະເພດຫ້ອງ ໃຫ້ຂື້ນຄຳວ່າ ກະລຸນາ ເລືອກປະເພດຫ້ອງກ່ອນ
  + ຖ້າຫາກວ່າບໍ່ໄດ້ ເລືອກລາຄາຫ້ອງ ໃຫ້ຂື້ນຄຳວ່າ ກະລຸນາ ເລືອກລາຄາຫ້ອງກ່ອນ
  + ຖ້າຫາກວ່າບໍ່ໄດ້ ເລືອກສະຖານະຫ້ອງ ໃຫ້ຂື້ນຄຳວ່າ ຫ້ອງບໍ່ວ່າງ

+ ໂຄງສ້າງ ການນຳໃຊ້ if else if else 
  
```java
    $(function(){
        $('ເລືອກ ID ຫຼື class ຂອງປຸ່ມ').click(function(){
            var ຕົວປຽນ1 = $('ເລືອກ id ຫຼຶ class ຂອງບ໊ອກທີ່ 1').val();
            var ຕົວປຽນ2 = $('ເລືອກ id ຫຼຶ class ຂອງບ໊ອກທີ່ 2').val();
            
            if(ຊື່ຕົວປຽນ == ""){
                alert('ປ້ອນຂໍ້ມູນ...');
            }else if(ຊື່ຕົວປຽນ == ""){
                alert('ປ້ອນຂໍ້ມູນ');
            }else{
                $.get ຫຼື post ("ຊື່ໄຟ.ນາມສະກຸນ",{
                    ວາງຕົວປຽນໃໝ່1 : ຮັບຕົວປຽນ1,
                    ວາງຕົວປຽນໃໝ່2 : ຮັບຕົວປຽນ2
                },
                function(output){
                    $("ບ່ອນສະແດງຂໍ້ມູນເພື່ອລາຍງານຜົນ ID ຫຼື class").html(output);
                }
                );
            }// ປິດ else
        });
    });
```
## **ຄຳສັ່ງທີ່ໃຊ້ :**

+ ໃນຂໍ້ນີ້ຕ້ອງໃຊ້ 2 file ຄື : 
  + file ຊື້ :​ ex1.php ເປັນ file ສະແດງໜ້າເວັບ ແລະ ຂຽນ scrpit
  + file ຊື່ : getex.php ເປັນ file ທີ່ຈຳເອົາຂໍ້ມູນທີ່ໄດ້ຈາກ ep1.php ໄປໃຊ້ງານ ໃນທີ່ນີ້ຄືນຳໄປເຮັດໃຫ້ສາມາດສົ່ງຂໍ້ມູນກັບມາອອກທາງ file ep1.php ໄດ້
  
<br>

+ ຄຳສັ່ງຂອງແຕ່ລະ file 
+ file ຊື່ : ex1.php
```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <style>
        * {
            font-family: phetsarath ot;
            justify-content: center;
        }
    </style>

    <script src="./java/jquery.js"></script>
    <script>
        $(document).ready(function() {
            $('#send').click(function(e) {
                e.preventDefault();
                var a = $("#roomnumber").val();
                var b = $("#type").val();
                var c = $("#price").val();
                var d = $("input[id='status']:checked").val();
                if(a == ""){
                    alert('ກະລຸນາປ້ອນເລກຫ້ອງ')
                }
                else if(b == ""){
                    alert('ກະລຸນາເລືອກປະເພດຫ້ອງ')
                }
                else if(c == ""){
                    alert('ກະລຸນາເລືອກລາຄາຫ້ອງ')
                }
                else if(d == ""){
                    alert('ຫ້ອງບໍ່ວ່າງ')
                }else{
                $.get("getex.php", {
                        roomnumber: a,
                        type: b,
                        price: c,
                        status: d
                    },
                    function(output) {
                        $("#show").html(output);
                    }
                );
                }
            });
            $('#reset').click(function(e) {
                e.preventDefault();
                var a = $("#roomnumber").val();
                var b = $("#type").val();
                var c = $("#price").val();
                var d = $("input[id='status']:checked").val();
                $('#show').html("");
            });
        });
    </script>
</head>

<body>
    <div class=" container-fluid py-5">
        <div class=" row">
            <div class=" col-md-4"></div>
            <div class=" col-md-4">
                <div class=" card">
                    <div class=" card-header text-center text-white bg-success-subtle">
                        <h2 class=" text-center" align="center">ຟອມປ້ອນຂໍ້ມູນ</h2>
                    </div>
                    <div class=" card-body">
                        <form action="./get.php" class=" vertical" method="get">
                            <div class=" mt-3">
                                <label for="">ເບີຫ້ອງ : </label>
                                <input type="text" id="roomnumber" name="roomnumber" placeholder="ປ້ອນເລກຫ້ອງ" class=" form-control">

                            </div>
                            <div class=" mt-3">
                                <label for="">ປະເພດຫ້ອງ</label>
                                <select name="type" id="type">
                                    <option value="">ກະລຸນາເລືອກປະເພດຫ້ອງ</option>
                                    <option value="good">good</option>
                                    <option value="bad">bad</option>
                                </select>
                            </div>
                            <div class=" mt-3">
                                <label for="">ລາຄາຫ້ອງ</label>
                                <select name="price" id="price">
                                    <option value="">ກະລຸນາເລືອກລາຄາຫ້ອງ</option>
                                    <option value="1000000">1000000</option>
                                    <option value="500000">500000</option>
                                </select>
                            </div>
                            <div class=" mt-3">
                                <label for="">ສະຖານະຫ້ອງ</label>
                                <div>
                                    <input type="radio" name="status" id="status" value="ວ່າງ">ວ່າງ
                                    <input type="radio" name="status" id="status" value="ບໍ່ວ່າງ">ບໍ່ວ່າງ
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class=" card-footer">
                        <button type="button" class=" btn btn-success" id="send">ສົ່ງຂໍ້ມນ</button>
                        <button type="button" class=" btn btn-success" id="reset">ລ້າງຂໍ້ມູນ</button>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div id="show"></div>
            </div>
        </div>
    </div>
</body>

</html>
```
<br>

+ file ຊື່ : getex.php
```php
<?php 
    $roomnumber=$_GET['roomnumber'] ;
    $type=$_GET['type'] ;
    $price=$_GET['price'] ;
    $status=$_GET['status'] ;
    echo "ເລກຫ້ອງ : $roomnumber<br>";
    echo "ປະເພດຫ້ອງ : $type.<br>";
    echo "ລາຄາຫ້ອງ : $price<br>";
    echo "ສະຖານະຫ້ອງ : $status<br>";
?>
```