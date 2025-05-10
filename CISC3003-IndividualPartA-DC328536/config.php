<?php
	// Database connection configuration
	$host = "127.0.0.1";
    $port = "3306";
	$username = "root";
	$password = "";
	$database = "cart_system";

	// Create connection
	$conn = new mysqli($host, $username, $password, "", (int)$port);
	$conn->set_charset("utf8mb4");

	// Check connection
	if($conn->connect_error){
		die("Connection Failed: " . $conn->connect_error);
	}

	// 判断数据库是否存在
	$db_exists = false;
	$result = $conn->query("SHOW DATABASES LIKE '$database'");
	if ($result && $result->num_rows > 0) {
		$db_exists = true;
	}

	if (!$db_exists) {
		// 不存在则创建数据库
		$create_db_sql = "CREATE DATABASE `$database` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";
		if ($conn->query($create_db_sql) === TRUE) {
			$conn->select_db($database);
			// 自动导入SQL文件
			$sql_file = __DIR__ . '/cart_system.sql';
			if (file_exists($sql_file)) {
				$sql = file_get_contents($sql_file);
				if ($conn->multi_query($sql)) {
					do {
						if ($result = $conn->store_result()) {
							$result->free();
						}
					} while ($conn->more_results() && $conn->next_result());
				} else {
					die("SQL导入失败: " . $conn->error);
				}
			} else {
				die("找不到SQL文件: cart_system.sql");
			}
		} else {
			die("数据库创建失败: " . $conn->error);
		}
	} else {
		// 数据库已存在，直接选择
		$conn->select_db($database);
	}
?>