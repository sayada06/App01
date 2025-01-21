<?php

    include('config.php'); //นำไฟล์ config.db.php มาใช้
    $dataJSON = json_decode(file_get_contents('php://input'), true);
    $message = array();
    
    // ประกาศตัวแปรสำหรับเพิ่มข้อมูล
    $id = $dataJSON['id'];
    $name = $dataJSON['name'];
    $price = $dataJSON['price'];
    
    //เขียนคำสั่งในการเพิ่มข้อมูล
    $sql = "INSERT INTO `products` (`name`, `price`, `created_at`, `updated_at`) VALUES ('$name', '$price', NOW(),NOW());";
    
    //รันคำสั่ง
    $qr_insert = mysqli_query($conn, $sql);
    
    if ($qr_insert) {
        //เพิ่มข้อมูลได้
        http_response_code(201);
        $message['status'] = "เพิ่มข้อมูลสำเร็จ";
    } else {
        //เพิ่มข้อมูลไม่ได้
        http_response_code(422);
        $message['status'] = "เพิ่มข้อมูลไม่สำเร็จ";
    }
    
    //ส่งข้อมูลการดำเนินการกลับไป
    echo json_encode($message);
    echo mysqli_error($conn);
    
?>