<?php

include "Database.php";
require '../vendor/autoload.php';
$obj = new Database();

use Dompdf\Dompdf;

if (isset($_POST['month'])) {
    $month = $_POST['month'];

    $join = "students ON book_issues.issue_name=students.id
    JOIN books ON book_issues.issue_book=books.id ";
    $obj->select('book_issues', "book_issues.id, books.book_name,students.student_name,students.email,students.phone,book_issues.return_date,book_issues.issue_date", $join, "DATE_FORMAT(issue_date,'%Y-%m')='{$month}'", null, null);
    $books = $obj->getResult();
    $output = "";
    $output .= "
    <table class='table table-bordered'>
    <thead>
        <tr>
            <th>S.no</th>
            <th>Student Name</th>
            <th>Book Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Issue Date</th>
            <th>Return date</th>
        </tr>
    </thead>";
    foreach ($books as $book) {
        $output .= "<tbody>
        <tr>
        <td>{$book['id']}</td>
        <td>{$book['student_name']}</td>
        <td>{$book['book_name']}</td>
        <td>{$book['phone']}</td>
        <td>{$book['email']}</td>
        <td>{$book['issue_date']}</td>
        <td>{$book['return_date']}</td>
        </tr>
        </tbody>";
    }
    $output .= "
    </table>";

    $dompdf = new Dompdf();
    $dompdf->loadHtml($output);

    $dompdf->setPaper('A4', 'landscape');

    $dompdf->render();
    $dompdf->stream();

    $pdf = $dompdf->output();
    file_put_contents(rand() . "-month-pdf.pdf", $pdf);
}
