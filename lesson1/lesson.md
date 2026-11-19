# **1 jQuery ແມ່ນຫຍັງ ?**
ພາສາ Jquery ແມ່ນ java script library ເຊີ່ງ Jquery ໄດ້ລວມເອົາ Object ແລະ function ຕ່າງໆ  ທີ່ຈຳເປັນມາເກັບໄວ້ໃນຮຸບແບບ library ແລະ ຖືກອອກແບບມາເພື່ອເຮັດໃຫ້ການຮຽນ java script ນັ້ນມີຄວາມສະດວກສະບາຍ ແລະ ງ່າຍຂື້ນ 
- ຈຸດປະສົງຫຼັກຂອງການຮຽນ Jquery ແມ່ນເຮົານຳໃຊ້ໃນການຮັບຂໍ້ມູນຈາກຟອມແລ້ວສົ່ງໄປຫາ PHP ເພື່ອທຳການບັນທຶກຂໍ້ມູນຈາກຟອມ.

# **2 ການດາວໂຫຼດ ແລະ ຕິດຕັ້ງ Jquery**
jQuery ສາມາດ ດາວໂຫຼດໄດ້ຈາກ https://jquery.com/download/

        
##### **+ ວິທີ່ການຕິດຕັ້ງ Jquery** 
ເຮົາຈະນຳເອົາຟາຍ jquery.js ເກັບໄວ້ໃນ folder 
ທີ່ເຮົາຕ້ອງການນຳໃຊ້.

##### **+ ໂຄງສ້າງຂອງ ພາສາ jquery** 

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <script src="./jquery.js"></script>
           <script>
            // ຂຽນໂຄດ ລະວ່າງນີ້
         </script>
    </head>
    <body>
    
    </body>
</html>
```

# **3 ຮູບແບບການຂຽນ jquery ມີຢູ່ 2 ຮູແບບຄື:**

##### **ຮູບແບບທີ່ 1** 

# **4 ຈົ່ງຂຽນ jquery ເພື່ອສະແດງຄຳເວົ້າ hello word !!!! ?**

### **ຄຳສັ່ງທີໃຊ້**

```html
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <script src="./jquery.js"></script>
            <script>
                $(document).ready(function () {
                    document.write("Hello world!!!!");
                }); 
            </script>
        </head>
        <body>
                    
        </body>
</html>
```
## **ຕົ່ວຢ່າງ 1**

     1 ເຮົາມີຂໍ້ມູນຄື : 

        <h1> MySQL </h1?>
        <h2> PHP </h2>
        <h3> jquery </h3>

    - ຈົ່ງຂຽນ jquery ເພື່ອເຊື່ອງຂໍ້ມູນໃນ tag <h1> ເຮັດແນວໃດ ?

### **ຄຳສັ່ງທີໃຊ້**

```html
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <script src="./java/jquery.js"></script>
            <script>
                $(document).ready(function () {
                    $('h1').hide() 
                    ;
                });
            </script>
        </head>
        <body>
            <h1>MySQL</h1>
            <h2>PHP</h2>
            <h3>juery</h3>
        </body>
    </html>
```
## **ຕົ່ວຢ່າງ 2**

    2 ເຮົາມີຂໍ້ມູນ

        <h1>test</h1>          
        <button>click here</button>

    - ຈົ່ງຂຽນ jquery ເມື່ອກົດໃສ່ປຸ່ມ click here ແລ້ວໃຫ້ຂໍ້ມູນຢູ່ tag h1 ຫາຍໄປ ?

### **ຄຳສັ່ງທີໃຊ້**
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./java/jquery.js"></script>
    <script>
        $(document).ready(function () {
            $('button').click(function (e) { 
                $('h1').hide();
                
            });
        });
    </script>
</head>
<body>
    <h1> test </h1>
    <button> click here </button>
</body>
</html>
```
## ຕົວຢ່າງ 3

    3 ເຮົາມີຂໍ້ມູນດັ່ງນີ້ :

        <h1>test</h1>
        <p>paragrap 1</p>
        <p>paragrap 2</p>
        <p>paragrap 3</p>
        <button>hide</button>
                
    - ຈົ່ງຂຽນ jquery ເມື່ອກົດປຸ່ມ hid ແລ້ວໃຫ້ຂໍ້ມູນຢູ່ tag p ຫາຍໄປ ?

### ຄຳສັ່ງທີ່ໃຊ້ 
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./java/jquery.js"></script>
    <script>
        $(function(){
            $('button').click(function () { 
                $('p').hide();
                
            });
        });

    </script>
</head>
<body>
    <h1>test</h1>
    <p>paragraph 1</p>
    <p>paragraph 2</p>
    <p>paragraph 3</p>
    <button>hide</button>
</body>
</html>
```

## ຕົວຢ່າງ 4

4 ເຮົາມີຂໍ້ມູນດັງນີ້ : 

    <h3 class = 'a'>ເຈົ້າເລືອກ ສິແດງ</h3>
    <h3 class = 'b'>ເຈົ້າເລືອກ ຟ້າ</h3>
    <button class = 'red'> ສິແດງ </button>
    <button class = 'blue'> ສິຟ້າ </button>

- ຈົ່ງຂຽນ jquery ເພື່ອເຊື່ອງຂໍ້ມູນໃນ h3 ແລ້ວເມື່ອຄຮີກຄຳເວົ້າວ່າ ເຈົ້າເລືອກສິແດງ ໃຫ້ຂື້ນວ່າ ຂໍ້ຄວາມວ່າ ເຈົ້າເລືອກສິແດງ ຖ້າຄິກໃສ່ ປຸ່ມເຈົ້າເລືອກສີຟ້າ ໃຫ້ສະແດງຄຳວ່າ ເຈົ້າເລືອກສີຟ້າ
