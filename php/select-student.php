<?php

include 'Database.php';
$obj=new Database();
$obj->select('students', '*', null,  null,'id DESC',null);
$students=$obj->getResult();
$output = "";
foreach($students as $student){  
    $output .="
    <tr>
    <td>{$student['id']}</td>
    <td>{$student['student_name']}</td>
    <td>{$student['email']}</td>
    <td>{$student['classes']}</td>";
    if($student['gender']  == 1){  
         $output .="<td>Male</td>";
    }else{  
         $output .="<td>Female</td>";
    }
    $output .="<td>{$student['age']}</td>
    <td>{$student['phone']}</td>
    <td>{$student['address']}</td>
    <td><button data-id='{$student['id']}' id='edit-student' class='btn btn-success' data-toggle='modal' data-target='#update-student'>Edit</button></td>
    <td><button data-id='{$student['id']}' id='delete-student' class='btn btn-danger'>Delete</button></td>
    </tr>
    ";
}
echo $output;

?>