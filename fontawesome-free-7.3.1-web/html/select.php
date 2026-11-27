<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-7.3.1-web/css/all.min.css">
</head>

<body>
    <?php
    include('./connect.php');
    $select = mysqli_query($conn, "select * from food");
    $select_count = mysqli_query($conn, "select count(*) from food");
    $count = mysqli_fetch_array($select_count);
    ?>
    <div class=" container  d-flex justify-content-center align-items-start mt-5">
        <div class=" card w-50">
            <div class=" card-header">
                <h2 class=" text-center">ລາຍການອາຫານ</h2>
            </div>
            <div class=" card-body">
                <h4>
                    ເມນູອາຫານມີທັງໝົດ
                    <span class=" badge bg-primary">
                        <?php echo $count[0] ?>
                    </span>
                    ເມນູ
                </h4>
                <a href="./form_insert.php" class="btn btn-success"><i class=" fas fa-plus"></i>ເພີ່ມຂໍ້ມູນ</a>
            </div>
            <table class=" table table-bordered table-striped table-hover align-middle mb-0">
                <thead class=" table-dark text-center">
                    <tr>
                        <th>ລຳດັບ</th>
                        <th>ເມນູ</th>
                        <th>ໝາຍເຫດ</th>
                        <th>ແກ້ໄຂ</th>
                        <th>ລົບ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    while ($data = mysqli_fetch_array($select)) {

                    ?>
                        <tr>
                            <td><?php echo $a ?></td>
                            <td><?php echo $data['name'] ?></td>
                            <td><?php echo $data['remark'] ?></td>
                            <td><a href="form_update.php?id=<?php echo $data['id'] ?>" class=" btn btn-info"><i class=" fas fa-edit"></i>ແກ້ໄຂ</a></td>
                            <td><a href="delete.php?id=<?php echo $data['id'] ?>" onclick=" return confirm('ທ່ານຕ້ອງການລົບແທ້ບໍ່')" class=" btn btn-warning"><i class=" fas fa-trash"></i>ລົບ</a></td>
                        </tr>
                    <?php

                        $a++;
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>