<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="registration";

if(isset($_POST['btnsave']))
{
$name=$_POST['t1'];
$login=$_POST['t2'];
$pwd=$_POST['t3'];
$pwdd=$_POST['t4'];
$email=$_POST['t5'];
$phone=$_POST['t6'];
$city=$_POST['t7'];
$area=$_POST['t8'];
$pin=$_POST['t9'];
$address=$_POST['t10'];

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
$sql="INSERT INTO registration_db (name,login,pwd,pwdd,email,phone,city,area,pin,address) VALUES('$name','$login','$pwd','$pwdd','$email','$phone','$city','$area','$pin','$address')";


if($conn->query($sql) ===TRUE)
{
echo"<script> alert('Regsiter sucessfully')</script>";
}
else{
echo"Error".sql."<br>".$conn->error;
}
$conn->close();
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
<div id="header"><img src="image/logo.png" width="970px" height="100px;"/>
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
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="#">wowslider.com</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
</div><!--slider bar-->
	 </div><!--end of header-->
	 <div id="bodypart">
	<div id="bodyleft">

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

	 
	
	   <div id="bodyright">
	   <h2>Registration Form</h2>
         <form method="post" action="#" name="registration" onsubmit="return validate()">
		  <table>
		  <tr><td style="width:50%" height="30px;"><label>Name <font color="#FF0000">*</font></label></td>
            <td>: &nbsp;<input type="text" class="field" style="width:170px;" name="t1" id="t1" placeholder="Name"/></td>
			 </tr>
			<tr><td style="width:50%" height="30px;"><label>Gender <font color="#FF0000">*</font></label></td>
            <td>: &nbsp;<input type="radio" class="field" name="gender" id="gender" />Male
			<input type="radio" class="field" name="gender" id="gender" /> Female</td></td></tr>
            <tr><td style="width:50%" height="30px;"><label>Login Id <font color="#FF0000">*</font></label></td>
            <td>: &nbsp;<input type="text" class="field" style="width:170px;" name="t2" id="t2"placeholder="Login Id" />
			<label style="color:#FF0000;" id="er"></label></td></tr>
			<tr><td style="width:50%" height="30px;"><label>Password <font color="#FF0000">*</font></label></td>
            <td>: &nbsp;<input type="password" class="field" style="width:170px;" name="t3" id="t3" placeholder="Password" /></td></tr>
			<tr><td style="width:50%" height="30px;"><label>Password Again<font color="#FF0000">*</font></label></td>
            <td>: &nbsp;<input type="password" class="field" style="width:170px;" name="t4" id="t4" placeholder="Password" /></td></tr>
            <tr><td style="width:50%" height="30px;"><label>Email Id <font color="#FF0000">*</font></label></td>
            <td>: &nbsp;<input type="text" class="field" style="width:170px;" name="t5" id="t5" placeholder="Email Id" /></td></tr>
            <tr><td style="width:50%" height="30px;"><label>Mobile No <font color="#FF0000">*</font></label></td>
            <td>: &nbsp;<input type="text" class="field" style="width:170px;" name="t6" id="t6" placeholder="Mobile No"/></td></tr>
            <tr><td style="width:50%" height="30px;"><label>City <font color="#FF0000">*</font></label></td>
            <td>: &nbsp;<input type="text" class="field" style="width:170px;" name="t7" id="t7" placeholder="city" /></td></tr>	
			<tr><td style="width:50%" height="30px;"><label>Area</label></td>
            <td>: &nbsp;<input type="text" class="field" style="width:170px;" name="t8" id="t8" placeholder="Area" /></td></tr>
			<tr><td style="width:50%" height="30px;"><label>Pin Code</label></td>
            <td>: &nbsp;<input type="text" class="field" style="width:170px;" name="t9" id="t9" placeholder="Pincode"/></td></tr>
			<tr><td style="width:50%" height="30px;"><label>Address</label></td>
            <td>: &nbsp;<input type="text" class="field" style="width:170px;" name="t10" id="t10" placeholder="Address" /></td></tr>
			<tr><td>&nbsp;</td></tr>
			
			<tr><td>&nbsp;</td></tr>
			<tr><td style="width:50%" height="30px;"><label></label></td>
            <td>: &nbsp;<input type="checkbox" class="field" name="chk" id="chk" />&nbsp;&nbsp;Accept Terms and Condition</td></tr>
            
            <tr><td>&nbsp;</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>&nbsp;</td></tr>
            <tr><td align="right"><input type="submit" class="search-submit" value="submit" name="btnsave" id="btnsave" /></td><td>
			 <input type="RESET" class="search-submit" value="Reset" name="btnreset" /></td>
            
         
		 </table>
 </form>
	 
	  </div><!--end of body right-->
	  
	 </div><!--end of bodyaprt--> 
	  <br clear="all"/>
	  <div id="footer"><p class="left" style="padding:3px;"> <a href="index.php">Home</a> <span>|</span> <a href="service.php">Service Area</a> <span>|</span> <a href="#">Term & Condition</a> <span>|</span><a href="contactus.php">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a title="#">&copy; Mail us: james.srt334433@gmail.com</a></p>

	 </div><!--end of footer-->
<script type="text/javascript" src="mbjsmbf8y1.js"></script></div><!--end of wrapper-->
</body>
</html>

<script language="javascript">

function validate()
{


var nm,uid,pwd,pwd2,email,cid,phn,phn2,city,area,pin;

nm=document.getElementById("t1").value;
uid=document.getElementById("t2").value;
pwd=document.getElementById("t3").value;
pwd2=document.getElementById("t4").value;
email=document.getElementById("t5").value;
phn=document.getElementById("t6").value;
city=document.getElementById("t7").value;
area=document.getElementById("t8").value;
pin=document.getElementById("t9").value;

if(nm=="")
{
alert("Provide Valid Name");
document.getElementById("t1").focus();
return false;
}
else if(!isNaN(nm))
{
alert("Name Should not Numeric");
document.getElementById("t1").focus();
return false;
}


if(( gender[0].checked==false) && (gender[1].checked==false))
{
alert("Please choose your gender: Male or female");
return false;
}

if(uid=="")
{
alert("Login Id Should Not Blank");
document.getElementById("t2").focus();
return false;
}

if(pwd=="")
{
alert("Password Should Not Blank");
document.getElementById("t3").focus();
return false;

}
if(pwd.length<8)
{
alert("Minimum length Of Password 8:");
document.getElementById("t3").focus();
return false;

}


if(pwd2=="")
{
alert("Password Should Not Blank");
document.getElementById("t4").focus();
return false;

}
else if(pwd2 != pwd)
{
alert("Both Password do not match");
document.getElementById("t4").focus();
return false;

}

if(email=="")
{
alert("Email Id Should Not Blank");
document.getElementById("t5").focus();
return false;
}
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
if(atpos<1 || (dotpos-atpos<2)) {
        alert("Not a valid e-mail address");
		document.getElementById("t5").focus();
		return false;
    }

	
if(phn=="")
{
alert("Mobile No Should Not Blank");
document.getElementById("t6").focus();
return false;
}
else if(isNaN(phn))
{
alert("Provide Valid Phone Number");
document.getElementById("t6").focus();
return false;
}


else if(phn.length>10 ||phn.length<10)
{
alert("Maximum & Minimum Length of Phone Is 10");
document.getElementById("t6").focus();
return false;
}


if(city=="")
{
alert("City Should Not Blank");
document.getElementById("t7").focus();
return false;

}


if (document.registration.chk.checked)
{
alert ("Thank For Register");
}
else
{
alert ("Please Check The Term and Condition");
return false;
}

}

</script>































<input type="radio" name="gender" id="gender" />Male
			<input type="radio" name="gender" id="gender" /> Female
			
			
			
			
			
			
			
			
			
			
			
			
			