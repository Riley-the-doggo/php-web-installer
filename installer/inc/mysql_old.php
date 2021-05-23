<?php
// declare function
//function find_SQL_Version() {
//    $output = shell_exec('mysql -V');
//    preg_match('@[0-9]+\.[0-9]+\.[0-9]+@', $output, $version);
//    return @$version[0]?$version[0]:-1;
$mysql_verson = mysqli_verson();
if ($mysql_verson <"10") {
  echo "error mysql to old";
}else {
  # code...
}
  ?>