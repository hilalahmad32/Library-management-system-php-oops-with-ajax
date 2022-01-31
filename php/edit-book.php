<?php

include 'Database.php';
$obj = new Database();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $obj->edit('books', '*',null, "id='{$id}'");
    $books = $obj->getResult();
    $output = "";
    foreach ($books as $book) {
        $output .= " 
        <div class='form-group'>
        <label for=''>Enter the book Name</label>
        <input type='hidden' value='{$book['id']}' name='id' id='id' class='form-control form-contorl-lg'>
        <input type='text' value='{$book['book_name']}' name='edit_book_name' id='edit_book_name' class='form-control form-contorl-lg'>
         </div>";
        $output .= "<div class='form-group'>
        <label for=''>Enter the Book Category</label>";
        $obj->select('categorys', '*', null, null, 'id DESC', null);
        $categorys = $obj->getResult();
        $output .= "<select name='edit_book_category' class='form-control' id='edit_book_category'>
        <option value='' disabled selected>Select Category</option>";
        foreach ($categorys as $category) {
            if($category['id'] == $book['book_category']){  
                $select="selected";
            }else{  
                $select="";
            }
            $output .= "<option {$select} value='{$category['id']}'>{$category['category_name']}</option>";
        }
        $output .= "</select>";
        $output .= "</div>
        <div class='form-group'>
            <label for=''>Enter the Book Publisher</label>";
        $obj->select('publishers', '*', null, null, 'id DESC',  null);
        $publishers = $obj->getResult();
        $output .= " <select name='edit_book_publisher' class='form-control' id='edit_book_publisher'>
                <option value='' disabled selected>Select Publisher</option>";
        foreach ($publishers as $publisher) {
            if($publisher['id'] == $book['book_publisher']){  
                $select="selected";
            }else{  
                $select="";
            }
            $output .= "<option {$select} value='{$publisher['id']}'>{$publisher['publisher_name']}</option>";
        }
        $output .= "</select>";
        $output .= "</div>
                <div class='form-group'>
                    <label for=''>Enter the Book Author</label>";
        $obj->select('authers', '*', null, null,'id DESC',  null);
        $authers = $obj->getResult();
        $output .= "<select name='edit_book_auther' class='form-control ' id='edit_book_auther'>
                        <option value='' disabled selected>Select Author</option>";
        foreach ($authers as $auther) {
            if($auther['id'] == $book['book_auther']){  
                $select="selected";
            }else{  
                $select="";
            }
            $output .= "  <option {$select} value='{$auther['id']}'>{$auther['auther_name']}</option>";
        }
        $output .= "  </select>
                </div>";
        echo $output;
    }
}