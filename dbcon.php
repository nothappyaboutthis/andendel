<?php
const DB_HOST = 'mbsgraphic.dk.mysql';
const DB_USER = 'mbsgraphic_dk';
const DB_PASS = 'youshallnotpass151293';
const DB_NAME = 'mbsgraphic_dk';

$link = new mySQLi(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($link->connect_error) {
   die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset('utf8');
?>
