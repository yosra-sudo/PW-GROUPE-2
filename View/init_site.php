<?php

function findRoot() {
    return(substr($_SERVER["SCRIPT_FILENAME"], 0, (stripos($_SERVER["SCRIPT_FILENAME"], $_SERVER["SCRIPT_NAME"])+1)));
}?>

 <?php 
 include  findRoot()."El_book-2/Assets/Utils/connect_book.php";
  ?>