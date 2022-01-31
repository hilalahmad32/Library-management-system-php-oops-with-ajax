<?php

include 'Database.php';
$obj = new Database();
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $obj->select("settings", "fine", null, null, null, null);
    $fines = $obj->getResult();
    $totalFine = 0;
    foreach ($fines as $fine) {
        $totalFine = $fine['fine'];
    }
    $join = "students ON book_issues.issue_name=students.id
    JOIN books ON book_issues.issue_book=books.id";
    $obj->edit('book_issues', 'book_issues.id,book_issues.issue_name,book_issues.issue_book,book_issues.issue_date,book_issues.return_date,book_issues.issue_status,book_issues.return_days,students.student_name,students.phone,students.email,books.book_name,books.id as book_id', $join, "book_issues.id={$id}");
    $books = $obj->getResult();
    $output = "";
    foreach ($books as $book) {
        $output .= "
        <input type='hidden' id='id' value='{$book['id']}'>
        <input type='hidden' id='book_id' value='{$book['book_id']}'>
    <div class='d-flex justify-content-between align-items-center'>
                  <h6>Student Name </h6> <span>:</span> <h5>{$book['student_name']}</h5>
              </div>
              <hr>
              <div class='d-flex justify-content-between align-items-center'>
                  <h6>Book Name </h6> <span>:</span> <h5>{$book['book_name']}</h5>
              </div>
              <hr>
              <div class='d-flex justify-content-between align-items-center'>
                  <h6>Phone</h6> <span>:</span> <h5>{$book['phone']}</h5>
              </div>
              <hr>
              <div class='d-flex justify-content-between align-items-center'>
                  <h6>Email</h6> <span>:</span> <h5>{$book['email']}</h5>
              </div>
              <hr>
              <div class='d-flex justify-content-between align-items-center'>
                  <h6>Issue Date</h6> <span>:</span> <h5>" . date('d M, Y', strtotime($book['issue_date'])) . "</h5>
              </div>
              <hr>
              <div class='d-flex justify-content-between align-items-center'>
                  <h6>Return Date</h6> <span>:</span> <h5>" . date('d M, Y', strtotime($book['issue_date'])) . "</h5>
              </div>
              <hr>
              <div class='d-flex justify-content-between align-items-center'>";
        if ($book['issue_status'] == 'Y') {
            $output .= " <h6>Status</h6> <span>:</span> <h5>Returned</h5>";
            $output .= " <h6>Returned On </h6> <span>:</span> <h5>" . date('d M, Y', strtotime($book['return_days'])) . "</h5>";
        } else {
            if (date('Y-m-d') > $book['return_date']) {
                $output .= " <h6>Fine</h6> <span>:</span> <h5>" .
                    $date1 = date_create(date('Y-m-d'));
                $date2 = date_create($book['return_date']);
                $diff = date_diff($date1, $date2);
                $days = $diff->format('$a');
                'Rs ' . ($totalFine * $days)
                    . "</h5>";
            }
        }
        $output .= "</div>";
        if ($book['issue_status'] == 'N') {
            $output .= "<button class='btn btn-danger' id='updateReturnBook'>Return Book</button>
              <hr>";
        }
    }
    echo $output;
}
