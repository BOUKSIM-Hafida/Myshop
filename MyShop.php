<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Myshop</title>
</head>
<body>
    <!-------------------------------------------------------- navbar ---------------------------------------------------------->
<?php include 'header.php';?>
    <!----------------------------------------------------------- Welcome --------------------------------------------------------->

<main class="bg-light">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><strong> Welcome to My Shop</strong></h1>
            <p class="lead">Buy new cell phones at a cheap price!</p>
        </div>
    </div>
  

<!--------------------------------------------------------------- Products ----------------------------------------------------------->
<div class="container py-5">
			<div class="row">	


                <?php 
                    include 'data.php';



                    for ($i=0; $i <count($title); $i++) {
                   
                    echo'<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="card mb-3">
                    <img src='.$photo[$i].' class="card-img-top" >
                    <div class="card-body">
                    <h5 class="card-title">'. $title[$i] .'</h5>
                    <p class="card-text">$' . $price[$i] .'</p>
                    <a href="details.php?id='.$i.'" class="btn btn-success">Details</a>
                    </div>
                  </div></div>';
                    }

                ?>
                </div>
</div>

</main>
<?php include'footer.php';?>
    
    
</body>
</html>