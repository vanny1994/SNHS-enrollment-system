<?php
include_once 'db_conn.php';

// Fetch data from the table in th db
$sql = "SELECT * FROM transferee_returnee WHERE status = 'PENDING' ";
$result = $db_conn->query($sql);

 

// Check if there are any results
if (null !== $result && $result->num_rows > 0) {

    echo '<div id="table-container">';
    echo '<table class="table">';
    echo '<thead class="thead-dark">';
    echo '<tr>'; // add style attribute
    echo '<th scope="col" colspan="8" style="text-align:center;">Returnee/Transferee List</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<thead class="thead-dark">';
    echo '<tr>';
    echo '<th scope="col">Status</th>';
    echo '<th scope="col">School Year</th>';
    echo '<th scope="col">Grade Level</th>';
    echo '<th scope="col">Firstname</th>';
    echo '<th scope="col">Middlename</th>';
    echo '<th scope="col">Lastname</th>';
    echo '<th scope="col">Track</th>';
    echo '<th scope="col">Strand</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // loop through the table
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["status"] . '</td>';
        echo '<td>' . $row["school_year"] . '</td>';
        echo '<td>' . $row["grade_level"] . '</td>';
        echo '<td>' . $row["firstName"] . '</td>';
        echo '<td>' . $row["middleName"] . '</td>';
        echo '<td>' . $row["lastName"] . '</td>';
        echo '<td>' . $row["track"] . '</td>';
        echo '<td>' . $row["strand"] . '</td>';

        echo '<td>';
        echo '<button type="button" class="btn btn-success" id="TRDetails" style="margin-right:10px;" data-enrollee-id="' . $row["transferee_returneeId"] . '"  onclick="showTransfereeDetailsModal(' . $row["transferee_returneeId"] . ')">View Details</button>';


        echo '<button type="button" class="btn btn-success" data-enrollee-id="' . $row["transferee_returneeId"] . '"  onclick="approveTransfereeRequest(' . $row["transferee_returneeId"] . ')" >Approve</button>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';

     // Modal HTML code
     echo '<div class="modal fade" id="enrolleeDetailsModal" tabindex="-1" role="dialog" aria-labelledby="enrolleeDetailsModalLabel" aria-hidden="true">';
     echo '<div class="modal-dialog modal-dialog-centered" role="document">';
     echo '<div class="modal-content">';
     echo '<div class="modal-header">';
     echo '<h5 class="modal-title" id="enrolleeDetailsModalLabel">Transferee/Returnee Details</h5>';
    
     echo '</div>';
     echo '<div class="modal-body">';
     echo '<div id="enrolleeDetails"></div>';
     echo '</div>';
     echo '<div class="modal-footer">';
     echo '<button type="button" class="btn btn-success" data-dismiss="modal" onclick="closeModal()">Close</button>';
     echo '</div>';
     echo '</div>';
     echo '</div>';
     echo '</div>';


} else {
    echo "No results found.";
}
?>
            <script>
                            //closemodal
                    function closeModal() {
                        $('#enrolleeDetailsModal').modal('hide');
                    }
            </script>

            <script>
                        
            // function to show enrollee details modal
            function showTransfereeDetailsModal(transferee_returneeId) {
            var id = transferee_returneeId;
            var buttonId = "TRDetails"
            var button = document.getElementById(buttonId);
            $.ajax({
                url: "get_transferee_returnee_details.php",
                type: "POST",
                data: {transferee_returneeId: id },
                success: function(result) {
                    $("#enrolleeDetails").html(result);
                    $("#enrolleeDetailsModal").modal("show");
                    $(button).blur(); // remove focus from the button after clicking
                
                }
            });
            }

            </script>
            
<script>
function approveTransfereeRequest(transferee_returneeId) {
    var id = transferee_returneeId;
    $.ajax({
        url: "approve_transferee.php",
        type: "POST",
        data: {transferee_returneeId: id },
        success: function(result) {
            // Handle the response from the server
            alert(result);
        }
    });
}
</script>



<script>
    
function searchTransferee() {
  var searchQuery = document.getElementById("search_input").value;
  $.ajax({
    url: "SearchForTransferee_returnee.php",
    type: "POST",
    data: { search_query: searchQuery },
    success: function(result) {
      // Create modal HTML
      var modalHtml = '<div class="modal fade" id="searchResultsModal" tabindex="-1" aria-labelledby="searchResultsModalLabel" aria-hidden="true">';
      modalHtml += '<div class="modal-dialog">';
      modalHtml += '<div class="modal-content">';
      modalHtml += '<div class="modal-header">';
      modalHtml += '<h5 class="modal-title" id="searchResultsModalLabel">Search Results</h5>';
      modalHtml += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
      modalHtml += '</div>';
      modalHtml += '<div class="modal-body">';
      modalHtml += result; // Add search results to modal body
      modalHtml += '</div>';
      modalHtml += '</div>';
      modalHtml += '</div>';
      modalHtml += '</div>';

      // Add modal HTML to the page
      $('body').append(modalHtml);

      // Show the modal
      $('#searchResultsModal').modal('show');

     
    }
  });
}



document.getElementById("search_btn").addEventListener("click", function() {
    searchTransferee();
});

</script>

