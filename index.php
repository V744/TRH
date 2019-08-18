<?php include('header.php'); ?>
<!-- MAIN -->
<div id="main">
	<!-- slideshow -->
	<div id="slideshow">
		<ul id="slides">
			<li><img src="img/slides/book.jpg" alt="" /></li>
			<li><img src="img/slides/book1.jpg" alt="" /></li>
			<li><img src="img/slides/book2.jpg" alt="" /></li>
		</ul>
		<a href="#"><img src="img/prev-slide.png" alt="" id="prev" /></a> <a href="#"><img src="img/next-slide.png" alt="" id="next" /></a> </div>
		<!-- ENDS slideshow -->
		<!-- blocks -->
		<div class="holder">
			<div class="block">
				<div class="thumb-holder">
					<a href="gallery.php"><img src="img/kid_book.png" alt="" class="thumb" /> </a>
				</div>
				<h2 class="custom color2"><center>KIDS CORNER</center></h2>

				<p class="thumb-text"><center>A book library of kid's books from  and authors from around the world! Whether your child is just learning their ABCs or learning another language after school, they can travel further with The Reading House.</center>

				</p>
				<p><a href="kids.php" class="more">More</a></p>
			</div>
			<div class="block">
				<div class="thumb-holder"> 
					<a href="gallery.php"><img src="img/block2.jpg" alt="" class="thumb" /> </a>
				</div>
				<h2 class="custom color2"><center>YOUNG ZONE</center></h2>
				<p class="thumb-text"><center>Information  even can be shared by colleage students much more easily. The Reading House encourage youth to visit new worlds, discover new points of view, and keep building upon their knowledge
				</center></p>
				<p><a href="young.php" class="more">More</a></p>
			</div>
			<div class="block last">
				<div class="thumb-holder"> 
					<a href="gallery.php"><img src="img/old1.png" alt="" class="thumb" /> </a>  -->
				</div>
				<h2 class="custom color2"><center>OLD AGE</center></h2>
				
				<p class="thumb-text"><center>The Reading House is also open to all senior citizens.Education is the &nbsp;best provision for the old age journey. They can easily access the information they need and quikly download books to read.</center> </p> 
				<p><a href="old.php" class="more">More</a></p>
			</div>
			<!-- <div  class="block"> -->
				<!-- <div class="thumb-holder"> -->
					<div class="counter">
						<?php


						$db_host = "localhost";
						$db_user = "root";
						$db_pass = "";
						$db_name = "readingbooks";

	//connecting to database
						$connection = mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("could not connect ");
						mysqli_select_db($connection, $db_name) or  die("no database");
						//echo "successful";

						mysqli_query($connection, "UPDATE view_count SET views = views + 1  WHERE id = '1' ");

//$sql = "UPDATE view_count SET 'views'='views'+1 WHERE id = '1' ";
						$sql = mysqli_query($connection, "SELECT * FROM  view_count WHERE id = 1 ") ;
						while ($row = mysqli_fetch_array($sql)) {
							$id = $row["id"] ;
							$pagename = $row["pagename"];
							$views = $row["views"];

// 	# code...
						};



						?>
						<p><center class="custom color2" style="font-size: 70px; background-color: #FAD94D; padding-top: 10px;">
							<?php
							print $views; 

							?> 

						</p></center>

						
					</div>
					<h2 class="custom color2"><center>VIEWS	 COUNTER</center></h2>


					<!-- </div> -->
					<!-- </div> -->
					<!-- ENDS blocks -->
				</div>
				<!-- ENDS MAIN -->
			</div>
			<!-- ENDS WRAPPER -->
			<?php include('footer.php');?>