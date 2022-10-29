<?php

include("../database/connect.php");

$id = $_GET["id"];

$sql = "delete from users where id = $id";

  if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 


$conn->close();
