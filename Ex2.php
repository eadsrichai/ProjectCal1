<?php
    $w = $_GET['width'];
    $h= $_GET['height'];
    $area = $w * $h;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0/css/bootstrap.min.css">
<body>
    <div class="container">
        <div>
            <p class="fs-1 bg bg-primary text-white mt-3  p-3">โปรแกรมคำนวณหาพื้นที่สี่เหลี่ยม</p>
        </div>
        <div class="row">
            <div class="alert alert-primary fs-3 col-4 offset-1" role="alert">
                <?php
                    echo "ความกว้าง = ".$w . " เซนติเมตร <br>";
                    echo "ความยาว = ".$h . " เซนติเมตร <br>";
                ?>
            </div>
            <div class="alert alert-danger fs-2 col-5 offset-1" role="alert">
                <?php   echo "พื้นที่สี่เหลี่ยมผืนผ้า <br>".$area . " ตางรางเซนติเมตร"; ?>
            </div>
        </div>
    </div>
    
</body>
</html>