<?php
include "../../includes/fpdf.php";
include "../../controllers/admin/reportController.php";
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
function Table1($header, $data)
{
    // Column widths
    $w = array(40, 40, 40);
    // Header
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],6,$header[$i],1,0,'C');
    $this->Ln();
    // Data
    for($i =0;  $i<  count($data);$i++)
    {//$w[$i],7,$header[$i],1,0,'C',true
        $this->Cell($w[0],7,$data[$i]['itemId'],1,0,'C');
        $this->Cell($w[1],7,$data[$i]['vendor'],1,0,'C');
        $this->Cell($w[2],7,$data[$i]['low'],1,0,'C');
  //      $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
    //    $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
        $this->Ln();
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
function Table2($header, $data)
{
    // Column widths
    $w = array(40, 40);
    // Header
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],6,$header[$i],1,0,'C');
    $this->Ln();
    // Data
    for($i =0;  $i<  count($data);$i++)
    {//name ,existMount
        $this->Cell($w[0],7,$data[$i]['name'],1,0,'C');
        $this->Cell($w[1],7,$data[$i]['existMount'],1,0,'C');
  
        $this->Ln();
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Column headings
$header = array('Medicine', 'vendor', 'low');
$header2 = array('Items', 'ExistNumber');
// Data loading


$pdf->SetFont('Arial','',14);

//
//$pdf->BasicTable($header,$data);
$pdf->AddPage();
$pdf->Table1($header,$data);
$pdf->AddPage();
$pdf->Table2($header2,$data2);
$pdf->Output();
?>