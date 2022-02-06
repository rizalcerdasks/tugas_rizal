package com.example.tugas;

public class Konfigurasi {
    // url dimana web api berada
    public static final String URL_GET_ALL = "http://192.168.43.157/nasabah/tampilSemuaNsb.php";
    public static final String URL_GET_DETAIL = "http://192.168.43.157/nasabah/tampilNsb.php?id=";
    public static final String URL_ADD = "http://192.168.43.157/nasabah/tambahNsb.php";
    public static final String URL_UPDATE = "http://192.168.43.157/nasabah/updateNsb.php?id=";
    public static final String URL_DELETE = "http://192.168.43.157/nasabah/hapusNsb.php?id=";

    // key and value JSON yang muncul di browser
    public static final String KEY_NSB_ID = "id";
    public static final String KEY_NSB_NAMA = "nama";
    public static final String KEY_NSB_PEKERJAAN = "pekerjaan";
    public static final String KEY_NSB_SALDO = "saldo";
    public static final String KEY_NSB_NAMAIBU = "namaibu";

    //flag JSON
    public static final String TAG_JSON_ARRAY = "result";
    public static final String TAG_JSON_ID = "id";
    public static final String TAG_JSON_NAMA = "nama";
    public static final String TAG_JSON_PEKERJAAN = "pekerjaan";
    public static final String TAG_JSON_SALDO = "saldo";
    public static final String TAG_JSON_NAMAIBU = "namaibu";

    //variabel ID Pegawai
    public static final String NSB_id = "nsb_id";
}

