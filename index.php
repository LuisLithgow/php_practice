<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PHP Practice</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div class="container">

    <?php
      $person1 = "Jax";
      $person2 = "Alice";
      $person3 = "Rhonda";

      $people = array("Jax", "Alice", "Rhonda" );
      // print_r($people);
      $numbers = array(5, 3, 7 );

      $sum = 0;
      foreach ($numbers as $number) {
        $sum = $sum + $number;
      }
      echo "the sum of the numbers is " . $sum;



     ?>

    <form action="process.php" method="post">
      Enter your name <input type="text" name="theName">
      <input type="submit" class="btn btn-default" name="">
    </form>








  </div>
</body>
</html>
