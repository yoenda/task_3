<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Detail Informasi Update CV Pendaftar</h2>

<div>
<?php
mkdir("upload");
$tmp_name=$_FILES['photo']['tmp_name'];
$file="./upload/".$_FILES['photo']['name'];
move_uploaded_file($tmp_name, $file);
?>
  <form method="POST" action="halpendaftaran.html">
    <table>Photo Id : <br></table>
    <p><img src="<?php echo "$file"; ?>"width="150px" height="200px"></p>
    <table>Gender : <br></table>
    <p><?php echo $_POST["sex"]; ?></p>
    <table>Phone Number : </table>
    <p><?php echo $_POST["phone"]; ?></p>
    <table>Achievement : </table>
    <p><?php echo $_POST["achieve"]; ?></p>
    <table>Education : </table>
    <p><?php echo $_POST["edu"]; ?></p>
    <table>Experience : </table>
    <p><?php echo $_POST["exper"]; ?></p>
    <input type="submit" value="Back">
  </form>
</div>
</body>
</html>