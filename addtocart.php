	<?php 
	include "header.php"; ?>

<style type="text/css">
	#quantity{
		width: 5%;
		height: 10%;
		background: silver;
		border: none;
		text-align: center;
		margin-left: none;
		margin-right: none;
	}
	#sub{
		border: none;
		width: 5%;
		height: 10%;
	}
	#add{
		border: none;
		width: 5%;
		height: 10%;
		margin-right: none;
	}
	.addtocart{
		background: yellow;
		color: silver;
		border: none;
		width: 30%;
		height: 10%;
	}
	p{
		box-sizing: border-box;
		margin-left: 25%;
		margin-right: 22%
	}

	.productprice{
		box-sizing: border-box;
		margin-left: 15;
		margin-right: 30%;
		margin-top: 1%; 
	}
	.col-md-9 h3{
		box-sizing: border-box;
		margin-left: 15%;
		margin-right: 30%;
		margin-top: 1%; 

	}
	.dropdownb{
		width: 50%;
		height: 50px; 
		background: silver;
		 color: black; 
		 text-align: left; 
		 border: transparent;

	}

</style>

	<div class="container-fluid">
		<div class="row">
	<div class="row">
	    <div class="col-3">
	      <img src="img/addtocart.jpg" style="width :150%; margin-left: 40%; z-index: 999;">
	                </div>

	        <div class="col-md-9">
	        <h3 style="; margin-top: 5%;">SANDWICH ALA KIEV-REGULAR</h3>  
	        <span class="productprice" style="color: brown;"> <strong> 445/</strong></span>
	        <p>Fried chicken breast fillet oozing with melted jalapeno cheddar, stacked between sesame buns, lettuce, olives, mayonnaise and coleslaw.</p>  

      <div id="dropdown">
        <button class="dropdownb">WAFLET </button>
         <ul class="dropdown-menu" aria-labelledby="btndropdown" style="visibility: hidden;">
          <li>
              <label class="radio-btn">
                  <input type="checkbox" value='jQuery' checked>  
                 <STRONG> CHICKS N WAFLET  </STRONG>                           RS.0/-'               
              </label>
 </li>
</ul>
      </div>
<br>
	        <button id="sub">−</button>
            <input type="number" value="0" id="quantity">
            <button id="add">+</button> 
            <button class="addtocart"> ADD TO CART</button>
	</div>
	<br>
</div>
</div>
</div>
<script type="text/javascript">

	const dropdownb = document.getElementById('dropdownb')
	const subButton = document.getElementById('sub');
const addButton = document.getElementById('add');
const inputField = document.getElementById('quantity');

dropdownb.addEventListener('click', event => ){
dropdown-menu(visibility : visibil);
}
subButton.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField.value) || 0;
  inputField.value = currentValue -1;
});

addButton.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField.value) || 0;
  inputField.value = currentValue + 1;
 
  	
  });
 



});
</script>

	<?php 
	include "footer.php";
	 ?>