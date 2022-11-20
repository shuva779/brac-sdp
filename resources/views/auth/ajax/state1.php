<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "brac";

$conn= mysqli_connect($db_server,$db_user,$db_pass,$db_name);

if(!$conn){
  die("Connection Failed!: ".mysqli_connect_error());
}


$country_id =   $_POST['country_data'];

$state = "SELECT * FROM districts WHERE division_id = $country_id ORDER BY name";

$state_qry = mysqli_query($conn, $state);
// $output="";
$output = '<option value="">Select State</option>';
while ($state_row = mysqli_fetch_assoc($state_qry)) {
    $output .= '<option value="' . $state_row['id'] . '">' . $state_row['name'] . '</option>';
}
echo $output;
?>
