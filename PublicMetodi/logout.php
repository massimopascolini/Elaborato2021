<?php
session_start();
$_SESSION['login']=null;
$_SESSION['tipo_utente'] = null;
$_SESSION['id_utente'] = null;

session_unset();
session_destroy();
?>
<script type="text/javascript">
    window.location.href="../";
</script>
