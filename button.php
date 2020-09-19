<?php 
include "header.php";
include "conn.php";

 ?>

<style type="text/css">
 
  h5{
    text-align: left;
    margin-left: 10%;
  }
 h4{
  text-align: left;
 }
  ul :hover{
    background: skyblue;
  }
  .form-control{
    width: 100%;
  }

  input
  {
    width: 100%;
  }
</style>
<h1 class="heading" style="margin-right: 20%;">
  FRANCHISING
</h1>
<div class="container">

<div class="row">
  <div class="col-6">
     <h4>personal info</h4><br>
      <h5>Applicant name</h5>
      <input class="form-control" type="text" name="Applicant" style="width: 100%;">
  </div>
  <div class="col-6">
      <h4>Business details</h4><br>
      <h5>Company</h5>
      <input  class="form-control" type="text" name="Company">
  </div>
</div>
  <div class="row">
  <div class="col-6">
      <h5>Email*</h5>
      <input class="form-control" type="text" name="Applicant" style="width: 100%;">
  </div>
  <div class="col-6">
     
      <h5>Company description*</h5>
      <input  class="form-control" type="text" name="Company">
  </div>
</div>
  <div class="row">
  <div class="col-6">
   
      <h5>Phone</h5>
      <input class="form-control" type="text" name="Applicant" style="width: 100%;">
  </div>
  <div class="col-6">
         <h5>Current bussiness*</h5>
      <input  class="form-control" type="text" name="Company">
  </div>  
</div>

<div class="row">
   <div class="col-3">
         <h5>City*</h5>
      <input  class="form-control" type="text" name="Company">
  </div> 
  <div class="col-3">
    <h5>Countrt</h5>
    <input  class="form-control" type="text" name="Company">
  </div>
  <div class="col-6">
<h5 col-3>Previous Experience in Restaurant *</h5> 
<select name="btntogl" class="form-control" >

  <option value="yes">Yes</option>
  <option value="No">No</option>  
</select>
<br>
<br>  
  </div>

</div>
<div class="row">
  <div class="col-12">
    
<button class="btn btn-warning " name="submit" style="color: white; margin-left:48" ><strong>Submit</strong> </button>
</div>
  </div>

</div>


<?php 
if (isset($_POST['submit'])) {
  $Applicant=$_POST['Applicant'];
  $email=$_POST['Email'];
  $phone=$_POST['Phone'];
  $Country=$_POST['Country'];
  $City=$_POST['City'];
  $Company=$_POST['Company'];
  $description=$_POST['Companyd'];
  $bussiness=$_POST['Currentb'];
  $btntogl=$_POST['btntogl'];

  $enter=$conn->prepare("INSERT INTO contact (ame,email,phone,country,city,company,companydesc,previousexp) VALUES ('$Applicant','$email','$phone','$Country','City','$description','$bussiness', '$btntogl')");
  if ($enter->execute()) {
  ?>
  <script>
    alert("VALUES inserted ");
  </script>
  <?php 

}
}
 ?>


 <?php 
 include "footer.php";
  ?>