<?php

include 'Database.php';
$obj=new Database();

$join="students ON book_issues.issue_name=students.id
JOIN books ON book_issues.issue_book=books.id";
$obj->select('book_issues', 'book_issues.id,book_issues.issue_name,book_issues.issue_book,book_issues.issue_date,book_issues.return_date,book_issues.issue_status,book_issues.return_days,students.student_name,students.phone,students.email,books.book_name',$join,null,'id DESC',null);
$books=$obj->getResult();
$output = "";
foreach($books as $book){  
    $output .="
    <tr>
    <td>{$book['id']}</td>
    <td>{$book['student_name']}</td>
    <td>{$book['book_name']}</td>
    <td>{$book['phone']}</td>
    <td>{$book['email']}</td>
    <td>".date('d M,Y',strtotime($book['issue_date']))."</td>
    <td>".date('d M,Y',strtotime($book['return_date']))."</td>";
    if($book['issue_status'] == 'Y'){ 
        $output .= "<td><span class='text-success'>Returned</span></td>";
    }else{ 
        $output .= "<td><span class='text-danger'>Issue</span></td>";
    }
   $output .="<td><button data-id='{$book['id']}' id='edit-issue-book' class='btn btn-success' data-toggle='modal' data-target='#update-issue-book'>Edit</button></td>
    <td><button data-id='{$book['id']}' id='delete-issue-book' class='btn btn-danger'>Delete</button></td>
    </tr>
    ";
}
echo $output;

?>