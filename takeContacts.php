<?php

require 'init.php';

$sql = "SELECT * FROM contacts";

$result = mysqli_query($conn, $sql);
$response = array();
while($row = mysqli_fetch_array($result)){
    array_push($response,array('name'=>$row['name'],'email' =>$raw['email']));
}

echo json_encode($response);

mysqli_close($conn);