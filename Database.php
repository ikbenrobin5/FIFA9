<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 10-4-2018
 * Time: 13:50
 */

$firstname = 'Robin';
$lastname = 'Brongers';

$password = '';
$username = 'root';

$connection = mysqli_connect('127.0.0.1', $username, $password, 'project_fifa');

$query = "INSERT INTO `tbl_players` (`first_name`, `last_name`) VALUES ( ?, ? )";
$stmt1 = mysqli_prepare($connection, $query);
mysqli_stmt_bind_param($stmt1, 'ss',$firstname,$lastname);

mysqli_stmt_execute($stmt1);

//$mysqli = new mysqli('127.0.0.1', $username, $password, 'project_fifa');
//$stmt = mysqli_prepare($connection, "INSERT INTO `tbl_players` (`first_name`, `last_name`) VALUES ( ?, ? )");
//mysqli_stmt_bind_param($stmt, "ss", $firstname, $lastname);
//mysqli_stmt_execute($stmt);

?>