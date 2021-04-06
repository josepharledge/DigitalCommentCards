<h1>USACE Survey Results</h1>
<?php

$con=mysqli_connect("localhost","joey","58645431","usacedb");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM responses");

echo "<table border='1'>
<tr>
<th>Park Name</th>
<th>Question 1</th>
<th>Question 2</th>
<th>Question 3</th>
<th>Question 4</th>
<th>Question 5</th>
<th>Question 6</th>
<th>Question 7</th>
<th>Question 8</th>
<th>Question 9</th>
<th>Question 10</th>
<th>Question 11</th>
<th>Question 12</th>
<th>Question 13</th>
<th>Question 14</th>
<th>Comments</th>
<th>Complaints</th>
<th>Date Noticed</th>
<th>First Name</th>
<th>Last Name</th>
<th>Phone Number</th>
<th>Email Address</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['park'] . "</td>";
echo "<td>" . $row['slider1'] . "</td>";
echo "<td>" . $row['slider2'] . "</td>";
echo "<td>" . $row['slider3'] . "</td>";
echo "<td>" . $row['slider4'] . "</td>";
echo "<td>" . $row['slider5'] . "</td>";
echo "<td>" . $row['slider6'] . "</td>";
echo "<td>" . $row['slider7'] . "</td>";
echo "<td>" . $row['slider8'] . "</td>";
echo "<td>" . $row['slider9'] . "</td>";
echo "<td>" . $row['slider10'] . "</td>";
echo "<td>" . $row['slider11'] . "</td>";
echo "<td>" . $row['slider12'] . "</td>";
echo "<td>" . $row['slider13'] . "</td>";
echo "<td>" . $row['slider14'] . "</td>";
echo "<td>" . $row['comments'] . "</td>";
echo "<td>" . $row['complaints'] . "</td>";
echo "<td>" . $row['dates'] . "</td>";
echo "<td>" . $row['firstName'] . "</td>";
echo "<td>" . $row['lastName'] . "</td>";
echo "<td>" . $row['phoneNumber'] . "</td>";
echo "<td>" . $row['emailAddress'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>
