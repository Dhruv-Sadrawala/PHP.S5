<?php

session_start();

$session_life = time() - ;
echo "Session Start";
if($session_life > 30)
{  
    session_destroy();
    echo "Session Destroyed";     
} 
else 
{
    $_SESSION['timeout']=time();
}
?>