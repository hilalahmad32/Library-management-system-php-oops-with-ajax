<?php

include 'Database.php';

$obj = new Database();
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $obj->select('authers', '*', null, 'id DESC', "auther_name =l" , null);
    $authers = $obj->getResult();
    print_r($authers);
    die();
    $output = "";
    foreach ($authers as $auther) {
        $output .= " 
    <tr>
        <td>{$auther['id']}</td>
        <td>{$auther['auther_name']}</td>
        <td><button data-id='{$auther['id']}' id='edit-auther' class='btn btn-success' data-toggle='modal' data-target='#update'>Edit</button></td>
        <td><button data-id='{$auther['id']}' id='delete-auther' class='btn btn-danger'>Delete</button></td>
    </tr>";
    }
    echo $output;
}
