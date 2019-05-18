<html>
<body>
<h2>VARIABILI GET</h2>
<p>

<?php
       foreach ($_GET as $key => $value) {
               echo "[" .htmlspecialchars($key, ENT_QUOTES). "]: "
.htmlspecialchars($value, ENT_QUOTES). "<br/>";
       }
?>

</p>
<h2>VARIABILI POST</h2>
<p>

<?php
       foreach ($_POST as $key => $value) {
               echo "[" .htmlspecialchars($key, ENT_QUOTES). "]: "
.htmlspecialchars($value, ENT_QUOTES). "<br/>";
       }
?>

</p>
</body>
</html>