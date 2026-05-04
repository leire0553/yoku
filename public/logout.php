<?php
session_start();
session_destroy();
header("Location: /yoku/public/index.php");
exit;
