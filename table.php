<?php
if (isset($_POST['number'])) {

    $num = $_POST['number'];
    $temp = $num;

    $div = $_POST['div'];
    $num1 = $div;

    for ($i=1; $i<= $num1; $i++) {
        $res = $temp*$i;
        echo "<pre>";
        echo "{$temp}*{$i} = " . $res;

    }

//    for ($i = 2; $i <= 10; $i++) {
//        $table = $i * 2;
//        echo "<pre>";
//        echo "2*$i = " . $table;
//
//    }
}else { ?>

<html>
<title>Table</title>
<head></head>
<body>
<h3>Print Table of any number:</h3>
<form action="table.php" method="post">
    <dt>Minimum</dt>
    <input type="text" name="number">
    <br>
    <dt>Maximum</dt>
    <input type="text" name="div">
    <br>
    <input type="submit">
</form>
</body>
</html>
<?php } ?>