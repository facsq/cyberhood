<?php

if(isset($_POST['submit'])) {
    $target = $_REQUEST['ip'];
    if(stristr(php_uname('s'), 'Windows NT')) {
        $cmd = shell_exec('ping ' . $target);
    } else {
        $cmd = shell_exec('ping -c 4' . $target);
    }
    $html .= "<pre style=\"color: #FFF\">{$cmd}</pre>";
}

?>