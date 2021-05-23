<?php
$cfg2 = fopen("inc/_RUN_.php", "r+");
fwrite($cfg2,"<?php");
fwrite($cfg2,"\n");
fwrite($cfg2,"$");
fwrite($cfg2,'t = "1";');
fwrite($cfg2,"\n");
fwrite($cfg2,"?>");
?>
<!DOCTYPE html>
<html>
<style>
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: #000;
}
</style>
<body onload = "move()" >


<div id="myProgress">
  <div id="myBar"></div>
</div>

<br>

<script>
var i = 0;
function move() {
    let on = "1";
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 50);
    let on = "2";
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
        let on = "2";
        if (on=1) {
            console.log("hi");
        } else {
            console.log("hello"); 
        }
      }
    }
  }
}
</script>
<?php
$runtime_error = "ERR0R";
?>