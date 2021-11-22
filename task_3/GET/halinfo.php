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
  <form method="GET" action="halpendaftaran.html">
    <table>Gender : <br></table>
    <p><?php echo $_GET["sex"]; ?></p>
    <table>Phone Number : </table>
    <p><?php echo $_GET["phone"]; ?></p>
    <table>Achievement : </table>
    <p><?php echo $_GET["achieve"]; ?></p>
    <table>Education : </table>
    <p><?php echo $_GET["edu"]; ?></p>
    <table>Experience : </table>
    <p><?php echo $_GET["exper"]; ?></p>
    <input type="submit" value="Back">
  </form>
</div>
</body>
</html>