<?php
// session_start();
echo "<script>alert('Kamu berhasil Log Out.');</script>";
echo "<meta http-equiv='refresh' content='2; url=../index.php'>";
session_destroy();
?>