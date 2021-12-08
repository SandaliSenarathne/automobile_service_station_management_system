<?php

require('../fpdf/fpdf.php');
require_once("../db.php");
require_once("../backend/mainFunctions.php");
date_default_timezone_set("Asia/Kolkata");
$Date = date("Y-m-d");
//Connecting Database
$sql = "SELECT * FROM booking;";
if(isset($_GET['search'])){
    $search = $_GET['search'];
    if($search == "today"){
        $sql = "SELECT * FROM booking WHERE date = CURDATE();";
    }
    if($search == "week"){
        $sql = "SELECT * FROM booking WHERE date >= CURDATE() - INTERVAL 7 DAY;";
    }
    if($search == "month"){
        $sql = "SELECT * FROM booking WHERE date >= CURDATE() - INTERVAL 30 DAY;";
    }
    if($search == "year"){
        $sql = "SELECT * FROM booking WHERE date >= CURDATE() - INTERVAL 365 DAY;";
    }
}else{
    $search = "all";
}


// $main = new Main;


$pdf = new FPDF('L','mm','A4');
$pdf->AddPage("l",'A4');
$pdf->SetFont('Times','B',18);
$pdf->Cell('c',10,'Report for '.$search,'','f','');

$pdf->ln(20);
$pdf->SetFont('Times','B',15);
//$pdf->Cell(50,10,'','','',"L");
$pdf->Cell(38,10,'Service Type','1','',"L");
$pdf->Cell(40,10,'Vehicle Number','1','',"L");
$pdf->Cell(40,10,'Brand','1','',"L");
$pdf->Cell(40,10,'Model','1','',"L");
$pdf->Cell(30,10,'Date','1','',"L");
$pdf->Cell(30,10,'Time','1','',"L");
$pdf->Cell(40,10,'Requested On','1','',"L");
$pdf->Cell(25,10,'status','1','',"L");
//$pdf->Cell(50,10,'','','',"L");

$pdf->SetFont('Times','',12);
$pdf->ln(4);


                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                $pdf->ln(6);
                                //$pdf->Cell(50,10,'','','',"L");
                                if($row['service_type'] == 1){
                                    $pdf->Cell(38,6,'Normal Service','1','',"L");
                                }else if($row['service_type'] == 2){
                                    $pdf->Cell(38,6,"Repair Service",'1','',"L");
                                }else if($row['service_type'] == 3){
                                    $pdf->Cell(38,6,"Breakdown Service",'1','',"L");
                                }else{
                                    $pdf->Cell(38,6,"Modification Service",'1','',"L");
                                }
                                
                                $pdf->Cell(40,6,$row['vehicle_number'],'1','',"L");
                                $pdf->Cell(40,6,$row['vehicle_brand'],'1','',"L");
                                $pdf->Cell(40,6,$row['vehicle_model'],'1','',"L");
                                $pdf->Cell(30,6,$row['date'],'1','',"L");
                                $pdf->Cell(30,6,$row['time'],'1','',"L");
                                $pdf->Cell(40,6,$row['requested_on'],'1','',"L");
                                $pdf->Cell(25,6,getStatusCustomerForPDF($row['status']),'1','',"L");
                            }
                        }


// $main->pdfFooter($pdf);

$pdf->Output('',"Area(".$Date.').pdf',true);

//Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, boolean fill [, mixed link]]]]]]])

?>