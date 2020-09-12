 <?php 
 include "header.php";
  ?>
 
	<title>Contact Us</title>

<div class="container-fluid">
			<div class="container-box container-box-lg info-boxes" style="padding: 20px width=1305;">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.1170476327407!2d67.06242701447621!3d24.791445254126877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33dec94829fb3%3A0x4a3487dd96c47651!2sClucky&#39;s!5e0!3m2!1sen!2s!4v1569840009986!5m2!1sen!2s"
					width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div>



<div class="container ">
 <div class="row mt-2">
 <div class="col-md-8">
 <h2 class="light-title">Write <strong>Us</strong></h2>

 <form action="contactus.php" method="POST">
<div class="form-group required-field">
 <label for="contact-name">Name</label>
    <input type="text" class="form-control" id="contact-name" name="contact-name" required="">
 </div>

   <div class="form-group required-field">
      <label for="contact-email">Email</label>
      <input type="email" class="form-control" id="contact-email" name="contact-email" required="">
 </div>

<div class="form-group">
<label for="contact-phone">Phone Number</label>
<input type="text"  class="form-control"  name="contact-phone" required="">
	   </div>
	    <div class="form-group required-field">
	     <label for="contact-message">What’s on your mind?</label>
	        <textarea cols="30" rows="1" class="form-control" name="contact-message" required=""></textarea>
          </div>

  <div class="form-footer">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
     <br>
    </form>
   </div>

<div class="col-md-4">
   <h2 class="light-title">Contact <strong>Details</strong></h2>
 <div class="contact-info">
   <div>
          <img src="th (1).jpg" width="25" height="25">
    <a href="tel:111258259">111-258-259</a>
          </div>
    <br>
       <div>
          <img src="th (2).jpg" width="25" height="25">
           <a href="mailto:#">clucks@cluckys.pk</a>
             </div>
          <br>
     <div>
   <img src="th (3).jpg" width="25" height="25">
    Shop 1, 27-C, Bukhari Commercial, Lane 13, Phase 6, DHA Karachi, Pakistan
          </div>	
    </div>   
     </div>
    </div>
    </div>


</body>
</html>


<?php
include "footer.php";

?>