<?php
require('fpdf/fpdf.php');
// Database Connection 
$conn = new mysqli('localhost:3307', 'root', '', 'goodweb');
//Check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Select data from MySQL database
$select = "SELECT * FROM `users` ORDER BY userid";
$result = $conn->query($select);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
  $id = $row->userid;
  $name = $row->name;
  $username = $row->username;
  $email = $row->email;
  $phone = $row->phone;
  $usertype = $row->usertype;
  $pdf->Cell(10,10,$id,1);
  $pdf->Cell(20,10,$name,1);
  $pdf->Cell(20,10,$username,1);
  $pdf->Cell(50,10,$email,1);
  $pdf->Cell(30,10,$phone,1);
  $pdf->Cell(20,10,$usertype,1);
  $pdf->Ln();
}
$pdf->Output();
?>