<?php
// w h a t
$_SESSION['myscriptname_sessions_work']=1;
if(empty($_SESSION['myscriptname_sessions_work']))
{
  $error=true;
  $session_error="Sessions must be enabled!";
}
?>