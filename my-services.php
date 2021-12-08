<?php

require('fpdf/fpdf.php');
require_once("db.php");
require_once("backend/mainFunctions.php");
date_default_timezone_set("Asia/Kolkata");
$Date = date("Y-m-d");
$vehicle_id = $_GET['vehicle_id'];
//Connecting Database



// $main = new Main;


$pdf = new FPDF('P','mm','A4');
$pdf->AddPage("p",'A4');
$pdf->SetFont('Times','B',18);
$pdf->Cell('c',10,'My Services '.$vehicle_id,'','f','');

$pdf->ln(20);
$pdf->SetFont('Times','B',15);
//$pdf->Cell(50,10,'','','',"L");
$pdf->Cell(60,10,'Service Type','1','',"L");
$pdf->Cell(40,10,'Service Date','1','',"L");
$pdf->Cell(40,10,'Service Time','1','',"L");
$pdf->Cell(40,10,'Service Status','1','',"L");
//$pdf->Cell(50,10,'','','',"L");

$pdf->SetFont('Times','',12);
$pdf->ln(4);

                        
                        $sql = "SELECT * FROM booking WHERE vehicle_number LIKE '$vehicle_id';";

                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                $pdf->ln(6);
                                //$pdf->Cell(50,10,'','','',"L");
                               
                                if($row['service_type'] == 1){
                                    $pdf->Cell(60,6,'Normal Service','1','',"L");
                                }else if($row['service_type'] == 2){
                                    $pdf->Cell(60,6,"Repair Service",'1','',"L");
                                }else if($row['service_type'] == 3){
                                    $pdf->Cell(60,6,"Breakdown Service",'1','',"L");
                                }else{
                                    $pdf->Cell(60,6,"Modification Service",'1','',"L");
                                }
                                $pdf->Cell(40,6,$row['date'],'1','',"L");
                                $pdf->Cell(40,6,$row['time'],'1','',"L");
                                $pdf->Cell(40,6,getStatusCustomerForPDF($row['status']),'1','',"L");
                            }
                        }


// $main->pdfFooter($pdf);

$pdf->Output('',"Area(".$Date.').pdf',true);

//Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, boolean fill [, mixed link]]]]]]])

?>