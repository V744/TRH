<?php include('header.php'); ?>    
<!-- MAIN -->
<div id="main">        
  <!--- more galleries --->
  <div class="one-col">
    <div class="col">
      <h3 class="custom title-1"><center>GALLERY</center></h3>
      <div class="container gallery-img-div">
        <img src="img/slide.jpg" alt=""/>
      </div>
<?php if(!isset($_SESSION['session_id'])) 
    {
?>
      <h5 class="toggle-trigger custom"><a href="#">YOUNG ZONE</a></h5>
      <div class="toggle-container">
        <div class="block">
          <div class="row">
            <div class="col-sm-3">
              <div class="thumbnail">
                <a href="javascript:;" data-toggle="modal" data-target="#myModal">
                  <img src="img/youth/5seconds.jpg" alt="" style="width:100%">
                  <div class="caption">
                    <p>The 5 Seconds Rule</p>
                  </div>
                 </a>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumbnail">
                <a href="javascript:;" data-toggle="modal" data-target="#myModal">
                  <img src="img/youth/1001.jpg" alt="" style="width:100%">
                  <div class="caption">
                    <p>Motivational Quotes</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumbnail">
                <a href="javascript:;" data-toggle="modal" data-target="#myModal">
                  <img src="img/youth/4000.jpg" alt="" style="width:100%">
                  <div class="caption">
                    <p>Essential English Words</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumbnail">
                <a href="javascript:;" data-toggle="modal" data-target="#myModal">
                  <img src="img/youth/100.jpg" alt="" style="width:100%">
                  <div class="caption">
                    <p>Motivate Yourself</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-12 text-right">
              <a href="./young.php"><button class="btn btn-primary">Read More</button></a>
            </div>
          </div>
        </div>
      </div>
      <h5 class="toggle-trigger custom"><a href="#">KIDS CORNER</a></h5>
      <div class="toggle-container">
        <div class="block">
          <div class="row">
            <div class="col-sm-3">
              <div class="thumbnail">
                <a href="javascript:;" data-toggle="modal" data-target="#myModal">
                  <img src="img/kid/bugs_books.jpg" alt="" style="width:100%">
                  <div class="caption">
                    <p>Bugs Books</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumbnail">
                <a href="javascript:;" data-toggle="modal" data-target="#myModal">
                  <img src="img/kid/math_puzzles_book.jpg" alt="" style="width:100%">
                  <div class="caption">
                    <p>Math Puzzles Book</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumbnail">
                <a href="javascript:;" data-toggle="modal" data-target="#myModal">
                  <img src="img/kid/child.jpg" alt="" style="width:100%">
                  <div class="caption">
                    <p>Children Dictionary</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumbnail">
                <a href="javascript:;" data-toggle="modal" data-target="#myModal">
                  <img src="img/kid/speed.jpg" alt="" style="width:100%">
                  <div class="caption">
                    <p>Speed Math</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-12 text-right">
              <a href="./kids.php"><button class="btn btn-primary">Read More</button></a>
            </div>

          </div>
        </div>
      </div>
      <h5 class="toggle-trigger custom"><a href="#">OLD AGE</a></h5>
      <div class="toggle-container">
        <div class="block">
          <div class="row">
            <div class="col-sm-3">
				<div class="thumbnail">
					<a href="javascript:;" data-toggle="modal" data-target="#myModal">
						<img src="img/old/bountiful_bonsai.jpg" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Bountiful Bonsai</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail">
					<a href="javascript:;" data-toggle="modal" data-target="#myModal">
						<img src="img/old/chinese_food.jpg" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Chinese Food</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail">
					<a href="javascript:;" data-toggle="modal" data-target="#myModal">
						<img src="img/old/edible_spots_and_pots.jpg" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Edible Spots and Pots</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail">
					<a href="javascript:;" data-toggle="modal" data-target="#myModal">
						<img src="img/old/encyclopedia_of_african_religion.jpg" alt="Lights" style="width:100%">
						<div class="caption">
							<p>African Religion</p>
						</div>
					</a>
				</div>
			</div>
            <div class="col-sm-12 text-right">
              <a href="./old.php"><button class="btn btn-primary">Read More</button></a>
            </div>
          </div>
        </div>
      </div>
      <?php
        }
        else{
        ?>
      <h5 class="toggle-trigger custom"><a href="#">YOUNG ZONE</a></h5>
      <div class="toggle-container">
        <div class="block">
          <div class="row">
            <div class="col-sm-3">
              <div class="thumbnail">
                <a href="pdf/young/the_5_second_rule.pdf">
                  <img src="img/youth/5seconds.jpg" alt="" style="width:100%">
                  <div class="caption">
                    <p>The 5 Seconds Rule</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumbnail">
                <a href="pdf/young/motivational_quotes.pdf">
                  <img src="img/youth/1001.jpg" alt="" style="width:100%">
                  <div class="caption">
                    <p>Motivational Quotes</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumbnail">
                <a href="pdf/young/essential_english_words.pdf">
                  <img src="img/youth/4000.jpg" alt="" style="width:100%">
                  <div class="caption">
                    <p>Essential English Words</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="thumbnail">
                <a href="pdf/young/motivate_yourself.pdf">
                  <img src="img/youth/100.jpg" alt="" style="width:100%">
                  <div class="caption">
                    <p>Motivate Yourself</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-12 text-right">
              <a href="./young.php"><button class="btn btn-primary">Read More</button></a>
            </div>
          </div>
        </div>
      </div>
      <h5 class="toggle-trigger custom"><a href="#">KIDS CORNER</a></h5>
      <div class="toggle-container">
        <div class="block">
          <div class="row">
            <div class="col-sm-3">
				<div class="thumbnail">
					<a href="pdf/kid/bugs_books.pdf">
						<img src="img/kid/bugs_books.jpg" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Bugs Books</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail">
					<a href="pdf/kid/math_puzzles_book.pdf">
						<img src="img/kid/math_puzzles_book.jpg" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Math Puzzles Book</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail">
					<a href="pdf/kid/children_dictionary.pdf">
						<img src="img/kid/child.jpg" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Children Dictionary</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail">
					<a href="pdf/kid/speed_math_for_kids.pdf">
						<img src="img/kid/speed.jpg" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Speed Math</p>
						</div>
					</a>
				</div>
			</div>
            <div class="col-sm-12 text-right">
              <a href="./kids.php"><button class="btn btn-primary">Read More</button></a>
            </div>
          </div>
        </div>
      </div>
      <h5 class="toggle-trigger custom"><a href="#">OLD AGE</a></h5>
      <div class="toggle-container">
        <div class="block">
          <div class="row">
            <div class="col-sm-3">
				<div class="thumbnail">
					<a href="pdf/old/bountiful_bonsai.pdf">
						<img src="img/old/bountiful_bonsai.jpg" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Bountiful Bonsai</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail">
					<a href="pdf/old/chinese_food.pdf">
						<img src="img/old/chinese_food.jpg" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Chinese Food</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail">
					<a href="pdf/old/edible_spots_and_pots.pdf">
						<img src="img/old/edible_spots_and_pots.jpg" alt="Lights" style="width:100%">
						<div class="caption">
							<p>Edible Spots and Pots</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="thumbnail">
					<a href="pdf/old/encyclopedia_of_african_religion.pdf">
						<img src="img/old/encyclopedia_of_african_religion.jpg" alt="Lights" style="width:100%">
						<div class="caption">
							<p>African Religion</p>
						</div>
					</a>
				</div>
			</div>
            <div class="col-sm-12 text-right">
              <a href="./old.php"><button class="btn btn-primary">Read More</button></a>
            </div>
          </div>
        </div>
      </div>
    <?php 
        } ?> 
    </div>
  </div>
  <!-- ENDS more galleries -->
</div>
<!-- ENDS MAIN -->
</div>
<!-- ENDS WRAPPER -->
<?php include('footer.php'); ?>