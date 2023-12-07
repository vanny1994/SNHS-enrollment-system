<?php
// Include the main TCPDF library (search for installation path).
require_once('TCPDF/tcpdf.php');
require_once('TCPDF/include/tcpdf_images.php');

require_once('db_conn.php');

// Fetch data from the tables in the db
$sql1 = "SELECT * FROM enrollee WHERE status = 'ENROLLED' AND grade_level = '11'  AND track = 'TVL' AND strand = 'EIM' ";
$sql2 = "SELECT * FROM transferee_returnee WHERE status = 'ENROLLED' AND grade_level = '11' AND track = 'TVL' AND strand = 'EIM' ";
$result1 = $db_conn->query($sql1);
$result2 = $db_conn->query($sql2);

// Check if there are any results
if (null !== $result1 || null !== $result2) {
    // Initialize a new PDF document
    $pdf = new TCPDF('P', 'mm', 'Folio', true, 'UTF-8', false);
    
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('EIM Grade 11 Enrollees');
    $pdf->SetSubject('eim Grade 11 Enrollees');

    // Add a page
    $pdf->AddPage();

    // Set the font
    $pdf->SetFont('helvetica', '', 10);
    $pdf->MultiCell(0, 15, "Republic of the Philippines\nDepartment of Education\nRegion VIII\nSchools Division of Eastern Samar", 0, 'C', 0, 1, '', '', true, 0, false, true, 30, 'M', false);
   
    //set the font of this cell
    $pdf->SetFont('helvetica', 'B', 15);
    $pdf->MultiCell(0, 15, "SULAT NATIONAL HIGH SCHOOL\n", 0, 'C', 0, 1, '', '', true, 0, false, true, 30, 'M', false);
    
    $pdf->SetFont('helvetica', 'B', 10);
    $pdf->MultiCell(0, 10, "\n\nLIST OF ENROLLED STUDENTS\n EIM-GRADE 11", 0, 'C', false);

     $pdf->Ln(10);
     $pdf->Cell(20);
     $pdf->SetFont('helvetica', '', 10);

    // Add the table headers
    $pdf->Cell(80, 10, 'Full Name', 1);
    $pdf->Cell(30, 10, 'Date of Birth', 1);
    $pdf->Cell(20, 10, 'Gender', 1);
    $pdf->Cell(15, 10, 'Age', 1);

       

    // Combine the results into an array
    $data = array();
    while ($row1 = $result1->fetch_assoc()) {
        $data[] = $row1;
    }
    while ($row2 = $result2->fetch_assoc()) {
        $data[] = $row2;
    }

    // Sort the data alphabetically by last name
    usort($data, function($a, $b) {
        return strcmp($a['lastName'], $b['lastName']);
    });

    // loop through the data and add table rows
    foreach ($data as $row) {
        $pdf->Ln();
        $pdf->Cell(20);
        $pdf->Cell(80, 10, $row["lastName"] . ', ' . $row["firstName"] . ' '  . $row["middleName"] .   ' '  . $row["extensionName"], 1);
        $pdf->Cell(30, 10, $row["dateOfBirth"], 1);
        $pdf->Cell(20, 10, $row["sex"], 1);
        $pdf->Cell(15, 10, $row["age"], 1);
    }

    // Output the PDF file as a download
    $pdf->Output('EIM-grade11_enrollees.pdf', 'D');

}

// Close db connection
$db_conn->close();
?>
