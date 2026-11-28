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
                var d = $("input[name='status']:checked").val();
                if (!a) {
                    alert('ກະລຸນາປ້ອນເລກຫ້ອງ');
                } else if (!b) {
                    alert('ກະລຸນາເລືອກປະເພດຫ້ອງ');
                } else if (!c) {
                    alert('ກະລຸນາເລືອກລາຄາຫ້ອງ');
                } else if (!d) {
                    alert('ຫ້ອງບໍ່ວ່າງ');
                } else {
                    $.get("getex1.php", {
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
                var d = $("input[name='status']:checked").val();
                $('#show').html("");
            });
        });
    </script>
</head>

<body>
    <div class=" container-fluid py-5">
        <div class=" row">
            <div class=" col-md-4">
                <div class=" card">
                    <div class=" card-header text-center text-white bg-primary">
                        <h2 class=" text-center" align="center">ຟອມປ້ອນຂໍ້ມູນ</h2>
                    </div>
                    <div class=" card-body">
                        <form action="./get.php" class=" vertical" method="get" >
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
                                    <option value="">ກະລຸນາເລືອກລາຄາຫ້ອງ</option>
                                    <option value="1000000">1000000</option>
                                    <option value="500000">500000</option>
                                </select>
                            </div>
                            <div class=" mt-3">
                                <label for="">ສະຖານະຫ້ອງ : </label>
                                <input type="radio" name="status" value="ວ່າງ"> ວ່າງ
                                <input type="radio" name="status" value="ບໍ່ວ່າງ"> ບໍ່ວ່າງ
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
                <div class=" card">
                    <div class=" card-header text-center bg-info text-white">
                        <h2>ຜົນທີ່ໄດ້</h2>
                    </div>
                    <div class=" card-body">
                        <div id="show"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>