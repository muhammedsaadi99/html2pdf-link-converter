<?php

require "./vendor/autoload.php";

$link = $_POST['url'];
$uploadOk = 0;

// Check if $uploadOk is set to 0 by an error
if (!$uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
        $mpdf = new \Mpdf\Mpdf();

        $file = file_get_contents($link);
        $mpdf->WriteHTML($file);
        $mpdf->Output("output/" . "FILE".'.PDF');

        echo "The HTML link has been Converted to PDF.";
}
