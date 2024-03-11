<?php
  session_start();
  require 'dbcon.php';
 ?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Book details</title>
  </head>
  <body>
    
      <div class="container mt-4">

      <?php include('message.php'); ?>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Book Details 
                  <a href="book-add.php" class="btn btn-primary float-end">Add books</a>
                </h4>
              </div>
              <div class="card-body">

                <table class="table table-border table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Book_Name</th>
                      <th>Title</th>
                      <th>Author</th>
                      <th>Publication_year</th>
                      <th>genre</th>
                      <th>Summary</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $query = "SELECT * FROM book";
                      $query_run = mysqli_query($conn, $query); 

                      if(mysqli_num_rows($query_run) > 0)
                      {
                          foreach($query_run as $book)
                          {
                              ?>
                              <tr>
                                  <td><?= $book['id']; ?></td>
                                  <td><?= $book['name']; ?></td>
                                  <td><?= $book['title']; ?></td>
                                  <td><?= $book['author']; ?></td>
                                  <td><?= $book['publicationyear']; ?></td>
                                  <td><?= $book['gener']; ?></td>
                                  <td><?= $book['summary']; ?></td>
                                  <td>Action</td>
                                      <td>
                                        <a href="book-view.php?id=<?= $book['id']; ?>" class="btn btn-info btn-sm">View</a>
                                        <a href="book-edit.php?id=<?= $book['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="code.php?id=<?= $book['id']; ?>" class="btn btn-danger btn-sm">Delete</a>  
                                      </td>
                              </tr>
                              <?php
                          }
                      }
                      else
                      {
                        echo "<h5> No Record Found </h5>";
                      }
                    ?>
                    <tr>
                      <td>1</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </body>
</html>