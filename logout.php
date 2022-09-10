<?php

    require_once 'source/session.php';

    session_destroy();
    header('loccation: index.php');

?>