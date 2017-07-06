php 03

<?
include ("php/php06.php");

//connect to database
if (isset($_POST['register']))//روی ثیت نام زده یا نه
{	
$user=$_POST['username'];//برای اینکه اول در متغیر بریزه بعد در دیتا بیس
$pass=$_POST['password'];//از name کپی کن
$email=$_POST['email'];
$gender=$_POST['gender'];
$city=$_POST['city'];

	//call class
$main = new test();
$result=$main->register($user,$pass,$email,$gender,$city);

}


?>

<div align="center">
<b class="t1">salam</b>
<br>
<b style="color:aqua; font-size:40px; font-family=tahoma;">فرم ثبت نام</b>
</div>
	
<form method="post" onSubmit="return do_register();" >

<table border="0" align="center" dir="rtl" >	
<tr>
<td>
	
	نام کاربری:</td><td> <input type="text" id="username" name="username"/></td><td id="star1">*</td>
	</tr>
	
	<br><tr><td>
	کلمه عبور: </td><td><input type="password" id="password1" name:"password"/>
	<br></td></tr>
	<tr><td>
	تکرار کلمه عبور : </td><td><input type="password" id="password2" name:"password2"/>
	<br></tr></td>
	<tr><td>
	ایمیل: </td><td><input type="text" id="email" name="email"/>
	<br></td>
	<tr><td>جنسیت:</td><td> 
	<label>مرد:<input type="radio" id="gender1" name:"gender" value="1" /></label>
	<label>زن:<input type="radio" id="gender2" name:"gender" value="2" /></label>
	 </td></tr>
	<tr><td>شهر:</td>
	<td>
	<select id="city" name="city">
	<option value="0" selected="selected" >لطفا شهر را انتخاب کنید</option>
	<option value="1" >تهران</option>
	<option value="2" >کرج</option>
	<option value="3" >قزوین</option>
	</select>
	</td>
	<tr><td>
	قوانین:	
	</td><td>
	<textarea readonly >
	a
	ae	
	n
	</textarea>
	</td></tr>
	<tr><td></td><td align="right" >
	<input type="submit" id="register" name="register" />
	<input type="reset" value="دوباره"/> </td>
	</tr>
	<tr><td>
		من قوانین را قبول دارم
	</td><td>
		<input type="checkbox" id="acp" name="acp"/>
	</td></tr>
</table>
	</form>
