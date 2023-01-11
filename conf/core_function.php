<?php
function convHari($day){
switch($day){
    case 1 :
        return "Senin";
        break;
    case 2 :
        return "Selasa";
        break;
    case 3 :
        return "Rabu";
        break;
    case 4 :
        return "Kamis";
        break;
    case 5 :
        return "Jumat";
        break;

}
}
function hitung($table){
    $hitung = mysql_query("SELECT count(*) as jumlah FROM $table")or die(mysql_error());
    $row = mysql_fetch_array($hitung);
    return $row['jumlah'];
}

function hitungAbsen($id_jadwal){
    $getAbsen = mysql_query("SELECT COUNT(*) as jumlah FROM absen WHERE id_jadwal='$id_jadwal'")
    or die(mysql_error());
    $arAbsen = mysql_fetch_array($getAbsen);

    $getHadir = mysql_query("SELECT COUNT(*) as jumlah FROM absen WHERE id_jadwal='$id_jadwal' AND status_absen = 'H'")
    or die(mysql_error());
    $arHadir = mysql_fetch_array($getHadir);

    return @round(($arHadir['jumlah']/$arAbsen['jumlah'])*100,2);
}
?>

