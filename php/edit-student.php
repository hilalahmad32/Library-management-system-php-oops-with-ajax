<?php include 'Database.php';

$obj = new Database();
$output = "";
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $obj->edit('students', '*', null,"id='{$id}'");
    $students = $obj->getResult();
    foreach ($students as $student) {
        $output .= "
       <div class='form-group'>
            <label for=''>Enter the Student Name</label>
            <input type='hidden' value='{$student['id']}' name='id' id='id' class='form-control '>
            <input type='text' value='{$student['student_name']}' name='edit_student_name' id='edit_student_name' class='form-control '>
        </div>

        <div class='form-group'>
            <label for=''>Enter the Address Name</label>
            <input type='text' value='{$student['address']}' name='edit_address' id='edit_address' class='form-control '>
        </div>
        <div class='form-group'>
            <label for=''>Enter the Class Name</label>
            <input type='text' value='{$student['classes']}' name='edit_classes' id='edit_classes' class='form-control '>
        </div>
        <div class='form-group'>
            <label for=''>Enter the Phone Name</label>
            <input type='number' value='{$student['phone']}' name='edit_phone' id='edit_phone' class='form-control '>
        </div>
        <div class='form-group'>
            <label for=''>Enter the Age Name</label>
            <input type='number' value='{$student['age']}' name='edit_age' id='edit_age' class='form-control '>
        </div>
        <div class='form-group'>
            <label for=''>Enter the Gender Name</label>
            <select name='edit_gender'  id='edit_gender' class='form-control'>";
        if ($student['gender'] == 1) {
            $output .= "<option value='1'>Male</option>";
        } else {
            $output .= "<option value='0'>Female</option>";
        }

        $output .= "</select>
        </div>
        <div class='form-group'>
            <label for=''>Enter the Email Name</label>
            <input type='email' value='{$student['email']}' name='edit_email' id='edit_email' class='form-control '>
        </div>";
    }
    echo $output;
}
