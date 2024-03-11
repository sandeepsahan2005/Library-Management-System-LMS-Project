<?php
session_start();
require 'dbcon.php';
echo "gvhgvhgv";



if(isset($_GET['id']))
{
  $book_id = mysqli_real_escape_string($conn, $_GET['id']);

  $query = "DELETE FROM book WHERE id='$book_id' ";
  $query_run = mysqli_query($conn, $query);

  if($query_run)
  {
    $_SESSION['message'] = "Book delete Successfully";
    header("Location: index.php");
    exit(0);
  }
  else
  {
    $_SESSION['message'] = "Book Unot delete";
    header("Location: index.php");
    exit(0);
  }
}

if(isset($_POST['update_book']))
{
  $book_id = $_POST['book_id'];
  $name = $_POST['name'];
  $title = $_POST['title'];  
  $author = $_POST['author'];  
  $publicationyear = $_POST['publicationyear'];  
  $gener = $_POST['gener'];  
  $summary = $_POST['summary']; 

  $query = "UPDATE book SET  name='$name', title='$title', author='$author', publicationyear='$publicationyear', gener='$gener',summary='$summary'
                   WHERE id='$book_id'";

  $query_run = mysqli_query($conn, $query);  
  
  if($query_run)
  {
    $_SESSION['message'] = "Book Updated Successfully";
    header("Location: index.php");
    exit(0);
  }
  else
  {
    $_SESSION['message'] = "Book Not Updated";
    header("Location: index.php");
    exit(0);
  }
}

if(isset($_POST['save_book']))
{
  $name = $_POST['name'];
  $title = $_POST['title'];  
  $author = $_POST['author'];  
  $publicationyear = $_POST['publicationyear'];  
  $gener = $_POST['gener'];  
  $summary = $_POST['summary'];  


  $query = "INSERT INTO book (name,title,author,publicationyear,gener,summary) VALUES 
  ('$name','$title','$author','$publicationyear','$gener','$summary')";

  $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    $_SESSION['message'] = "Book Add Successfully";
    header("Location: book-add.php");
    exit(0);
  }
  else
  {
    $_SESSION['message'] = "Book Not Add ";
    header("Location: book-add.php");
    exit(0);
  }
}
?>