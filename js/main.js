// JavaScript Document

	
//	alert('welcome');
	
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
function do_register ()
{
	var u  = document.getElementById('username');
	var p1 = document.getElementById('password1');
	var p2 = document.getElementById('password2');
	var e  = document.getElementById('email');
	var g1 = document.getElementById('gender1');
	var g2 = document.getElementById('gender2');
	var C  = document.getElementById('city');
	var a  = document.getElementById('acp');
	
	var s1  = document.getElementById('star1');

	
	
	
	if (u.value==="")
	{
		alert("insert you're name");
		s1.style.display="block";
		u.focus();
		return false;
	}
		else if (p1.value==="")
	{
		alert("insert you're pass");
		p1.focus();
		return false;
	}
		else if (p1.value!==p2.value)
	{
		alert("insert you're pass correctly");
		p2.focus();
		return false;
	}
		else if (e.value==="")
	{
		alert("insert you're email");
		e.focus();
		return false;
	}
		else if (filter.test(e.value)===false)
	{
		alert("wrong email");
		e.focus();
		return false;
	}
		else if (!g1.checked && !g2.checked)
	{
		alert("please choose gender");
		g1.focus();
		return false;
	}
	//////////////////////////////////////
		else if (C.value===0)
	{
		alert("choose city name");
		C.focus();
		return false;
	}
	//////////////////////////////////////
		else if (!a.checked)
	{
		alert("accept laws");
		a.focus();
		return false;
	}
		
		
	
	
		
		
		
}
	