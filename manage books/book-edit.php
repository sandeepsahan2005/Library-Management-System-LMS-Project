
<?php
session_start();
require 'dbcon.php'
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Book Edit</title>
  </head>
  <body>
    

     <div class="container mt-5">


        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <h4>Book Edit
                         <a href="index.php" class="btn btn-danger float-end">Back</a>
                       </h4> 
                    </div>
                    <div class="card-body">
                        
                        <?php
                        if(isset($_GET['id']))
                        {
                           $book_id = mysqli_real_escape_string($conn, $_GET['id']);
                           $query = "SELECT * FROM book WHERE id='$book_id' ";
                           $query_run = mysqli_query($conn, $query);

                           if(mysqli_num_rows($query_run) > 0 )
                           {
                                $book = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="book_id" value="<?= $book['id']; ?>">
                                    <div class="mb-3">
                                        <label>Book_Name</label>
                                        <input type="text" name="name" value="<?=$book['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Title</label>
                                        <input type="text" name="title"  value="<?=$book['title'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Author</label>
                                        <input type="text" name="author"  value="<?=$book['author'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Publication_year</label>
                                        <input type="text" name="publicationyear"  value="<?=$book['publicationyear'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>genre</label>
                                        <input type="text" name="gener"  value="<?=$book['gener'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Summary</label>
                                        <input type="text" name="summary"  value="<?=$book['summary'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                            <button type="submit" name="update_book" class="btn btn-primary">Update Book</button>
                                    </div>
                                </form>

                                <?php
                           }
                           else
                           {
                                echo "<h4>No Such Id Found</h4>";
                           }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
     </div>
     
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </body>
</html>