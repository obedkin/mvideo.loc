<?php
$row = 1;
if (($handle = fopen("products.csv", "r")) !== FALSE) {
    $products = [];
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        $product = [];
        for ($c = 0; $c < $num; $c++) {
            $product[] = $data[$c];
        }
        $products[] = $product;
    }
    fclose($handle);
}