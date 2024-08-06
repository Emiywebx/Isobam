<?php
  $conn = mysqli_connect("localhost", "root", "", "isobayonate");
 if ($conn->connect_error){
  die("Connectin Failed:"). $conn->connect_error;
 }