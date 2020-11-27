
<?php

include 'data.php';
$id=$_GET['id'];?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <title><?php echo $title[$id] ;  ?></title>
</head>
<body>
<?php include 'header.php';?>


<main class="bg-light">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><strong> Welcome to My Shop</strong></h1>
            <p class="lead">Buy new cell phones at a cheap price!</p>
        </div>
    </div>
    <div class="container py-5">
    <?php

    
    //show data
    
    if (!isset($_GET['id'])) {
       echo '<button type="button" class="btn btn-danger btn-lg btn-block"> <a href="MyShop.php" style="text-decoration:none;color:#ffffff;">Something went WRONG <br > click to Go Back </a> </button>';
    } else {
        
        echo'
        <div class="card mb-3" >
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src='.$photo[$id].' class="card-img" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h1 class="card-title">'.$title[$id].'</h1>
              <p class="card-text">' . $description[$id] . '</p>
              
            </div>
          </div>
        </div>
      </div>
        
        
        
        ';
       
       
    }
    
    ?>
    </div>


</main>
    
   
   <?php include 'footer.php';?>

    
</body>
</html>