<?php
const HOST = "localhost";
const USER = "root";
const PW = "";
const DB_NAME = "fallen_harbor";

$db = new mysqli(HOST, USER, PW, DB_NAME);
if($db->connect_errno > 0){
    die("Unable to connect to database [".$db->connect_error."]");
}