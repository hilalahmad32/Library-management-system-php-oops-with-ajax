<?php

include 'Database.php';

$obj = new Database();

$obj->select('categorys', '*', null, null, null, null);
$categorys = $obj->getResult();
$output = "";
foreach ($categorys as $category) {
    $output .= " <tr>
<td>{$category['id']}</td>
<td>{$category['category_name']}</td>
<td><button data-id='{$category['id']}' id='edit-category' class='btn btn-success' data-toggle='modal' data-target='#update-category'>Edit</button></td>
<td><button data-id='{$category['id']}' id='delete-category' class='btn btn-danger'>Delete</button></td>
</tr>";
}
echo $output;
