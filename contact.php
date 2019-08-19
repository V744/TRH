<?php include('header.php');?>
  <!--- MAIN --->
  <div id="main">
    <p class="section-title"><span class="title custom">Contact Us</span><span class="desc">Send us a message.</span></p>
    <!--- left-content --->
    <div class="contact-left">
      <h5 class="custom">Use the form below to send us your comments</h5>
      <!-- form -->
      <form id="formMail" method="post">
        <fieldset>
          <p>
            <label>NAME:</label>
            <input name="name"  id="name" type="text" />
          </p>
          <p>
            <label>EMAIL:</label>
            <input name="email"  id="email" type="email" />
          </p>
          <p>
            <label>COMMENTS:</label>
            <textarea  name="comments"  id="comments" rows="5" cols="20"></textarea>
          </p>
          <p>
            <input type="submit" value="" name="send" id="send" />
          </p>
        </fieldset>        
      </form>      
      <!-- ENDS form -->
    </div>
    <!-- ENDS left-content -->
    <!-- right-content -->
    <div class="contact-right">
        <h4 class="custom">Reading Books</h4>
        <img src="img/contact/08.jpg" alt="" /></div>      
    </div>
    <!-- ENDS right-content -->
  </div>
  <!-- ENDS MAIN -->
</div>
<!-- ENDS WRAPPER -->
<?php include('footer.php');?>
<?php
    include ('connection.php');
    if(isset($_POST))
    {
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comments']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $comments=$_POST['comments'];
            $sql = "INSERT INTO contact (name,email,comment) VALUES ('$name','$email','$comments')";
            mysqli_query($conn, $sql);
        }
    }    
?>