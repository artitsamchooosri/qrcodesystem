<?php
function checkuuid($uuid) {
    $sql="SELECT\n".
    "coupong.uuid,\n".
    "coupong.`cread-date`,\n".
    "coupong.`exp-date`,\n".
    "coupong.`checkout-date`,\n".
    "coupong.`status`,\n".
    "coupong.`url-coupong`,\n".
    "coupong.filename\n".
    "FROM\n".
    "coupong\n".
    "WHERE\n".
    "coupong.uuid = '".$uuid."'";
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $result = $conn->query($sql);
    mysqli_close($conn);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $expDate = strtotime($row["exp-date"]);
            $nowDate = strtotime(date("Y-m-d H:i:s"));
            if ($expDate>$nowDate){
                if($row["status"]!="used"){
                    return "pass";
                }else{
                    return "คูปองถูกใช้ไปแล้ว";
                } 
            }else{
                return "คูปองหมดอายุแล้ว";
            }
        }
    }else{
        return "ไม่พบคูปอง";
    }
    
  }
?>