<?php
    // connect to the database 
    $conn = mysqli_connect('localhost', 'root', '', 'hnginterns');
    // Check if connection is successful, if not, end the page
    if (! $conn) {
        die('Error: Cannot connect to Database');
    }
    // Querying the database, to retrieve all the records
    $result = mysqli_query($conn, "select * from hnguserprofile");
    // Check if the records were found 
    if ($result) {
        // Loop through the records to show them on the page.
        // For easy way to view, we will use a html table here
        echo '<table><tr><th>S/N</th><th>Name</th><th>Slack Username</th><th>GitHub Profile</th</tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>' . $row['id'] . '</td>'; 
            echo '<td>' . $row['name'] . '</td>'; 
            echo '<td>' . $row['slack_name'] . '</td>';
            echo '<td>' . $row['git_profile'] . '</td></tr>'; 
        }
        echo '</table>';
    }