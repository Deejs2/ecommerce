<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
</div>

<?php
echo '<h4>Hi, '.$_SESSION['email'].'!</h4>'.'<h2>Welcome To Admin Panel</h2>';
?>

<main>

 <?php include('carousel/list.php'); ?>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    
    <?php include('page/list.php'); ?>
  

    <!-- START THE FEATURETTES -->

    

    
    <hr class="featurette-divider">

    
    <?php include('article/list.php'); ?>
    <hr class="featurette-divider">
  </div>


</main>