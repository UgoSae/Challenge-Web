<html>
<head>
</head>
<body>
    <h3> Membuat Form dengan Method POST </h3>
    <form action= "tampil.php" method="post">

        Nama : <input type="text" name="nama" required><br><br>
        Email : <input type="text" name="email"required><br><br>
        Jenis Kelamin :<br>
        <input type="radio" name="gender" value="female" required>female
        <input type="radio" name="gender" value="male"required>male
        <input type="submit">
        <br><br> 
        </form>

    <h3>Operasi aritmatika dengan method GET</h3>
    <form action="tampil_get.php" method="get">
        a : <input type="integer" name="a"><br><br>
        b : <input type="integer" name="b"><br><br>
        <input type="submit"><br>


 <?php
$nameErr = $emailErr = $genderErr =  "";
$name = $email = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>
    </form>

</body>
</html>