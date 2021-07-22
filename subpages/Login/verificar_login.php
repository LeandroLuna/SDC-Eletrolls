<?php

session_start();
if (!$_SESSION['lemail']) {
    header('../../index.html');
    exit();
}
