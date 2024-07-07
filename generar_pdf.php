<?php
require_once 'extensiones-1/tcpdf/tcpdf.php';

// Obtener los detalles del producto enviados desde el navegador
$productDetails = json_decode(file_get_contents('php://input'), true);

// Crear un nuevo PDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetPrintHeader(false);
$pdf->AddPage();

// Agregar contenido al PDF
foreach ($productDetails as $product) {
    $pdf->Cell(0, 10, "{$product['name']} - ${$product['price']}", 0, 1, 'L');
}

// Generar el PDF y guardarlo en una ubicación temporal
$pdfPath = '/tmp/mi_archivo.pdf';
$pdf->Output($pdfPath, 'F');

// Devolver la URL del archivo PDF generado al navegador
echo json_encode(['pdfUrl' => $pdfPath]);
?>