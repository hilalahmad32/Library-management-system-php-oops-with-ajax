<?php
include 'Database.php';
$obj= new Database();
$obj->select('settings', '*', null, null, null, null);
$settings = $obj->getResult();
$output="";
foreach ($settings as $setting) {
    $output .= "<div class='form-group'>
        <label for=''>Enter the Return Date</label>
        <input type='text' value='{$setting['return_days']}' name='return_days' id='return_days' class='form-control '>
        <input type='hidden' value='{$setting['id']}' name='id' id='id' class='form-control '>
    </div>

    <div class='form-group'>
        <label for=''>Enter the Fine</label>
        <input type='text'  value='{$setting['fine']}' name='fine' id='fine' class='form-control '>
    </div>";
}
echo $output;
?>