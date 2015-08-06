<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Exercise</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">

      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="#php_exercise_1" aria-controls="php_exercise_1" role="tab" data-toggle="tab">PHP</a></li>
        <li role="presentation"><a href="#php_exercise_2" aria-controls="php_exercise_2" role="tab" data-toggle="tab">Array</a></li>
        <li role="presentation" class="active" ><a href="#php_exercise_3" aria-controls="php_exercise_3" role="tab" data-toggle="tab">Other</a></li>
      </ul>

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane" id="php_exercise_1"><?php include 'php_exercise_1.php'; ?></div>
        <div role="tabpanel" class="tab-pane" id="php_exercise_2"><?php include 'php_exercise_2.php'; ?></div>
        <div role="tabpanel" class="tab-pane active" id="php_exercise_3"><?php include 'php_exercise_3.php'; ?></div>
      </div>



    </div>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>