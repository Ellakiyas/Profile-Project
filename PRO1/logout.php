<?php
session_start();
$_SESSION['usersid']=="";
session_unset();
?>
<script language="javascript">
document.location="login.php";
</script>
