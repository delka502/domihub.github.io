<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DomiHub</title>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />

	<?php ?>
	<?php include 'header.php' ?>
	<?php
	include 'db_connect.php';
	$qry = $conn->query("SELECT * from site_settings limit 1");
	if($qry->num_rows > 0){
		foreach($qry->fetch_array() as $k => $val){
			$meta[$k] = $val;
		}
	}
	 ?>

  
  </head>

  <body>
    
    <header class="container">

      <?php include 'topbar.php' ?>
    </header>

    <main id="hero" class="main">
      <!-- --- section two --- -->

      <section id="products" class="section section-two container">

        <div class="s-two-upper-info">
          <br />
          
          <p class="s-two-definition s-definition" />
        </div>
        <div class="s-two-products"></div>
        <div class="container">
       
	    <?php
	    	$qry = $qry = $conn->query("SELECT p.*,c.name as category from posts p inner join category c on c.id = p.category_id where p.status = 1 order by date(p.date_published) desc limit 5");
	    	while($row=$qry->fetch_assoc()){
	    ?>
	    <div class="card col-md-12 list-items"  data-id="<?php echo $row['id'] ?>">
	    	<div class="card-body">
	    		<div class="row">
	    		<div class="col-md-4">
	    			<center><img src="assets/img/<?php echo $row['img_path'] ?>" alt="" class='col-sm-10'></center>
	    		</div>
	    		<div class="col-md-8 truncate">
	    			<h3><b><?php echo $row['title'] ?></b></h3>
	    			<p class="text-truncate">
	    				<?php echo html_entity_decode($row['post']) ?>
	    			</p>

	    		</div>
	    		</div>

	    	</div>
	    </div>
		<?php } ?>
		</div>
        




   
	    			</p>

	    		</div>
	    		</div>

	    	</div>
	    </div>

  

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>





      </section>
    </main>
    
  </body>
  <script>
  	$(document).ready(function(){
  		$('.list-items').click(function(){
  			location.replace('indexz.php?page=preview_post&id='+$(this).attr('data-id'))
  		})
  	})
  </script>
</html>
