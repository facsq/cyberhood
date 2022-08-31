<?php

if(isset($_GET['Login'])) {
    $user = $_GET['username'];
    $pass = $_GET['password'];
    $pass = md5($pass);
    $query  = "SELECT * FROM `users` WHERE uname = '$user' AND password = '$pass';";
    $res = mysqli_query($GLOBALS["__mysqli_conn"], $query) or die('<pre>' . ((is_object($GLOBALS["__mysqli_conn"])) ? mysqli_error($GLOBALS["__mysqli_conn"]) : (($__mysqli_res = mysqli_connect_error()) ? $__mysqli_res : false)) . '</pre>');
    if($res && mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_assoc($res);
        $html .= "<p>Welcome, {$user}</p>";
    } else {
        $row = mysqli_fetch_assoc($res);
        $html .= "<pre style=\"color: #FFF;\"><br>Username or password incorrect.</pre>";
    }
    ((is_null($__mysqli_res = mysqli_close($GLOBALS["__mysqli_conn"]))) ? false : $__mysqli_res);
}

?>