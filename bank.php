<?php require('fpdf.php');
$name = $_GET['name'];
$roll = $_GET['roll'];
$amt = $_GET['amt'];
$credit = $_GET['credit'];
$pdf = new FPDF('P', 'mm', "A4");
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 18);

$pdf->Cell(71, 10, '', 0, 0);
$pdf->Cell(59, 5, "Form", 0, 0);
$pdf->Cell(59, 10, '', 0, 1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 6, 'Student Name : ' . $name, 0, 2);
$pdf->Cell(10, 6, 'Roll No : ' . $roll, 0, 3);
$pdf->Cell(10, 6, ' ', 0, 4);


$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 6, 'SL', 1, 0, 'C');
$pdf->Cell(80, 6, 'Subject', 1, 0, 'C');
$pdf->Cell(25, 6, 'Credit', 1, 0, 'C');
$pdf->Cell(25, 6, 'Amount', 1, 1, 'C');





$total = 0;
$C = 0;


$pdf->SetFont('Arial', 'B', 12);
for ($i = 1; $i <= 5; $i++) {

    $pdf->Cell(10, 6, $i, 1, 0, 'C');
    $pdf->Cell(80, 6, 'ICE-410' . $i, 1, 0, 'C');
    $pdf->Cell(25, 6, $credit, 1, 0, 'C');
    $pdf->Cell(25, 6, $amt, 1, 1, 'C');
    $total = $total + $amt;
    $C = $C + $credit;
}

$pdf->Cell(10, 6, '', 1, 0);
$pdf->Cell(80, 6, '', 1, 0);
$pdf->Cell(25, 6, $C, 1, 0, 'C');
$pdf->Cell(25, 6, $total, 1, 1, 'C');



$pdf->Output();
