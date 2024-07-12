<?php

session_start();

if ($_SESSION['username']!== 'Hajar00' ){
  header("Location:http://localhost:8888/tp_blog/views/connexion.php");
} 

file_put_contents('../articles.txt', '');