<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>WOW BANK</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
      <div class="container-fluid">
            <div class="row intro py-1" style="background-color : #7d8892;">
              
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank1.png" class="img-fluid pt-2" style="height:50vh;">
              </div>
            </div>
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.jpg" class="img-thumbnail">
                    <br>
                    <a href="createuser.php"><button style="background-color :green;" style="border-radius:0%">Create a New User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/ruser.jpg" class="img-thumbnail">
                    <br>
                    <a href="removeuser.php"><button style="background-color :red;" style="border-radius:0%">View / Delete Users </button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/trans.png" class="img-thumbnail">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-thumbnail">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #1A374D;">Transaction History</button></a>
                  </div>
                  
            </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>