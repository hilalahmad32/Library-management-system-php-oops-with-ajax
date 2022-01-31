<?php

include 'Database.php';
$obj=new Database();
if(isset($_POST['id'])){
    $id=$_POST['id'];

    $obj->edit('publishers','*',"id='{$id}'");
    $publishers=$obj->getResult();
    $output="";
    foreach($publishers as $publisher){
        $output .="
        <div class='form-group'>
        <label for=''>Enter the Publisher Name</label>
        <input type='hidden' value='{$publisher['id']}' name='id' id='id' class='form-control form-contorl-lg'>
        <input type='text' value='{$publisher['publisher_name']}' name='edit_publisher_name' id='edit_publisher_name' class='form-control form-contorl-lg'>
    </div>
        ";
    }
}
echo $output;


?>