<?php
  require_once('functions.php'); // include functions
  header("Refresh: 61;url=''"); // page will reload in 61 seconds, destroying the identity
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Random Identity Generator. Generates random European identites.">
  <meta name="author" content="psztrnk">
  <meta name="keyword" content="random, identity, generator">

  <title>RIG: Random Identity Generator</title>

  <!-- Bootstrap CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles -->
  <link href="bootstrap/css/supplement.css" rel="stylesheet">
  <!-- countdown script -->
  <script>
    var count=61;
    var counter=setInterval(timer, 1000);

    function timer() {
      count=count-1;
      if (count <= 0) {
        clearInterval(counter);
        return;
      }
    document.getElementById("timer").innerHTML=count;
    }
  </script>
</head>

<body>
  <div class="container">
    <div class="row">
      <h1>RIG: Random Identity Generator</h1>
    </div>
    <section class="identity">
      <div class="row">
        <div class="alert alert-secondary" role="alert">
          <?php constructIdentity(); // include the actual identity ?>
        </div>
        <p><small><strong>* This identity will self-destruct in <code><span id="timer"></span></code> seconds.<strong></small></p>
      </div>
    </section>
    <div class="row buttons">
      <form method="post" action="destroy.php">
        <input class="btn btn-primary" type="submit" name="regenerate" value="Instantly generate a new one" />
      </form>
    </div>
    <div class="row code"><a href="https://github.com/psztrnk/rig/" class="infoLink" target="_blank">Code on Github</a></div>
  </div>
</body>
</html>
