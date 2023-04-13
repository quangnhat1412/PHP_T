<?php
    // 1. Hàm kết nối CSDL 
    function Connect(){
        $Conn = mysqli_connect("localhost", "root", "", "sachth2");
        return $Conn;

        // Hoặc return mysqli_connect("localhost", "root", "", "tintuc_c21th2"); 
    }
    // 2. Ngắt kết nối
    function DisConnect($Conn){
        mysqli_close($Conn);
    }

    // 3. Hàm đọc dữ liệu của tất cả loại sách
    function Get_ALL_CD(){
        $Conn = Connect();
        $sql = "SELECT * FROM chude";
        $kq = mysqli_query($Conn, $sql);
        DisConnect($Conn);
        return $kq;
    }

    // 4. Hàm đọc tất cả sách theo MaCD 
    function Get_ALL_Sach_CD($MaCD){
        $Conn = Connect();
        $sql = "SELECT * FROM sach WHERE MaCD = $MaCD";
        $kq = mysqli_query($Conn, $sql);
        DisConnect($Conn);
        return $kq;
    }

    // 5. Hàm đọc dữ liệu của tất cả nhà xuất bản
    function Get_ALL_NBX(){
        $Conn = Connect();
        $sql = "SELECT * FROM nhaxuatban";
        $kq = mysqli_query($Conn, $sql);
        DisConnect($Conn);
        return $kq;
    }

    // 6. Hàm lấy ra dòng đầu tiên trong ChuDe
    function Get_1row_CD(){
        $Conn = Connect();
        $sql = "SELECT * FROM chude LIMIT 1";
        $kq = mysqli_query($Conn, $sql);
        DisConnect($Conn);
        return $kq;
    }
?>