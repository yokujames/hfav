<?php
class About {
    public function index($nama = 'James', $pekerjaan='progamer')
    {
        echo "di sini halaman ini yang di buat oleh $nama yang bekerja sebagai $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}