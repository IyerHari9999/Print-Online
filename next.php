<?php

session_start();
?>
<html>
<h2>Welcome </h2>

<?php
echo $_SESSION["CURRENT_USER"];
?>

</html>
