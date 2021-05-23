<?php
// 7 = install mode 1 = package mode
include "inc/_RUN_.php";
if ($t <"2") {
    header("Location: ../package/index.php");
}

include "inc/when_the_imposter_is_sUS.php";
include "inc/safe.php";
include "inc/php5.php";
include "debug/debug.php";
include "inc/bin64/valid.php";
?>
<!--start of html end of php-->
<html>
<head>
<meta charset="ISO-8859-1">
<!--<link rel="shortcut icon" href="inc/ico/favicon.ico.ico" type="image/x-icon"/>-->
<?php
// old runtime $_RUN_ = "6";
include_once "inc/ico/ico.php"
?>
<style>
b{
    border-color: darkred;
    color: darkred;
}
</style>
<div class="dropdown" style="float:right;">
  <button class="dropbtn">Config Menu</button>
  <div class="dropdown-content">
  <iframe width="734" height="413" src="https://www.youtube.com/embed/rk05sTbt9ss" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>
<style>
  .dropbtn {
    background-color: #0054;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }
  
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #000;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {background-color: #f1f1f1;}
  .dropdown:hover .dropdown-content {display: block;}
  .dropdown:hover .dropbtn {background-color: #0079;}
  </style>
<link href="inc/bin64/css64/svg32.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<title>@@package_name@@</title
</head>
<body>
<script>
    /*<![CDATA[*/
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
        var GA_TRACKING_ID = 'UA-100-4';
    
        ga('create', GA_TRACKING_ID, 'auto');
        ga('send', 'pageview');

        /*]]>*/
</script>
<h1>@@package_name installer@@</h1><form class = "install_forum" id= "64985"
 action="getPhpForumInput.php" method="post" name="install">
   <!--<p  id= "db_name"class = "name"> db name  <input type="text" name="username" /><br /></p>
   <p  id= "db_pwd" name>  db password <input type="text" name="email" /><br /></p>
   <p  id= "db_usr" name> db username  <input type="text" name="username" /><br /></p>
   <p  id= "db_serv"class = "name"> db server  <input type="text" name="username" /><br /></p>--->
   <input  type="text" name="fname" id="db_name" value="db name">
   <br>
   <br>
   <input type="text" name="user" id="db_usr" value="db user">
   <br>
   <br>
   <input type="text" name="server" id="db_serv" value="db server">
   <br>
   <br>
   <input type="text" name="pass" id="db_pwd" value="db password">
   <br>
<?php
?>
   <br>
    <input type="submit" name="package" value="install" />
    <br>
    <noscript>
    <meta http-equiv="refresh" content="2;url=inc/js.htm" />
</noscript>
</form>
<!--orm>
<form class = "debug" style = "border-style: none;" id= "64985" action="<?php# echo var_dump($t); ?> " method="post" name="install">
<input type="submit" name="package" value="debug mode" />
</form>-->
<br>
<script src="inc/js_/valid.js"></script>
<br>
<?php if(empty($php_error)) echo "<span style='color:green;'>$php_version - OK!</span>";
else echo "<span style='color:red;'>$php_error</span>";?>
<p>php website installer © 2021-<?php echo date("Y");?></p>
  </head>
  <body>

</html>
<!--start of php-->
<?php

?>