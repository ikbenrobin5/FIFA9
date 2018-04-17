<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 17-4-2018
 * Time: 11:33
 */


$password = '';
$username = 'root';

$firstname = 'Robin';
$lastname = 'Brongers';


$mysqli = new mysqli('127.0.0.1', $username, $password, 'project_fifa');

$stmt = mysqli_prepare($mysqli, "INSERT INTO `tbl_players` (`first_name`, `last_name`) VALUES ( ?, ? )");
mysqli_stmt_bind_param($stmt, "ss", $firstname, $lastname);
mysqli_stmt_execute($stmt);
