<?php

    include '../config.php';
    $table = "CREATE TABLE products(
    id int(6) AUTO_INCREMENT PRIMARY KEY COMMENT 'รหัสสินค้า',
    name varchar(100) COMMENT 'ชื่อสินค้า',
    price varchar(100) COMMENT 'ราคา',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'วันที่เพิ่มสินค้า',
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'วันที่แก้ไขสินค้า'
    );";
 
    if($conn->query($table) === TRUE){
        echo "สร้างตารางสินค้าเรียบร้อยแล้ว";
    }else{
        echo "ไม่สามารถสร้างตารางได้: " . $conn->error;
    }
    $conn->close();

?>