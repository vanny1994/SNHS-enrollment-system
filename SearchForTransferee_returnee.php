<?php
include_once 'db_conn.php';

if(isset($_POST['search_query'])){
    $search_query = $_POST['search_query'];

    $sql = "SELECT * FROM transferee_returnee
    WHERE LRN LIKE '%$search_query%' OR
          firstName LIKE '%$search_query%' OR
          middleName LIKE '%$search_query%' OR
          lastName LIKE '%$search_query%' ";

    $result = $db_conn->query($sql);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $transferee_returneeId= $row["transferee_returneeId"];
                $sql2 = "SELECT * FROM transferee_returnee WHERE transferee_returneeId = '$transferee_returneeId'";
                $result2 = $db_conn->query($sql2);
                if ($result2) {
                    if (mysqli_num_rows($result2) > 0) {
                        $row2 = mysqli_fetch_assoc($result2);
                        // check if each column is not null or empty, and display its value
                        foreach ($row2 as $column => $value) {
                            if (!is_null($value) && $value !== '') {
                                $columnCaps = strtoupper($column);
                                echo "<span style='font-weight:bold;color:black;'>$columnCaps:</span> $value<br>";
                            }
                            
                         
                        }

                        echo '<br><br><div style="text-align: right;">
                        <button type="button" id="approveBtn" class="btn btn-success" style="margin-right:20px;">Approve</button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal" >Close</button>
                        </div>';
                        
                        // Add JavaScript code to make an AJAX call on the approve button click event
                        echo '<script>
                        $(document).ready(function() {
                            $("#approveBtn").click(function() {
                                $.ajax({
                                    url: "approve_transferee.php",
                                    type: "POST",
                                    data: { transferee_returneeId: "' . $transferee_returneeId . '" },
                                    success: function(data) {
                                        // Handle success response from approve_enrollee.php
                                        alert("Enrollee approved!");
                                    },
                                    error: function(xhr, textStatus, errorThrown) {
                                        // Handle error response from approve_enrollee.php
                                        console.log(xhr.responseText);
                                    }
                                });
                            });
                        });
                        </script>';
                        
                      
                    } else {
                        echo "No results found.";
                    }
                } else {
                    echo "Error executing query: " . mysqli_error($db_conn);
                }
            }
        } else {
            echo "No results found.";
        }
    } else {
        echo "Error executing query: " . mysqli_error($db_conn);
    }
    
}
// close db connection
$db_conn->close();
?>
