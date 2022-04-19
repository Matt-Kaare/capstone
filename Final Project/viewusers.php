<?php
include('header.php');

echo '<h1>Registered Users</h1>';
require_once("dbconnect.php");

$c = "SELECT fullname, date FROM users ORDER BY date ASC";
$e = @mysqli_query ($connect, $c); //Runs the query for the users

$num = mysqli_num_rows($e);

if ($num > 0) {
    echo "<p>There are $num users registered.</p>\n";
    
    echo '<table align= "center" cellspacing="4" cellpadding="4" width="80%">
    <tr><td align="left><b>Name</></td><td align="left"><b>Date Registered</b></td></tr>';


while ($row = mysqli_fetch_array($e, MYSQLI_ASSOC)) {
    echo '<tr><td align="left">' . $row['name'], '</td><td align="left">' . $row['date'] . '</td></tr>';
}

echo '</table>';

mysqli_free_result ($e);

} else {
        echo '<p class="error">There are no registered users.</p>';
    }


mysqli_close($connect);

include('footer.php');
?>