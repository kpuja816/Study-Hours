<?php
include('header.php');
?>

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



<table>
  <tr>
    <th>BOOK</th>
    <th>AUDIO</th>
    <th>VIDEO</th>
  </tr>
  <tr>
    <td>www.google.com</td>
    <td>www.google.com</td>
    <td>www.google.com</td>
  </tr>
  <tr>
    <td>www.google.com</td>
    <td>www.google.com</td>
    <td>www.google.com</td>
  </tr>
  <tr>
   <td>www.google.com</td>
    <td>www.google.com</td>
    <td>www.google.com</td>
  </tr>
  <tr>
    <td>www.google.com</td>
    <td>www.google.com</td>
    <td>www.google.com</td>
  </tr>
  <tr>
   <td>www.google.com</td>
    <td>www.google.com</td>
    <td>www.google.com</td>
  </tr>
  <tr>
   <td>www.google.com</td>
    <td>www.google.com</td>
    <td>www.google.com</td>
  </tr>
</table>

<script>
function myFunction() {
  location.replace("login.php")
}
</script>

 <button class="btn btn-success" style="width:220px"  onclick="myFunction()">Go</button><br>
     

</body>
</html>
