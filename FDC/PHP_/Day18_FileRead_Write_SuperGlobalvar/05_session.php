<?php

session_start();

$_SESSION['codelab'] = 'this is cod elab'; // set 

echo "<pre>" ; 

print_r($_SESSION['userData']); // get 