<html>
<head>
</head>
<body>
    <h3>Tampilan Form PHP</h3>

    Nama : <?php echo $_POST ["nama"];?>
    <br>
    Email : <?php echo $_POST ["email"];?>
    <br>
    Jenis Kelamin : <?php echo $_POST ["gender"];?>
    <br>

    <h3> Penjumlahan PHP </h3>

    <?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $a + $b;
    ?>

    nilai a : <?php echo $a;?>
    <br>
    nilai b : <?php echo $b;?>
    <br>
    jumlah a dan b adalah <?php echo $c; ?>

</body>
</html>