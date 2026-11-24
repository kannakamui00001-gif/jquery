# ບົດທີ່ 2 ການນຳໃຊ້ Events

# 1 jquery events 

+ mouse Event 
  + click ເຫດການຈະກິດຂື້ນເມື່ອ ມີການຄຮິກ element ທີ່ເລືອກ  
  + dblclick ເຫດການຈະກິດຂື້ນເມື່ອ ມີການດັບເບີ້ນຄຮິກ element ທີ່ເລືອກ  
  + mouseenter ເຫດການຈະເກິດຂື້ນ ເມື່ອມີການເລື່ອນເມົ້າໄປຢູ່ທີ່ element ທີເລືອກ
  + mousehover ເຫດການຈະເກິດຂື້ນ ເມື່ອມີການເລື່ອນເມົ້າໄປຢູ່ element ທີ່ເລືອກ 
  + moseover ເຫດການຈະເກິດຂື້ນ ເມື່ອມີການເອົາເມົ້າເລື່ອນໄປຢູ່ element ທີເລືອກ
  + mouseseleave ເຫດການຈະເິກິດຂື້ນ ເມື່ອເອົາເມົ້າອອກຈາກ element ທີ່ເລື່ອກ
  
    <br>

+ actioin affects events 
  + hide ເຊື່ອງ / ຊ້ອນ 
  + show ສະແດງ
  + toggle ເຊື່ອງ ແລະ ສະແດງ
  + slideUp ເລື່ອນຂື້ນ
  + slideDown ເລື່ອນລົງ
  + sidetoggle  ເລື່ອນຂື້ນແລ້ວເລື່ອນລົງ 
  + fadeIn  ຄ່ອຍໆສະແດງອອກມາ 
  + fadeOut  ຄ່ອຍໆຫາຍໄປຊ້າໆ
  + fadeTo  ຄ່ອຍໆຫາຍໄປ ແລະ ຄ່ອຍໆກັບມາ 
  + fadetoggle  ຄ່ອຍໆສະແດງ ແລະ ຄ່ອຍໆຫາຍໄປ
  
  <br>

+ keyboard events
  
  + keypress ໝາຍເຖີງຫາກການທີ່ເກິດຂື້ນ ເມື່ອມີການກົດປຸ່ມໃນ keyboard ຍົກເວັ້ນປຸ່ມທີ່ເປັນ key ຕ່າງໆຂອງ keyboard ເຊັ້ນ : alt , ctrl , shift
  + keydown ໝາຍເຖີງເຫດການຈະເກິດຂື້ນ ເມື່ອມີການກົດປຸ່ມໃນ keyboard 
  + keyup ໝາຍເຖີງເຫດການຈະເກິດຂື້ນ ເມື່ອມີການປ່ອຍປຸ່ມທີ່ກົດໃນ keyborad

<br>

+ ວິທີການນຳໃຊ້ events
  <br>
  + ຮູບແບບການນຳໃຊ້ events 
 
```java
$(function(){
    $('selector').ຊື່ events ທີ່ຕ້ອງການ(function(){
        // ເຫດການທີ່ຈະເຫິດຂື້ນ
    });
});
```
<br>

## ຕົວຢ່າງ 1 

1 ເຮົາມີຂໍ້ມູນດັ່ງນີ້ : 
 <br>

    <p class = 'a'>ຄິກຄັ້ງດຽວ</p>
    <p class = 'b'>ຄິກສອງຄັ້ງ</p>
    <button type = 'button' class = 'btn_a'>click</button>
    <button type = 'button' class = 'btn_b'>dblclick</button>

+ ຈົ່ງຂຽນ jquery ດັ່ງນີ້ :
  + ເມື່ອກົດໃສ່ປຸ່ມ click ແລ້ວໃຫ້ຄຳສັ່ງ ຄິກຄັ້ງດຽວ ນັ້ນຫາຍໄປ ແລະ ຄິກໃສ່ອີກຄັ້ງທີ່ 2 ໃຫ້ກັບມາສະແດງຜົນຄືເກົ່າ
  + ເມື່ອກົດດັບເບີ້ນຄິກໃສ່ ຄຳວ່າ dblclick ແລ້ວໃຫ້ຄຳວ່າ ຄິກ 2 ຄັ້ງ ນັ້ນຫາຍໄປ ແລະ ເມື່ອກົດບັບເບີ້ນຄິກ ອີກຄັ້ງ ໃຫ້ມັນກັບມາສະແດງຜົນຄືເກົ່າ
### ຄຳສັ່ງທີ່ໃຊ້ :​
```java
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="java/jquery.js"></script>
    <script>
        $(document).ready(function () {
            $('.btn_a').click(function (e) { 
                $('.a').toggle();
                
            });
            $('.btn_b').dblclick(function (e) { 
                e.preventDefault();
                $('.b').toggle();
                
            });
        });
    </script>
    
</head>
<body>
    <p class="a">ຄິກຄັ້ງດຽວ</p>
    <p class="b">ຄິກສອງຄັ້ງ</p>
    <button type="button" class="btn_a">click</button>
    <button type="button" class="btn_b">dblclick</button>
</body>
</html>
```

## **ບົບເຜີກຫັດ** 

## **1 ເຮົມມີຂໍ້ມູນດັ່ງນີ້ :**

    <h3 class='a1'>ຄ່ອຍໆຫາຍໄປ</h3>
    <h3 class='b1>ຄ່ອຍໆສະແດງອອກມາ</h3>
    <button type = 'button' class = 'btn1'>ຄິກຄັ້ງດຽວ</button>
    <button type = 'button' class = 'btn2'>ຄິກສອງຄັ້ງ</button>

+ ຈົ່ງຂຽນ jquery ດັ່ງນີ້ : 
  + ເມື່ອເກົດໃສ່ປຸ່ມ ຄິກຄັ້ງດຽວ ໃຫ້ຄຳວ່າ "ຄິກຄັ້ງດຽວ" ນັ້ນຄ່ອຍໆຫາຍໄປ ແລະ ຄຳາວ່າ :​ ຄ່ອຍໆສະແດງອອກມາ ນັ້ນສະແດງຂຶ້ນມາ ແລະ ເມື່ອມີການກົດໃສ່ປຸ່ມ ຄິກຄັ້ງດຽວ ອີກເທື່ອນຶ່ງ ແລ້ວໃຫ້ຄຳວ່າ ຄ່ອຍໆສະແດງອອກມາ ນັ້ນຫາຍໄປ 
  + ເມື່ອເຮົາກົດດັບເບີ້ນຄິກໃສ່ຄຳວ່າ :​ ຄິກສອງຄັ້ງ ໃຫ້ຄຳເວົ້າທັງ 2 ແທັກນັ້ນກັບມາສະແດງທັງໝົດ
  + ເມື່ອເອົາເມົ້າໄປຊື່ໃສ່ປຸ່ມຄິກຄັ້ງດຽວ ແລ້ວໃຫ້ປຸ່ມ ຄິກຄັ້ງດຽວ ໃຫ້ມີສີພື້ນຫຼັງເປັນສິຂຽວ , ມີຂະໜາດໄຫຍ່ຂື້ນ , ປຸ່ມ ຄິກສອງຄັ້ງ ນັ້ນຄ່ອຍໆຫາຍໄປ ,​ ເມືອເອົາເມົ້າອອກແລ້ວ ໃຫ້ປຸ່ມ ຄິກຄັ້ງດຽວ ເປັນສິປົກກະຕິ ແລະ ມີຂະໜາດປົກກະຕິ , ປຸ່ມຄິກສອງຄັ້ງຄ່ອຍໆກັບມາສະແດງ ແລະ ເມື່ອເອົາເມົ້າໄປຊີ້ໃສປຸ່ມ ຄິກສອງຄັ້ງ ແລ້ວໃຫ້ປຸ່ມ ຄິກສອງຄັ້ງ ມີສິພື້ນຫຼັງເປັນສິຟ້າ , ມີຂະໜາດໄຫຍ່ຂື້ນ , ປຸ່ມຄິກຄັ້ງດຽວ ຄ່ອຍໆຫາຍໄປ , ເມື່ອເອົາເມົ້າອອກມຫ້ກັບມາເປັນປົກກະຕິ.
### **ຄຳສັ່ງທີ່ໃຊ້**

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="java/jquery.js"></script>
    <script>
        $(document).ready(function () {
            $('.b1').hide();
            $('.btn1').click(function (e) { 
                e.preventDefault();
                $('.a1').fadeOut();
                $('.b1').fadeIn();
                // $('.b1').fadeToggle();
                $('.btn1').click(function (e) { 
                    e.preventDefault();
                    $('.b1').hide();
                });
            });
            $('.btn2').dblclick(function (e) { 
                e.preventDefault();
                $('.a1').fadeIn();
                $('.b1').fadeIn();
            });
            $('.btn1').mouseenter(function () { 
                $('.btn1').css({"background-color" : "green" , "padding" : "15px"});
                $('.btn2').fadeTo(400 , 0);
            });
            $('.btn1').mouseleave(function () { 
                $('.btn1').css({"background-color" : "" , "padding" : ""});
                $('.btn2').fadeTo(400 , 1);
            });
            $('.btn2').mouseenter(function () { 
                $('.btn2').css({"background-color" : "blue" , "padding" : "15px"});
                $('.btn1').fadeTo(400 , 0);
            });
            $('.btn2').mouseleave(function () { 
                $('.btn2').css({"background-color" : "" , "padding" : ""});
                $('.btn1').fadeTo(400 , 1);
            });
        });
    </script>
</head>
<body>
    <h3 class="a1">ຄ່ອຍໆຫາຍໄປ</h3>
    <h3 class="b1">ຄ່ອຍໆສະແດງອອກມາ</h3>
    <button type="button" class="btn1">ຄິກຄັ້ງດຽວ</button>
    <button type="button" class="btn2">ຄິກສອງຄັ້ງ</button>
</body>
</html>
```

### ຄຳສັ່ງທີ່ ອາຈານໃຊ້ 

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: phetsarath ot;
        }
    </style>
    <script src="java/jquery.js"></script>
    <script>
        $(document).ready(function () {
            $('.b1').hide();
            $('.btn1').click(function (e) { 
                e.preventDefault();
                if($(".b1").is(':hidden')){
                    $('.a1').fadeOut();
                    $('.b1').fadeIn();
                }else{
                    $('.b1').fadeOut();
                }
                
            });
            $('.btn2').dblclick(function (e) { 
                e.preventDefault();
                $('.a1 , .b1').fadeIn();
            });
            $('.btn1').hover(function () {
                    // over
                    $(this).css({"background-color":"green" , "font-size" : '24px'});
                    $('.btn2').fadeTo("slow",0);
                }, function () {
                    // out
                    $(this).css({"background-color":"" , "font-size" : ''});
                    $('.btn2').fadeTo("slow",1);
                }
            );
            $('.btn2').hover(function () {
                    // over
                    $(this).css({'background-color' : 'blue' , "font-size" : "24px"});
                    $('.btn1').fadeTo("slow", 0);
                }, function () {
                    // out
                    $(this).css({'background-color' : '' , "font-size" : ""});
                    $('.btn1').fadeTo("slow", 1);
                }
            );
        });
    </script>
</head>
<body>
    <h3 class="a1">ຄ່ອຍໆຫາຍໄປ</h3>
    <h3 class="b1">ຄ່ອຍໆສະແດງອອກມາ</h3>
    <button type="button" class="btn1">ຄິກຄັ້ງດຽວ</button>
    <button type="button" class="btn2">ຄິກສອງຄັ້ງ</button>
</body>
</html>
```

## **2 ຈົ່ງນຳເອົາຮູບພາບມາສະແດງຜົນໃນໜ້າເວັບຫຼັງຈາກນັ້ນໃຫ້ຂຽນ jquery ດັ່ງນີ້**

+ ເຮົາມີຂໍ້ມູນດັ່ງນີ້ : 
  
        <img src = "ຊື່.ນາມສະກຸນ" width = "300" heigth = "300"></img>
        <button type = "button" id = "slideup">ເລື່ອນຂື້ນ</button>
        <button type = "button" id = "slidedown">ເລື່ອນລົງ</button>
        <button type = "button" id = "slidetoggle">ເລື່ອນຂື້ນ ແລະ ເລື່ອນລົງ</button>

  + ຖ້າຫາກວ່າ ກົດປຸ່ມເລື່ອນຂື້ນໃຫ້ຮູບພາບນັ້ນເລື່ອນຂື້ນ
  + ຖ້າຫາກວ່າ ກົດປຸ່ມເລື່ອນລົງໃຫ້ຮູບພາບນັ້ນເລື່ອນລົງ 
  + ຖ້າຫາກວ່າ ກົດປຸ່ມ ເລື່ອນຂື້ນ ແລະ ເລື່ອນລົງໃຫ້ຮູບພາບນັ້ນ ເລືອນຂືນ ແລະ ເມື່ອກົດອີກຄັ້ງໃຫ້ຮູບພາບນັ້ນ ເລື່ອນລົງ 

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <script src="java/jquery.js"></script>
    <script>
        $(function () {
            $('#slideup').click(function (e) {
                e.preventDefault();
                $('img').slideUp();
            });
            $('#slidedown').click(function (e) {
                e.preventDefault();
                $('img').slideDown();
            });
            $('#slidetoggle').click(function (e) {
                e.preventDefault();
                $('img').slideToggle();
            });
        });
    </script>
</head>

<body class=" px-5 py-5 d-flex flex-column align-items-center ">
    <h1><img src="img/1.png" alt="" width="300px" height=""></h1>
    <div class=" mt-3">
        <button type="button" id="slideup">ເລື່ອນຂື້ນ</button>
        <button type="button" id="slidedown">ເລື່ອນລົງ</button>
        <button type="button" id="slidetoggle">ເລື່ອນຂື້ນແລະເລື່ອນລົງ</button>
    </div>
</body>

</html>
```

## **ບົບເຝິກຫັດ 3**

### **3 ເຮົາມີຂໍ້ມູນດັ່ງນີ້ :​**

    <p> ການນຳໃຊ້ fadeIn ແລະ fadeOut </p>
    <button class = "btn1">fadeIn</button>
    <button class = "btn2">fadeOut</button>

+ ຈົ່ງຂຽນ jquery ດັ້່ງນີ້ :  
  + ເມື່ອເຮົາຄິກໃສ່ປຸ່ມ fadeOut ໃຫ້ຂໍ້ຄວາມຄ່ອຍໆຫາຍໄປ
  + ເມື່ອເຮົາຄິກໃສ່ປຸ່ມ fadeIn ໃຫ້ຂໍ້ຄວາມຄ່ອຍໆກັບມາສະແດງ

### **ຄຳສັ່ງທີ່ໃຊ້**

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="java/jquery.js"></script>
    <script>
        $(document).ready(function () {
            $('.btn1').click(function (e) { 
                e.preventDefault();
                $('p').fadeIn();
            });
            $('.btn2').click(function (e) { 
                e.preventDefault();
                $('p').fadeOut();
            });
        });
    </script>
</head>
<body>
    <p> ການນຳໃຊ້ fadeIn ແລະ fadeOut </p>
    <button class = "btn1">fadeIn</button>
    <button class = "btn2">fadeOut</button>
</body>
</html>
```

## **ບົດເຝິກຫັດ 4**

### **4 ເຮົາມີຂໍ້ມູນດັ່ງນີ້:**

    <h1>ການນຳໃຊ້ mouse events</h1>

+ ຈົ່ງຂຽນ jquery 
  + ເມື່ອເອົາ mouse ໄປຊີ້ໃສ່ ໃຫ້ມີສີພື່ນຫຼັງສີແດງ , ມີຂະໜາດທີ່ໄຫຍ່ຂື້ນ
  + ເມື່ອນຳເອົາເມົ້າອອກໃຫ້ເປັນສີພື້ນຫຼັງສີເຫຼືອງ , ມີນະໜາດນ້ອຍລົງ

### **ຄຳສັ່ງທີ່ໃຊ້ :** 
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="java/jquery.js"></script>
    <script>
        $(document).ready(function () {
            $('h1').hover(function () {
                    // over
                    $('h1').css({'background-color' : 'red' , 'font-size' : '40px'});
                }, function () {
                    // out
                    $('h1').css({'background-color' : 'yellow' , 'font-size' : '20px'});
                }
            );
        });
    </script>
</head>
<body>
    <h1>ການນຳໃຊ້ mouse events</h1>
</body>
</html>
```

## ບົດເຝີກຫັດ 5 

### 5 ເຮົາມີຂໍ້ມູນດັ່ງນີ້ :​

    ປ້ອນຂໍ້ມູນ <input class = 'a' type = "text" name = "text" >

+ ຈົ່ງຂຽນ jquery ດັ່ງນີ້ : 
  + ເມື່ອກົດປຸ່ມ keybroad ໃຫ້ຂະໜາດຕົວໜັງສື ເປັນ 30px ບ໊ອກເປັນສີເທົາ 
  + ເມື່ອເຮົາວາງ ປຸ່ມຄີບອດ ໃຫ້ຂະໜາດຕົວອັກສອນເປັນ 12px ແລະ ບ໊ອກເປັນສີບົວ

### ຄຳສັ່ງທີໃຊ້ 

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="java/jquery.js"></script>
    <script>
        $(document).ready(function () {
            $('.a').keydown(function (e) { 
                $(this).css({'background-color' : 'gray' , 'font-size' : '30px'});
            });
            $('.a').keyup(function (e) { 
                $(this).css({'background-color' : 'pink' , 'font-size' : '12px'});
            });
        });
    </script>
</head>
<body>
    <input type="text" name="text" class="a" id="">
</body>
</html>
```