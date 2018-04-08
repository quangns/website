<?php

function TinMoiNhat_MotTin() {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            order by idTin desc
            limit 0,1
    ";
    return mysqli_query($conn, $qr);
}

function TinMoiNhat_BonTin() {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            order by idTin desc
            limit 1,8
    ";
    return mysqli_query($conn, $qr);
}

function TinXemNhieuNhat() {
    $conn = myConnect();
    $qr = "
            select *
            from tin
            order by SoLanXem desc
            limit 0,6
    ";
    return mysqli_query($conn, $qr);
}

function TinMoiNhat_TheoLoaiTin_MotTin($idlt) {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            where idLT=$idlt
            order by idTin desc
            limit 0,1
    ";
    return mysqli_query($conn, $qr);
}

function TinMoiNhat_TheoLoaiTin_BonTin($idlt) {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            where idLT=$idlt
            order by idTin desc
            limit 1,4
    ";
    return mysqli_query($conn, $qr);
}

function TenLoaiTin($idlt) {
    $conn = myConnect();
    $qr = "
            select Ten
            from loaitin
            where idLT = $idlt
    ";
    $loaitin = mysqli_query($conn, $qr);
    $row = mysqli_fetch_array($loaitin, MYSQLI_ASSOC);
    return $row['Ten'];
}

function QuangCao($vitri) {
    $conn = myConnect();
    $qr = "
            select * from quangcao
            where vitri = $vitri
    ";
    return mysqli_query($conn, $qr);
}

function DanhSachTheloai() {
    $conn = myConnect();
    $qr = "
            select *
            from theloai
    ";
    return mysqli_query($conn, $qr);
}

function DanhSachLoaiTin_TheoTheLoai($idTL) {
    $conn = myConnect();
    $qr = "
            select * from loaitin
            where idTL = $idTL
    ";
    return mysqli_query($conn, $qr);
}

function TinMoi_BenTrai($idTL) {
    $conn = myConnect();
    $qr = "
            select * from tin
            where idTL = $idTL
            order by idTin desc
            limit 0,1
    ";
    return mysqli_query($conn, $qr);
}

function TinMoi_BenPhai($idTL) {
    $conn = myConnect();
    $qr = "
            select * from tin
            where idTL = $idTL
            order by idTin desc
            limit 1,2
    ";
    return mysqli_query($conn, $qr);
}

function TinTheoLoaiTin($idLT) {
    $conn = myConnect();
    $qr = "
            select * from tin
            where idLT = $idLT
            order by idTin desc
    ";
    return mysqli_query($conn, $qr);
}

function TinTheoLoaiTin_PhanTrang($idLT, $from, $sotin1trang) {
    $conn = myConnect();
    $qr = "
            select * from tin
            where idLT = $idLT
            order by idTin desc
            limit $from, $sotin1trang
    ";
    return mysqli_query($conn, $qr);
}

function BreadCrumb($idLT) {
    $conn = myConnect();
    $qr = "
            select TenTL, Ten
            from theloai, loaitin
            where theloai.idTL = loaitin.idTL
            and idLT = $idLT
    ";
    return mysqli_query($conn, $qr);
}

function ChiTietTin($idTin) {
    $conn = myConnect();
    $qr = "
            select * from tin
            where idTin = $idTin
    ";
    return mysqli_query($conn, $qr);
}

function TinCungLoaiTin($idTin, $idLT) {
    $conn = myConnect();
    $qr = "
            select * from tin
            where idTin <> $idTin
            and idLT = $idLT
            order by rand()
            limit 0,3
    ";
    return mysqli_query($conn, $qr);
}

function CapNhatSoLanXem($idTin) {
    $conn = myConnect();
    $qr = "
            update tin
            set SoLanXem = SoLanXem + 1
            where idTin = $idTin
    ";
    mysqli_query($conn, $qr);
}

function TimKiem($tukhoa) {
    $conn = myConnect();
    $qr = "
            select * from tin
            where TieuDe REGEXP '$tukhoa'
            order by idTin desc
    ";
    return mysqli_query($conn, $qr);
}

?>