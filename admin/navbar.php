<style>
	
</style>

<nav id="sidebar" class='mx-lt-5 bg-light' style="background-color: #e3f2fd !important;">
	<div class="container-fluid">
		
		<div class="sidebar-list">
				<a href="indexz.php?page=category" class="nav-item nav-category"><span class='icon-field'><i class="fa fa-list"></i></span> Category</a>
				<a href="indexz.php?page=posts" class="nav-item nav-posts"><span class='icon-field'><i class="fa fa-blog"></i></span> Posts</a>
		</div>

	</div>
</nav>
<script>
	$('.nav-<?php echo $_GET['page'] ?>').addClass('active')
</script>