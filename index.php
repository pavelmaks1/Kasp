<?php
require_once 'mobile-detect/Mobile_Detect.php';

$detect = new Mobile_Detect;

if ($detect->isMobile()) {
    include("amp.html");
} else {
    include("desktop.html");
}
?>