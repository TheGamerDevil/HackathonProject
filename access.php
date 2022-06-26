<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>PUBLIC WATER DATA</h2>

<table>
  <tr>
    <th>ZipCode</th>
    <th>Residential</th>
    <th>Landscape irrigation</th>
    <th>Commercial</th>
    <th>Industrial</th>
    <th>Agricultural</th>
    <th>Landscape Irrigation</th>
    <th>Residential irrigation</th>
    <th>Commercial</th>
    <th>Agricultural</th>
    <th>Construction</th>
    <th>Industrial</th>

  </tr>
<?php
$conn = mysqli_connect("sql113.epizy.com", "epiz_32037524", "i3n0hG4pJN1g83", "epiz_32037524_hack3db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ZipCode, DWResidential, DWLandscape, DWCommercial, DWAgricultural, DWIndustrial, RWLandscape, RWResidential, RWCommercial, RWAgricultural, RWConstruction,  RWIndustrial FROM water";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ZipCode"]. "</td><td>" . $row["DWResidential"] . "</td><td>"
. $row["DWLandscape"]. "</td><td>" . $row["DWCommercial"] ."</td><td>" . $row["DWAgricultural"] ."</td><td>" . $row["DWIndustrial"] ."</td><td>" . $row["RWLandscape"] ."</td><td>" . $row["RWResidential"] ."</td><td>" . $row["RWCommercial"] ."</td><td>" . $row["RWAgricultural"] ."</td><td>" . $row["RWConstruction"] ."</td><td>" . $row["RWIndustrial"] ."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
 

  


</body>
</html>

