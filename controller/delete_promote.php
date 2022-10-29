<?php

include("../database/connect.php");

$id = $_GET["id"];

$sql = "DELETE FROM promote WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  header("Location: ../admin/manage_promote.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
