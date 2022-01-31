<?php 
include 'Database.php';

$obj = new Database();

if(isset($_POST['name']) || isset($_POST['address']) ||isset($_POST['classes']) || isset($_POST['phone']) || isset($_POST['age']) || isset($_POST['gender']) || isset($_POST['email']) ){ 

    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $age=$_POST["age"];
    $class=$_POST["classes"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];

    $data=[  
        'student_name'=>$name,
        'email'=>$email,
        'phone'=>$phone,
        'address'=>$address,
        'age'=>$age,
        'classes'=>$class,
        'gender'=>$gender,
    ];

    $obj->insert('students',$data);
    $data= $obj->getResult();
    if($data[0] == 1){
        echo 1;
    }else{  
        echo 0;
    }
}



?>