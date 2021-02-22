<?php 

    //Ass 6
    $developers=[
        [
          'name' => 'ahmed hamdy',
           'job' => 'front-end',
          'experience' => 3
         ],
      
         [
             'name' => 'mohammed shaker',
             'job' => 'back-end',
             'experience' => 2
         ],
      
         [
             'name' => 'ali hasan',
             'job' => 'full-stack',
             'experience' => 4
         ],
     ];
     

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

    <!-- Ass 6 -->
    <div class="container mt-5">
    <div class="row">
    <?php foreach($developers as $dev){?>
    <div class="col-lg-3 m-2">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $dev['name'];?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $dev['job'];?></h6>
                <p class="card-text"><?php echo $dev['experience']." years of experience";?></p>
            </div>
        </div>
    </div>
    <?php }?>
    </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>