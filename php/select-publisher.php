<?php

include 'Database.php';
$obj=new Database();

$obj->select('publishers', '*',null,null,'id DESC',null);
$publishers=$obj->getResult();
$output = "";
foreach($publishers as $publisher){  
    $output .="
    <tr>
    <td>{$publisher['id']}</td>
    <td>{$publisher['publisher_name']}</td>
    <td><button data-id='{$publisher['id']}' id='edit-publisher' class='btn btn-success' data-toggle='modal' data-target='#update-publisher'>Edit</button></td>
    <td><button data-id='{$publisher['id']}' id='delete-publisher' class='btn btn-danger'>Delete</button></td>
    </tr>
    ";
}
echo $output;

?>