<?php
session_name("admin");
session_start();

session_unset();

session_destroy();
echo "<script>location='../../login/'</script>";
?>