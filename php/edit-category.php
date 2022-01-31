<?php

include 'Database.php';
$obj = new Database();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $obj->edit('categorys', '*',null, "id='{$id}'");
    $categorys = $obj->getResult();
    $output = "";
    foreach ($categorys as $category) {
        $output .= " 
        <div class='form-group'>
        <label for=''>Enter the Category Name</label>
        <input type='hidden' value='{$category['id']}' name='id' id='id' class='form-control form-contorl-lg'>
        <input type='text' value='{$category['category_name']}' name='edit_category_name' id='edit_category_name' class='form-control form-contorl-lg'>
    </div>
   ";
    }
    echo $output;
}
