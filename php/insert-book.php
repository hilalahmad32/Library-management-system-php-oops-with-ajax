<?php

include 'Database.php';
$obj=new Database();
if(isset($_POST['book_name']) || isset($_POST['book_auther']) || isset($_POST['book_publisher']) || isset($_POST['book_category']) ){ 
    $book_name = $_POST['book_name'];
    $book_auther = $_POST['book_auther'];
    $book_category = $_POST['book_category'];
    $book_publisher = $_POST['book_publisher'];

    $obj->insert('books',['book_name'=>$book_name,'book_auther'=>$book_auther,'book_category'=>$book_category,'book_publisher'=>$book_publisher,'book_status'=>'Y']);
    $data= $obj->getResult();
    print_r($data);
    if($data[0] == 1){  
        echo 1;
    }else{  
        echo 0;
    }
}



?>