<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();
// destroy the session
session_destroy();
?>

<script>window.location.replace("login.php");</script>
</body>
</html>