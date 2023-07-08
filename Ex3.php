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
        <form action="Ex3.php" method="GET">

        <div class="row">
            <div class="col-4">
            <div class="row">
            <div class="col">
                <label for="width" class="form-label">ความกว้าง</label>
            </div>
            <div class="col">
                <input type="text" class=" form-control" id="width" name="width" value="" />
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="width" class="form-label">ความยาว</label>
            </div>
            <div class="col">
                <input type="text" class=" form-control" id="height" name="height" value="" />
            </div>
        </div>
        <div class="row mt-3">
                <input type="submit" class="btn btn-primary col" id="cal" name="cal" value="คำนวณ" /> 
        </div>
        </form>

            </div>
            <div class="col">
            <?php
                $w = $_GET['width'];
                $h= $_GET['height'];
                $area = $w * $h;
    ?>
            <div class="alert alert-primary fs-3 col" role="alert">
                <?php
                    echo "ความกว้าง = ".$w . " เซนติเมตร <br>";
                    echo "ความยาว = ".$h . " เซนติเมตร <br>";
                ?>
            </div>
            <div class="alert alert-danger fs-2 " role="alert">
                <?php   echo "พื้นที่สี่เหลี่ยมผืนผ้า <br>".$area . " ตางรางเซนติเมตร"; ?>
            </div>
            </div>
        </div>




    </div>
</body>
</html>