
<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Book Add</title>
  </head>
  <body>
    

     <div class="container mt-5">


        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <h4>Add book
                         <a href="index.php" class="btn btn-danger float-end">Back</a>
                       </h4> 
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                           <div class="mb-3">
                             <label>Book_Name</label>
                             <input type="text" name="name" class="form-control">
                           </div>
                           <div class="mb-3">
                             <label>Title</label>
                             <input type="text" name="title" class="form-control">
                           </div>
                           <div class="mb-3">
                             <label>Author</label>
                             <input type="text" name="author" class="form-control">
                           </div>
                           <div class="mb-3">
                             <label>Publication_year</label>
                             <input type="text" name="publicationyear" class="form-control">
                           </div>
                           <div class="mb-3">
                             <label>genre</label>
                             <input type="text" name="gener" class="form-control">
                           </div>
                           <div class="mb-3">
                             <label>Summary</label>
                             <input type="text" name="summary" class="form-control">
                           </div>
                           <div class="mb-3">
                                <button type="submit" name="save_book" class="btn btn-primary">Save Book</button>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>
     
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </body>
</html>