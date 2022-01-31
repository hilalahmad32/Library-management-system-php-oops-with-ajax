<?php

include 'Database.php';

$obj = new Database();
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $obj->edit('authers', '*',null, "id='{$id}'");
    $authers = $obj->getResult();
    $output = "";
    foreach ($authers as $auther) {
        $output .= " 
        <div class='form-group'>
        <label for=''>Enter the Auther Name</label>
        <input type='hidden' value='{$auther['id']}' name='id' id='id' class='form-control form-contorl-lg'>
        <input type='text' value='{$auther['auther_name']}' name='edit_auther_name' id='edit_auther_name' class='form-control form-contorl-lg'>
    </div>
   ";
    }
    echo $output;
}
