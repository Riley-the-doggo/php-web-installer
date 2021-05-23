<?php
$p = "1";
if ($p ="1"){
$dbServ = $_POST['server'];
$dbName = $_POST['fname'];
$dbUser = $_POST['user'];
$dbPass = $_POST['pass'];
$charset = "latin1_swedish_ci";
$port = "3306";
/*$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
/*
$dsn = "mysql:host=$dbServ;dbname=$dbName;port=$port";

    $pdo = new \PDO($dsn);
}else{
    die("error");
}*/
mysqli_connect($dbServ, $dbUser,$dbPass, $dbName, $port);
$cfg1 = fopen("inc/config.inc.php", "r+");
fwrite($cfg1,"<?php");
fwrite($cfg1,"\n");
fwrite($cfg1,"$");
fwrite($cfg1,"dbServ =");
fwrite($cfg1,"'".$_POST['server']."';");
fwrite($cfg1,"\n");
fwrite($cfg1,"$");
fwrite($cfg1,"dbName =");
fwrite($cfg1,"'".$_POST['fname']."';");
fwrite($cfg1,"\n");
fwrite($cfg1,"$");
fwrite($cfg1,"dbUser =");
fwrite($cfg1,"'".$_POST['user']."';");
fwrite($cfg1,"\n");
fwrite($cfg1,"$");
fwrite($cfg1,"dbPass =");
fwrite($cfg1,"'".$_POST['pass']."';");
fwrite($cfg1,"\n");
fwrite($cfg1,'$mysql = mysqli_connect($dbServ, $dbUser,$dbPass, $dbName);');
fwrite($cfg1,"\n");
fwrite($cfg1,'include "valid.php";');
fwrite($cfg1,"\n");
fwrite($cfg1,"?>");
fclose($cfg1);
$cfg2 = fopen("inc/config.inc.php", "r+");
}
if (mysqli_connect_errno()) {
    die('<h3>FATAL:setup_failed</h3>');
  }
?>
<style>
    body{
        font-family: sans-serif;
    }
.alert {
  padding: 20px;
  background-color: #36f456;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<?php
$error = include_once "error.htm";
?>
<title>step 2</title>