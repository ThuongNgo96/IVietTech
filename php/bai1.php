<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>
    <h1> giải phương trình bậc nhất x+2=0 </h1>
    kết quả:
    <?php
    $a = 1;
    $b = 2;
    $c = 0;
    echo ($c - $b) / $a;
    ?>


    <?php


    $a = 1;
    $b = 2;
    $c = 0;

    $t = ($b * $b) - ($c * $a * 4);
    $z = ((-$b - sqrt($t)) / 2 * $a);
    $q = ((-$b + sqrt($t)) / 2 * $a);
    if ($t < 0) {
        echo
            "phương trình vô nghiệm";
    }
    if ($t == 0) {
        echo
            "phương trình có một nghiệm là" . (-$b / (2 * $a));
    }
    if ($t > 0) {
        echo
            "phương trình có hai nghiệm là " . $z;
        echo "<br>";
        echo $q;
    }

    ?>
    <h1> bài toán về tuổi</h1>
    <?php
    $p = 44;
    if ($p > 70) {
        echo " Tuổi ông là $p tuổi" . "</br>";
    }
    if ($p > 40 && $p < 70) {
        echo " tuổi của ba là $p tuổi" . "</br>";
    } elseif ($p > 20) {
        echo " tuổi của anh là $p tuổi" . "</br>";
    } else {
        echo " tuổi của em là $p tuổi " . "</br>";
    }
    ?>
    <?php
    $t1 = 32;
    switch ($t1) {
        case  $t1 < 20:
            echo " tuoi cua em";
            break;
        case $t1 < 40:
            echo " tuoi cua anh";
            break;
        case $t1 < 70:
            echo " tuoi cua bo";
            break;
        case $t1 > 70:
            echo " tuoi cua ong";
            break;
    }

    ?>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
</body>

</html>