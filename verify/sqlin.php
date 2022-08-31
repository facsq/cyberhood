<?php

if(isset($_REQUEST['Submit'])) {
    $id = $_REQUEST['id'];
    $query = "SELECT first_name, last_name FROM users WHERE user_id = '$id';";
    $res = mysqli_query($GLOBALS["__mysqli_conn"],  $query ) or die( '<pre>' . ((is_object($GLOBALS["__mysqli_conn"])) ? mysqli_error($GLOBALS["__mysqli_conn"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) . '</pre>' );

    while($row = mysqli_fetch_assoc($res)) {
        $first = $row["first_name"];
        $last = $row["last_name"];
        $html .= "<pre style=\"color: #FFF\">ID: {$id}<br>First name: {$first}<br>Surname: {$last}</pre>";
    }
    mysqli_close($GLOBALS["__mysqli_conn"]);
}

?>