<?php
include "../../includes/fpdf.php";
include "../../controllers/employee/pol.php";
class PDF extends FPDF
{
// Load data
function LoadData($file)
{
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Simple table
/*function BasicTable($header, $data)
{
    // Header
    foreach($header as $col)
        $this->Cell(40,7,$col,1);
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }
}
*/
// Better table
//
// /*


function Table2($header, $data, $dataname)
{
    // Column widths
     $this->Ln();
     $this->Ln();
     $this->Ln();
     $this->Ln();
    $w = array(20,20,40,40,40,40,50);
    // Header
    for($i=0;$i<count($header);$i++){
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    }
        $this->Ln();
    // Data
   //name ,existMount
        $this->Cell($w[0],7,$dataname,1,0,'C');
        $this->Cell($w[1],7,$data['id'],1,0,'C');
        $this->Cell($w[2],7,$data['itemId'],1,0,'C');
        $this->Cell($w[3],7,$data['unitPrice'],1,0,'C');
        $this->Cell($w[4],7,$data['Mount'],1,0,'C');
        $this->Cell($w[5],7,$data['totalPrice'],1,0,'C');
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Cell($w[0],0,'',1,0,'C');
        $this->Cell($w[1],0,'',1,0,'C');
        $this->Cell($w[2],0,'',1,0,'C');
        $this->Cell($w[3],0,'',1,0,'C');
        $this->Cell($w[4],0,'',1,0,'C');
        $this->Cell($w[5],5,$data['invoiceDate'],1,0,'C');
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Column headings
$header = array("Name","ID","ITEM ID","UnitPrice","Mount","TotalPrice","InvoiceDate");
// Data loading


$pdf->SetFont('Arial','',14);

//
//$pdf->BasicTable($header,$data);
$pdf->AddPage();
$pdf->Table2($header,$data,$dataname);
$pdf->Output();
?>