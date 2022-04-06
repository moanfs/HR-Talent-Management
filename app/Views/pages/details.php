<?php
$file = 'uploads/berkas/' . $dataset['data'];
if (($open = fopen($file, "r")) !== FALSE) {

    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
        $array[] = $data;
    }

    fclose($open);
}

echo "<pre>";
//To display array data
dd($array);
echo "</pre>";
