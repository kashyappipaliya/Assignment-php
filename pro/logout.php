<?php
    session_start();
    unset($_SESSON['IS_VALID']);
    session_destroy();
    header('Location: index.php');
?>