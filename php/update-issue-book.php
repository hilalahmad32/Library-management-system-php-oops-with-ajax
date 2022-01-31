<?php

include 'Database.php';

$obj=new Database();
if(isset($_POST['id'])){
    $issue_id=$_POST['id'];
    $book_id=$_POST['book_id'];
    $date=date('Y-m-d');

    $obj->update('book_issues',['issue_status'=>'Y','return_days'=>$date],"id='{$issue_id}'");
    $obj->update('books',['book_status'=>'Y'],"id='{$book_id}'");

    $data=$obj->getResult();

    if($data[0] == 1){
        echo 1;
    }else{
        echo 0;
    }
}


?>