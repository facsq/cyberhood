<?php

$_creds = array();
$_creds[ 'db_server' ]   = '<SERVER-IP>';
$_creds[ 'db_database' ] = '<DB-NAME>';
$_creds[ 'db_user' ]     = '<USERNAME>';
$_creds[ 'db_password' ] = '<PASSWORD>';
$_creds[ 'db_port'] = '3306';

function reroute($dest) {
    header("Location: {$dest}");
    exit;
} 

function dbConnect() {
    global $_creds;
    if(!@($GLOBALS["__mysqli_conn"] = mysqli_connect($_creds['db_server'], $_creds['db_user'], $_creds['db_password'], "", $_creds['db_port'])) || !@((bool)mysqli_query($GLOBALS["__mysqli_conn"], "USE " . $_creds['db_database']))) {
        reroute('index.php');
    }
}

if(isset($_GET['setup'])) {
        global $_creds;

        dbConnect();
        
        $drop_db = "DROP DATABASE IF EXISTS {$_creds['db_database']};";
        if(!@mysqli_query($GLOBALS["__mysqli_conn"], $drop_db)) {
            $html = "Could not drop existing database<br>SQL: " . ((is_object($GLOBALS["__mysqli_conn"])) ? mysqli_error($GLOBALS["__mysqli_conn"]) : (($__mysqli_res = mysqli_connect_error()) ? $__mysqli_res : false));
            reroute($_SERVER['PHP_SELF']);
        }


        $create_db = "CREATE DATABASE {$_creds['db_database']};";
        if(!@mysqli_query($GLOBALS["__mysqli_conn"], $create_db)) {
            $html = "Could not create database<br>SQL: " . ((is_object($GLOBALS["__mysqli_conn"])) ? mysqli_error($GLOBALS["__mysqli_conn"]) : (($__mysqli_res = mysqli_connect_error()) ? $__mysqli_res : false));
            reroute($_SERVER['PHP_SELF']);
        }


        if(!@((bool)mysqli_query($GLOBALS["__mysqli_conn"], "USE " . $_creds['db_database']))) {
            $html = 'Could not connect to database.';
            reroute($_SERVER['PHP_SELF']);
        }
        
        $create_tb = "CREATE TABLE users (user_id int(6),first_name varchar(15),last_name varchar(15), uname varchar(15), password varchar(32), PRIMARY KEY (user_id));";
        if(!mysqli_query($GLOBALS["__mysqli_conn"],  $create_tb ) ) {
            $html = "Table could not be created<br />SQL: " . ((is_object($GLOBALS["__mysqli_conn"])) ? mysqli_error($GLOBALS["__mysqli_conn"]) : (($__mysqli_res = mysqli_connect_error()) ? $__mysqli_res : false));
            reroute($_SERVER['PHP_SELF']);
        }

        $insert = "INSERT INTO users VALUES
            ('1','admin','admin','admin',MD5('password')),
            ('2','Clark','Kent','user1',MD5('abc123')),
            ('3','Hal','Jordon','user2',MD5('charley')),
            ('4','Diana','Prince','user3',MD5('letmein')),
            ('5','Barry','Allen','user4',MD5('password'));";
        if(!mysqli_query($GLOBALS["__mysqli_conn"],  $insert ) ) {
            $html = "Data could not be inserted into 'users' table<br />SQL: " . ((is_object($GLOBALS["__mysqli_conn"])) ? mysqli_error($GLOBALS["__mysqli_conn"]) : (($__mysqli_res = mysqli_connect_error()) ? $__mysqli_res : false));
            reroute($_SERVER['PHP_SELF']);
        }
        reroute('brute.php');
}

?>