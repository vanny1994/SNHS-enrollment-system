<?php
include_once 'db_conn.php';

// Fetch data from the tables in the db
$sql1 = "SELECT * FROM enrollee WHERE status = 'ENROLLED' AND grade_level = '8' ";
$sql2 = "SELECT * FROM transferee_returnee WHERE status = 'ENROLLED' AND grade_level = '8' ";
$result1 = $db_conn->query($sql1);
$result2 = $db_conn->query($sql2);

// Check if there are any results
if (null !== $result1 || null !== $result2) {
    echo '<div id="table-container">';
    echo '<table class="table">';
    echo '<thead class="thead-dark">';
    echo '<button type="button" class="btn btn-success" onclick="generatePDF()">Export</button>';
    echo '<th scope="col" colspan="9" style="text-align:center;">All Grade 8</th>';
    echo '<tr>'; // add style attribute
    echo '<th scope="col">Full Name</th>';
    echo '<th scope="col">LRN</th>';
    echo '<th scope="col">Date of Birth</th>';
    echo '<th scope="col">Gender</th>';
    echo '<th scope="col">Age</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

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

    // loop through the data and create table rows
    foreach ($data as $row) {
        echo '<tr>';
        echo '<td>' . $row["lastName"] . ' , ' . $row["firstName"] . ' '  . $row["middleName"] .   ' '  . $row["extensionName"] . '</td>';
        echo '<td>' . $row["LRN"] . '</td>';
        echo '<td>' . $row["dateOfBirth"] . '</td>';
        echo '<td>' . $row["sex"] . '</td>';
        echo '<td>' . $row["age"] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}

// close db connection
$db_conn->close();
?>


<script>
   function generatePDF() {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "generatePDFforgrade8.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.responseType = "blob"; // Set the response type to blob
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      // Create a blob URL from the response data
      var blob = new Blob([this.response], { type: "application/pdf" });
      var url = URL.createObjectURL(blob);
      // Create a link element and click it to trigger the download
      var link = document.createElement("a");
      link.href = url;
      link.download = "Enrolled-List-For-Grade-8.pdf"; // Set the filename of the downloaded file
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
      URL.revokeObjectURL(url); // Release the blob URL
    }
  };
  xhr.send();
}


</script>