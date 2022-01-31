<?php

include 'Database.php';
$obj=new Database();

$join="categorys ON books.book_category=categorys.id
JOIN publishers ON books.book_publisher=publishers.id
JOIN authers ON books.book_auther=authers.id";
$obj->select('books', 'books.id,books.book_name,books.book_publisher,books.book_category,books.book_auther,books.book_status,categorys.category_name,publishers.publisher_name,authers.auther_name',$join,null,'id DESC',null);
$books=$obj->getResult();
$output = "";
foreach($books as $book){  
    $output .="
    <tr>
    <td>{$book['id']}</td>
    <td>{$book['book_name']}</td>
    <td>{$book['publisher_name']}</td>
    <td>{$book['category_name']}</td>
    <td>{$book['auther_name']}</td>";
    if($book['book_status'] == 'Y'){ 
        $output .= "<td><span class='text-success'>Available</span></td>";
    }else{ 
        $output .= "<td><span class='text-danger'>Issue</span></td>";
    }
   $output .="<td><button data-id='{$book['id']}' id='edit-book' class='btn btn-success' data-toggle='modal' data-target='#update-book'>Edit</button></td>
    <td><button data-id='{$book['id']}' id='delete-book' class='btn btn-danger'>Delete</button></td>
    </tr>
    ";
}
echo $output;

?>