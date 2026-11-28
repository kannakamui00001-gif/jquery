<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>try frist</title>
    <link rel="stylesheet" href="./bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-7.3.1-web/css/all.min.css">
    <style>
        body {
            background: #343232;
        }
    </style>
    <script src="./java/jquery.js"></script>
    <script src="./java/alert.js"></script>
    <script>
        $(document).ready(function () {
            $('.send').click(function (e) { 
                e.preventDefault();
                var fname = $(".fname").val();
                var lname = $(".lname").val();
                var gender = $(".input[name='gender']:checked").val();
                var dob = $(".dob").val();
                var vill = $(".vill").val();
                var dis = $(".dis").val();
                var pro = $(".pro").val();
                var contact = $(".contact").val();

                $.get("gettry1.php",{
                    fname : fname,
                    lname : lname,
                    dob : dob,
                    gender : gender,
                    vill : vill,
                    dis : dis,
                    pro : pro,
                    note : note
                },
                function(output){
                    $('.show').html(output);
                }
            )
            });
        });
    </script>
</head>

<body class=" container-fluid py-5 justify-content-center ">
    <div class="row justify-content-center">
        <div class=" col-md-4">
            <div class=" card text-white bg-info">
                <div class=" card-header text-white bg-primary">
                    <h2 class=" text-center">ຟອມປ້ອນຂໍ້ມູນ</h2>
                </div>
                <div class=" card-body">
                    <form action="">
                        <label for="" class=" mt-3 form-label">ຊື່</label>
                        <input type="text" name="fname" id="" class="fname form-control" placeholder="ກະລຸນາປ້ອນ ຊື່">
                        <label for="" class=" mt-3 form-label">ນາມສະກຸມ</label>
                        <input type="text" name="lname" id="" class="lname form-control" placeholder="ກະລຸນາປ້ອນ ນາມສະກຸນ">
                        <label for="" class=" mt-3 form-label">ເພດ : </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="ເພດຊາຍ" > ເພດຊາຍ
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
                </div>
                <div class=" card-footer ">
                    <button type="button" class="btn btn-primary send"><i class="fas fa-paper-plane"></i>ສົ່ງຂໍ້ມູນ</button>
                    <button type="button" class="btn btn-warning reset"><i class="fas fa-eraser "></i>ລ້າງຂໍ້ມູນ</button>
                </div>
            </div>
        </div>
        <div class=" col-md-4">
            <div class=" card">
                <div class=" card-header">
                    <h2 class=" text-center ">ຟອມລາຍງານຜົນ</h2>
                </div>
                <div class=" card-body">
                    <div class="show"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>