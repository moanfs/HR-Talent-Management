<?php
function panggil_model()
{
    $perintah = "C:\Users\moan\AppData\Local\Programs\Python\Python310\python.exe C:\xampp\htdocs\c4app\app\Views\neighbors.py";
    $output = shell_exec($perintah);
    return "$output";
}

$hasil = panggil_model();

echo "<pre>";
dd($hasil);
echo "</pre>";
