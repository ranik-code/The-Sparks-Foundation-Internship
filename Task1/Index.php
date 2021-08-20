<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <link rel="stylesheet" type="text/css" href="css/NavigationBar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'NavigationBar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5"><br><br><br>
                  <h3>Welcome to</h3>
                  <h1><B>SPARKS BANK</B></h1>
                  <h4>Here for you..</h4>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center"> 
                <img src="Images/bank-p.png" class="img-fluid pt-2" height="50%" width="50%"> 
              </div>
              <!-- <div class="column image"><img src="images/bank4.jpg"  /></div> -->
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="Images/user2.png" class="img-fluid" height="90%" width="90%">
                    <br>
                    <a href="CreateUser.php"><button>Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="Images/rk-p.png" class="img-fluid" height="50%" width="50%">
                    <br>
                    <a href="TransferMoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="Images/trans1.png" class="img-fluid" height="50%" width="50%">
                    <br>
                    <a href="TransactionHistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021 Made by <b>RANI KUMRAWAT</b> <br>The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

