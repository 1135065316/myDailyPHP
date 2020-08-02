<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = 'mysql';

$record_time = $_GET["record_time"];
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "SELECT * FROM my_daily where record_time='".$record_time."'";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
	$arr=array();
    // 输出数据
    while($row = $result->fetch_assoc()) {
		$arr[] = $row;
    }
	echo json_encode($arr);
} else {
    echo "0 结果";
}
