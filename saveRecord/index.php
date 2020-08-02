<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = 'mysql';

$record_time = $_GET["record_time"];
echo $record_time;
$is_survival = $_GET["is_survival"];
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "INSERT INTO my_daily (record_time, is_survival)
VALUES (".$record_time.", ".$is_survival.")";

if ($conn->query($sql) === TRUE) {
	echo "新记录插入成功";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}