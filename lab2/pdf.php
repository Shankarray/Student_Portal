<?php
session_start();
	require "fpdf.php";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project_student";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$user = $_SESSION["login_user"];
	$sem = $_SESSION["semester"];
	$sql = "SELECT * FROM student WHERE id='$user'";
	$res = mysqli_query($conn, $sql);
	$res = mysqli_fetch_assoc($res);
	$GLOBALS["stud_data"] = $res;
	$sql = "SELECT * FROM marks WHERE studentid='$user' AND sem='$sem'";
	$result = mysqli_query($conn, $sql);
	$GLOBALS["data"] = $result;
	$branch = $res["branch"];
	$GLOBALS["out"] = $out;
	$_SESSION["connection"] = $conn;
	class pdf extends FPDF{
		function header(){
			$this->Image('image.jpg', 5, 6);
			$this->SetFont('Arial', 'B', 17);
			$this->Cell(276, 30, "NATIONAL INSTITUTE OF TECHNOLOGY DURGAPUR", 0, 0, 'C');
			$this->Ln(20);
			$this->SetFont('Arial', '', 12);
			$this->Cell(276, 5,"An Institute of National Importance under Government of India,",0,1,'C');
			$this->Cell(276, 5,"Ministry of Human Resource Development",0,1,'C');
			$this->Ln(20);
		}
		function footer(){
			$this->SetY(-15);
			$this->SetFont('Arial', "", 8);
			$this->Cell(0, 10, 'Page '.$this->PageNo().'/{nb}', 0, 0, 'C');
		}
		function headertable(){
			$this->SetFont('Times', 'B', 12);
			$this->Ln(20);
			$this->Cell(20,10, "",0,0,'C');
			$this->Cell(20, 10, 'Name:', 1, 0,'C');
			$this->Cell(90, 10, $GLOBALS["stud_data"]["firstname"].' '.$GLOBALS["stud_data"]['lastname'], 1, 0, 'C');
			$this->Cell(5,10,'',0,0,'C');
			$this->Cell(35, 10, 'Registration No:', 1, 0,'C');
			$this->Cell(90, 10, $GLOBALS["stud_data"]["id"], 1, 0, 'C');
			$this->SetFont('Times', 'B', 12);
			$this->Ln(10);
			$this->Cell(20,10, "",0,0,'C');
			$this->Cell(20, 10, 'Roll No:', 1, 0,'C');
			$this->Cell(90, 10, $GLOBALS["stud_data"]["rollnumber"], 1, 0, 'C');
			$this->Cell(5,10,'',0,0,'C');
			$this->Cell(35, 10, 'Semester:', 1, 0,'C');
			$this->Cell(90, 10, $_SESSION["semester"], 1, 0, 'C');
		}
		function grade_card(){
			$conn = $_SESSION["connection"];
			$this->SetFont('Times', 'B', 12);
			$this->Ln(20);
			$this->Cell(70, 10, "",0,0,'C');
			$this->Cell(25, 10, "Course Code",1,0,'C');
			$this->Cell(80, 10, "Course Name",1,0,'C');
			$this->Cell(25, 10, "Grade",1,0,'C');
			$this->Ln(10);
			while($row = mysqli_fetch_assoc($GLOBALS["data"])){
				$code = $row["courseid"];
				$sql = "SELECT course FROM course WHERE courseid='$code'";
				$output = mysqli_query($conn, $sql);
				$output = mysqli_fetch_assoc($output);
				$this->SetFont('Times', 'B', 12);
				$this->Cell(70, 10, "",0,0,'C');
				$this->Cell(25, 10, $code, 1, 0, 'C');
				$this->Cell(80, 10, $output["course"], 1, 0, 'C');
				$this->Cell(25, 10, $row["grade"], 1, 0, 'C');
				$this->Ln(10);
			}
		}
	}
	$pdf = new pdf();
	$pdf->AliasNbPages();
	$pdf->AddPage('L', 'A4', 0);
	$pdf->headertable();
	$pdf->grade_card();
	$pdf->output();

?>
