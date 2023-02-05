<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $photo = $_FILES['photo'];
  $path = $_SERVER['DOCUMENT_ROOT'] . '/' . $photo['name'];
  move_uploaded_file($photo['tmp_name'], $path);
}

?>