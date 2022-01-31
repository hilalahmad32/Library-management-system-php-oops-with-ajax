<?php

include 'Database.php';
$obj=new Database();
if(isset($_POST['id']) || isset($_POST['book_name']) || isset($_POST['book_auther']) || isset($_POST['book_publisher']) || isset($_POST['book_category']) ){ 
    $id = $_POST['id'];
    $book_name = $_POST['book_name'];
    $book_auther = $_POST['book_auther'];
    $book_category = $_POST['book_category'];
    $book_publisher = $_POST['book_publisher'];

    $obj->update('books',['book_name'=>$book_name,'book_auther'=>$book_auther,'book_category'=>$book_category,'book_publisher'=>$book_publisher],"id=${id}");
    $data= $obj->getResult();
    if($data[0] == 1){  
        echo 1;
    }else{  
        echo 0;
    }
}



?>