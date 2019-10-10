<?php
    session_start();
    session_destroy();
    header("Location: http://localhost/spm_project/adminPage.html");
?>