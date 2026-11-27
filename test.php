<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="./bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $("#send").click(function() {
                var room_number = $("#room_number").val();
                var type = $("#type").val();
                var price = $("#price").val();
                var status = $("#input[id='status']:checked").val();
                if (room_number == "") {
                    swal.fire({
                        icon: 'warning',
                        title: 'ແຈ້ງເຕຶອນ',
                        Text: 'ກະລຸນນາເລືອກເບີຫ້ອງ',
                        widht: 300,
                        height: 100,
                        padding: '1em'
                    })
                } else if (type == "") {
                    swal.fire({
                        icon: 'warning',
                        title: 'ແຈ້ງເຕຶອນ',
                        Text: 'ກະລຸນນາເລືອກປະເພພດຫ້ອງ'
                    })
                } else if (price == "") {
                    swal.fire({
                        icon: 'warning',
                        title: 'ແຈ້ງເຕຶອນ',
                        Text: 'ກະລຸນນາເລືອກລາຄາ'
                    })
                } else if (!status) {
                    swal.fire({
                        icon: 'warning',
                        title: 'ແຈ້ງເຕຶອນ',
                        Text: 'ກະລຸນນາເລືອກສະຖານນະຫ້ອງ'
                    })
                }
            })
        })
    </script>
    <title>Document</title>
    <style>
        * {
            font-family: 'phetsarath ot';
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class=" row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-white bg-success">
                        <h2 alige="center">ຟອມບັນທຶກຂໍ້ມູນ</h2>
                    </div>
                    <div class="card-body">
                        <form action="" class="vertical" method="post">
                            <div class="form-group">
                                <label for="">ເບີຫ້ອງ</label>
                                <input type="text" id="room_number" name="room_number" placeholder="ປ້ອນເບີຫ້ອງ" class="form-control">
                            </div>



                            <div class="form-group">
                                <label for="">ເລືອກປະເພດຫ້ອງ</label>
                                <div class="radio-inline">
                                    <select name="type" id="type" class=" form-control">
                                        <option value="">ເລືອກປະເພດຫ້ອງ</option>
                                        <option value="ຫ້ອງດ່ຽວ">ຫ້ອງດ່ຽວ</option>
                                        <option value="ຫ້ອງຄູ່">ຫ້ອງຄູ່</option>
                                        <option value="vip">vip</option>
                                    </select>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="">ເລືອກລາຄາຫ້ອງ</label>
                                    <div class="radio-inline">
                                        <select name="price" id="price" class=" form-control">
                                            <option value="">ເລືອກລາຄາຫ້ອງ</option>
                                            <option value="500000">5000000</option>
                                            <option value="700000">7000000</option>
                                            <option value="1000000">10000000</option>
                                        </select>
                                    </div>
                            </div>
                                    <div class="radio-inline">
                                        <input type="radio" name="status" id="status" value="ວ່າງ">ວ່າງ
                                        <input type="radio" name="status" id="status" value="ບໍ່ວ່າງ">ບໍ່ວ່າງ

                                    </div>

                                    <div class="form-group">
                                        <button type="button" class="btn btn-success" id="send">ບັນທຶກຂໍ້ມູນ</button>
                                        <button type="button" class="btn btn-danger" id="reset">ລ້າງຂໍ້ມູນ</button>
                                    </div>

                        </form>
                    </div>
                    <div class="card-footer">

                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-white bg-success">
                        <h3>ລາຍງານຂໍ້ມູນ</h3>
                    </div>
                    <div class="card-body">
                        <div id="show"></div>
                    </div>
                </div>
            </div>

        </div>



    </div>

</body>

</html>