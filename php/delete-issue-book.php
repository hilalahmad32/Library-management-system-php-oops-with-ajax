<?php

include 'Database.php';

$obj=new Database();

if(isset($_POST['id'])){  
    $id=$_POST['id'];
    $obj->delete('book_issues',"id='{$id}'");
    $authers=$obj->getResult();

    if($authers[0] == 1){  
        echo 1;
    }else{  
        echo 0;
    }
}



?>