
<?php 
include 'db_connect.php';

?>
  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

     <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="blogg.php">
        <p class="">BLOG INFORMATION</p>
        </li> 
          <li class="nav-home"><a href="index.html">Home</a></li>
          <li class="drop-down"><a href="javascript:void(0)">Category</a>
            <ul>
              <?php
              $qry = $conn->query("SELECT * from category where status = 1"); 
            while($row=$qry->fetch_assoc()){
               ?>
                <li><a href="indexz.php?page=category&id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></li>
              <?php } ?>
            </ul>
          </li>

        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->
  <script>
  	$('.nav-<?php echo !isset($_GET['page']) ? 'home': $_GET['page'] ?>').addClass('active');
  </script>