<?php

/*****************************************************
* modules/rtmp/stop.php
* rtmp stop command file
*(c)virt2real.ru 2013
* draft, by Gol
/*****************************************************/

// common include
include('../../parts/global.php');

shell_exec("killall gst-launch-0.10");
echo 'RTMP stopped';

?>