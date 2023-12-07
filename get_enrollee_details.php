<?php
include_once 'db_conn.php';

// Get the enrollee ID from the AJAX request
if(isset($_POST['enrolleeId'])){
    $enrolleeId = $_POST['enrolleeId'];

    // Fetch the enrollee data from the database
    $stmt = $db_conn->prepare("SELECT * FROM enrollee WHERE enrolleeId = ?");

    $stmt->bind_param("i", $enrolleeId);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if there are any results
    if ($result && $result->num_rows > 0) {
        // Return the enrollee data as a table
        $enrolleeData = $result->fetch_assoc();
        echo '<table>';
        foreach ($enrolleeData as $key => $value) {
            if ($value !== null && $value !== '')  {
                echo '<tr>';
                echo '<td>' . ucfirst(str_replace('_', ' ', $key)) . ': </td>';
                echo '<td>'  . $value .  '</td>';
                echo '</tr>';
            }
        }
        echo '</table>';
    } else {
        // Return an error message as JSON
        echo json_encode(array('error' => 'Enrollee not found.'));
    }
}
// close db connection
$db_conn->close();
?>