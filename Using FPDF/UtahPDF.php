<?php
	$Name = $_POST[Name];
	$Address1 = $_POST[Address1];
	$Address2 = $_POST[Address2];
	$City = $_POST[City];
	$State = $_POST[herolist];
	$Zip = $_POST[Zip];
	$Cell = $_POST[Cell];
	$EMail = $_POST[Email];
	$PlantCommonName = $_POST[PlantCommonName];
	$PlantScientificName = $_POST[PlantScientificName];
	$PlantAge = $_POST[PlantAge];
	$PlantSize = $_POST[PlantSize];
	$Details = $_POST[details];
	$OptionsRadios = $_POST[optionsRadios];
	$RegularMail = $_POST[regularMail];
	$EMail = $_POST[contactEMail];
	$ContactCell = $_POST[contactCell];
require('/Users/karanmankodi/Sites/WebDesign/Assignments/4/Using FPDF/fpdf17/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('/Users/karanmankodi/Sites/WebDesign/Assignments/4/Using FPDF/Images/header.png',10,6,190,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Line break
    $this->Ln(30);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Ln(10);
$pdf->Cell(0,10,'SUBMITTER INFORMATION',1);
$pdf->Ln(12);
$pdf->Cell(0,10,"Name: $Name");
$pdf->Ln(10);
$pdf->Cell(100,10,"Address Line 1: $Address1");
$pdf->Cell(100,10,"Address Line 2: $Address2");
$pdf->Ln(10);
$pdf->Cell(70,10,"City: $City");
$pdf->Cell(70,10,"State: $State");
$pdf->Cell(70,10,"Zip: $Zip");
$pdf->Ln(10);
$pdf->Cell(75,10,"Contact by: ");
if (isset ($_POST[regularMail]))
{
$pdf->Cell(35,10,"Regular Mail");
}
if (isset ($_POST[contactEMail]))
{
$pdf->Cell(35,10,"E Mail");
}
if (isset ($_POST[contactCell]))
{
$pdf->Cell(35,10,"Cell");
}
$pdf->Ln(20);
$pdf->Cell(0,10,"COLLECTOR INFORMATION",1);
$pdf->Ln(12);
$pdf->Cell(0,10,"Host Plant Common Name: $PlantCommonName");
$pdf->Ln(10);
$pdf->Cell(0,10,"Host Plant Scientific Name: $PlantScientificName");
$pdf->Ln(10);
$pdf->Cell(70,10,"Plant Age: $PlantAge");
$pdf->Cell(70,10,"Plant Size: $PlantSize");
$pdf->Cell(70,10,"Condition Worsening: $OptionsRadios");
$pdf->Ln(20);
$pdf->Cell(0,10,'PLANT SYMPTOM(S) DESCRIPTION',1);
$pdf->Ln(12);
$pdf->Cell(0,10,"Details: $Details");
$pdf->Ln(12);
$pdf->Output();
?>
