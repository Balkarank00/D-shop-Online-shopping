<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="registration";

if(isset($_POST['register']))
{
$uid=$_POST['t1'];
$pass=$_POST['t2'];

$conn=new mysqli($servername,$username,$password,$dbname);
$sql="SELECT * FROM registration_db WHERE login='$uid' AND pwd='$pass'";

$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)==1)
{
echo"<script> alert('Login Successfully')</script>";
}
else
{
echo"<script> alert('Login Id Password Do Not Match')</script>";
}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>online</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="mbcsmbf8y1.css" type="text/css" />
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>

<body>
<div id="wrapper">
<div id="header">
    <img src="image/logo.png" width="970px" height="100px;"/> 
<p style="margin-top:-20px;" align="right"><font size="+1" face="Geneva, Arial, Helvetica, sans-serif" color="#FFFFFF">Call us now:-1800-7777-2342</font></p>





<div id="nav">

<!-- Navigation menus created with the free version of Easy CSS Menu downloaded from www.easycssmenu.com
     You are free to use this menu code for personal, non-commercial use only. Any other use is a serious violation of copyright laws.
     You are required to retain this comment block in your website code in an unchanged fashion.
     The above limitations do not apply on menus created with the paid version of the software. -->
<div id="mbf8y1ebul_wrapper" style="max-width: 970px;">
  <ul id="mbf8y1ebul_table" class="mbf8y1ebul_menulist css_menu">
  <li class="first_button"><div class="buttonbg" style="width: 200px;"><a href="index.php">HOME</a></div></li>
  <li><div class="arrow buttonbg" style="width: 400px;"><a class="button_2">SHOP BY CATEGORY</a></div>
    <ul class="gradient_menu gradient174">
    <li class="gradient_menuitem gradient29 first_item"><a class="with_arrow" title="">Fruits &amp; Vegetables</a>
      <ul class="gradient_menu gradient58">
      <li class="gradient_menuitem gradient29 first_item"><a href="freshfruits.php">Fresh Fruits</a></li>
      <li class="gradient_menuitem gradient29 last_item"><a href="freshvegetables.php">Fresh Vegestables</a></li>
      </ul></li>
    <li class="gradient_menuitem gradient29"><a class="with_arrow" title="">Grocery &amp; Staples</a>
      <ul class="gradient_menu gradient232">
      <li class="gradient_menuitem gradient29 first_item"><a href="ayurvedic.php">Ayurvedic</a></li>
      <li class="gradient_menuitem gradient29"><a href="dal_pulses.php">Dal &amp; Pulses</a></li>
      <li class="gradient_menuitem gradient29"><a href="dry.php">Dry Fruits</a></li>
      <li class="gradient_menuitem gradient29"><a href="Edible_oils_ghee.php">Edible oils &amp; Ghee</a></li>
      <li class="gradient_menuitem gradient29"><a href="flour_sooji.php">Flours &amp; Sooji</a></li>
      <li class="gradient_menuitem gradient29"><a href="masala_spices.php">Masala &amp; Spices</a></li>
      <li class="gradient_menuitem gradient29"><a href="Rice_product.php">Rice &amp; Rice Product</a></li>
      <li class="gradient_menuitem gradient29 last_item"><a href="salt_sugar.php">Salt,Sugar &amp;Jaggery</a></li>
      </ul></li>
    <li class="gradient_menuitem gradient29"><a class="with_arrow" title="">Bread Dairy &amp; Eggs</a>
      <ul class="gradient_menu gradient87">
      <li class="gradient_menuitem gradient29 first_item"><a href="bread_bakery.php">Bread &amp; Bakery</a></li>
      <li class="gradient_menuitem gradient29"><a href="Dairy.php">Dairy Products</a></li>
      <li class="gradient_menuitem gradient29 last_item"><a href="eggs.php">Eggs</a></li>
      </ul></li>
    <li class="gradient_menuitem gradient29"><a class="with_arrow" title="">Bevarages</a>
      <ul class="gradient_menu gradient145">
      <li class="gradient_menuitem gradient29 first_item"><a href="energydrink.php">Energy &amp;  Health Drinks</a></li>
      <li class="gradient_menuitem gradient29"><a href="fruitsdrinks.php">Fruits Drinks &amp; Juices</a></li>
      <li class="gradient_menuitem gradient29"><a href="mineralwater.php">Mineral Water</a></li>
      <li class="gradient_menuitem gradient29"><a href="softdrink.php">Soft Drinks</a></li>
      <li class="gradient_menuitem gradient29 last_item"><a href="coffee.php">Tea &amp; coffee</a></li>
      </ul></li>
    <li class="gradient_menuitem gradient29"><a class="with_arrow" title="">Personal Care</a>
      <ul class="gradient_menu gradient116">
      <li class="gradient_menuitem gradient29 first_item"><a href="babycare.php">Baby care</a></li>
      <li class="gradient_menuitem gradient29"><a href="cosmetic.php">Cosmetic</a></li>
      <li class="gradient_menuitem gradient29"><a href="perfumes.php">Deos &amp; Perfumes</a></li>
      <li class="gradient_menuitem gradient29 last_item"><a href="oralcare.php">Oral care</a></li>
      </ul></li>
    <li class="gradient_menuitem gradient29 last_item"><a class="with_arrow" title="">Household</a>
      <ul class="gradient_menu gradient87">
      <li class="gradient_menuitem gradient29 first_item"><a href="electrails.php">Electricals</a></li>
      <li class="gradient_menuitem gradient29"><a href="kitchen.php">Kitchen &amp; Dinning</a></li>
      <li class="gradient_menuitem gradient29 last_item"><a href="pooja.php">Pooja needa</a></li>
      </ul></li>
    </ul></li>
  <li><div class="buttonbg" style="width: 170px;"><a href="offers.php">RECIPE</a></div></li>
  <li class="last_button"><div class="buttonbg" style="width:180px;"><a href="contactus.php">CONTACT US</a></div></li>
  </ul>
</div>
<!-- Menus will work without this javascript file. It is used only for extra
     effects, improved usability, compatibility with very old web browsers
     and support for touch screen devices. --></div><!--end of nav-->
	 
	 <div id="notification1"><marquee direction="left" scrollamount="8" onmouseover="this.stop();" onmouseout="this.start();"><b>Order Above 1000 Rupees Free Home Delivery....4% Extra off on Member <h4></h4><b></marquee></div><!-- end of notification-->
	 <div id="slide"><!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><a href="#"><img src="data1/images/pat_dt_staples1600x460_c.jpg" alt="wowslider.net" title="Pat_DT_Staples-1600x460_C" id="wows1_0"/></a></li>
		<li><img src="data1/images/rdaynamkeenssonpapdi.jpg" alt="R-Day-Namkeens--Son-Papdi" title="R-Day-Namkeens--Son-Papdi" id="wows1_1"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Pat_DT_Staples-1600x460_C"><span><img src="data1/tooltips/pat_dt_staples1600x460_c.jpg" alt="Pat_DT_Staples-1600x460_C"/>1</span></a>
		<a href="#" title="R-Day-Namkeens--Son-Papdi"><span><img src="data1/tooltips/rdaynamkeenssonpapdi.jpg" alt="R-Day-Namkeens--Son-Papdi"/>2</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="#"></a></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
</div><!--slider bar-->
	 </div><!--end of header-->
	 <div id="bodypart">
	 <div id="bodyleft">
	 <h2> Login Id</h2>
	 
	        <form method="post" action="#" name="login" onsubmit="return validate()">
	      <table>
	         
	         <tr><td style="width:30%" height="30px;"><label>Login Id</label></td>
             <td>:&nbsp;<input type="text" class="field" style="width:150px;" name="t1" id="t1" placeholder="Login Id" /></td></tr>
	         <tr><td style="width:30%" height="30px;"><label>Password</label></td>
            <td>:&nbsp;<input type="password" class="field" style="width:150px;" name="t2" id="t2" placeholder="Password" /></td>
			</tr>
	        <tr><td align="right">&nbsp;<input type="submit" class="search-submit" value="Submit" name="register" id="register" /></td></tr>
			 </table>
			  </form>
			 
	       <td><a href="#" class="bul">Forgot Password</a></td><br />
	       <td><a href="registration.php"class="bul">New User Registeration</a> </td>
           </tr>
	
		   <br /><br />
		   <div><h2 align="center">Latest New's</h2>
		   <marquee direction="up" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();">
		   <img src="image/new2[1].gif" /><font color="#0000FF">Our Online Wallet Coming Soon...</font><br /><br />	
		  
		   <img src="image/new2[1].gif" /><font color="#0000FF">Order Above Rs-2000 A Gift for &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            Every One</font><br /><br/>
		   <img src="image/Star[1].gif" /><font color="#0000FF">Up to 40%Off on HouseHold Items </font><br /><br />
		    <img src="image/Star[1].gif" /><font color="#0000FF">Better Services for D-shop</font><br /><br />
		    <img src="image/Star[1].gif" /><font color="#0000FF">Websites updates Going on...</font><br /><br />
		   
		   
		   
		   </marquee>
		   
		   
		    </div><!--end of hot-->
	 
		   
	  </div><!--end of body left-->
	     
		   
		  
	  
	
	   <div id="bodyright"><h2>Welecome To Our Online Shopping</h2>
	  <p> We'll make your online grocery shopping experience both quick and easy! You may select from a wide range of groceries, gourmet food, organic          food, fresh produce and more - all of which are offered online.

 
          If you live outside the Bilaspur area you may use  Market and we will be happy to ship your order to you. Shipping costs will vary depending on where the order is shipped. Someone from our World Market will contact you regarding shipping costs. Please make sure your correct contact information is included with your registration. This would include a phone number and an email address.

Before shipping orders are sent out, we will contact you to verify delivery information. Orders will not be shipped until the delivery information is verified. Additionally, shipping orders cannot be sent in extreme weather conditions, either locally or at the shipping destination.</p>
	  </div><!--end of body right-->
	   
		
		
	  <br clear="all"/>

	 </div><!--end of bodyaprt-->
	 
	 
	 
	 <div id="footer"><p class="left" style="padding:3px;"> <a href="index.php">Home</a> <span>|</span> <a href="service.php">Service Area</a> <span>|</span> <a href="query.php">Term & Condition</a> <span>|</span><a href="contactus.php">Contact Us</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keep in touch<a href="https://www.facebook.com/"><img src="image/facebook.png" width="20" height="20" />&nbsp;&nbsp;&nbsp;</a><a href="https://accounts.google.com/ServiceLogin?sacu=1&scc=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&hl=en&service=mail#identifier"><img src="image/googleplus.png" width="20" height="20"/></a><a title="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&copy; Mail us: james.srt334433@gmail.com</a></p>

	 </div><!--end of footer-->
	 
<script type="text/javascript" src="mbjsmbf8y1.js"></script></div><!--end of wrapper-->
</body>
</html>

<script language="javascript">

function validate()
{

var uid,pwd;

uid=document.getElementById("t1").value;
pwd=document.getElementById("t2").value;

if(uid=="")
{
alert(" Login Should Not Blank");
document.getElementById("t1").focus();
return false;
}
if(pwd=="")
{
alert("Password Should Not Blank");
document.getElementById("t2").focus();
return false;
}
}
</script>