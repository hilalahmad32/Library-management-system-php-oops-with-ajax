<?php

include 'Database.php';

$obj=new Database();

$obj->select('authers','*',null,null,null,null);
$authers=$obj->getResult();
$output="";
foreach($authers as $auther){  
    $output .= " 
    <tr>
        <td>{$auther['id']}</td>
        <td>{$auther['auther_name']}</td>
        <td><button data-id='{$auther['id']}' id='edit-auther' class='btn btn-success' data-toggle='modal' data-target='#update'>Edit</button></td>
        <td><button data-id='{$auther['id']}' id='delete-auther' class='btn btn-danger'>Delete</button></td>
    </tr>";
}
echo $output;

?>