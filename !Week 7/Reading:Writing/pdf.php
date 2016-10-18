<?php
//Sends output inline to browser
require_once("./mpdf/mpdf.php");

$mpdf = new mPDF();

$mpdf->WriteHTML("Halloween!!!");

$mpdf->Output();


?>