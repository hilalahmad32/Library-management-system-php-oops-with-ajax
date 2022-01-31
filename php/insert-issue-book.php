<?php

include 'Database.php';
$obj=new Database();

if(isset($_POST['book']) || isset($_POST['student'])){
    $book=$_POST['book'];
    $student=$_POST['student'];

    $obj->select('settings','return_days',null,null,null,null);
    $datas = $obj->getResult();
    $return_days=0;
    foreach($datas as $data){
        $return_days =$data['return_days'];
    }

    $obj->insert('book_issues',[
        'issue_name'=>$student,
        'issue_book'=>$book,
        'issue_date'=>date('Y-m-d'),
        'return_date'=>date('Y-m-d',strtotime("+".$return_days." days")),
        'issue_status'=>'N',
    ]);

    $data=$obj->getResult();
    if($data[0] == 1){
        $obj->update('books',['book_status' =>'N'],"id='{$book}'");
        echo 1;
    }else{
        echo 0;
    }
}



?>