<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$detect->isMobile();
$detect->isTablet();

if ($detect->isMobile()) {
    echo 'm';
}
else if($detect->isTablet()){
    echo 'mt';
}
else{
    echo 'dfasdf';
}