/*Name Validation*/
function fullName(){
	var x = document.getElementById("pname").value;
	var pat= /[a-z][a-z][a-z]/i
	var res=pat.test(x);
	if(x.length<3)
		alert("Full name too short");
	if(!res)
		alert("Enter Valid Name");
}

function husbandName(){
	var x = document.getElementById("hname").value;
	var pat= /[a-z][a-z][a-z]/i
	var res=pat.test(x);
	if(x.length<3)
		alert("Husband name too short");
	if(!res)
		alert("Enter Valid Name");
}

function valAge(){
	var x = document.getElementById("age").value;
	if(x<18 || x>55)
		alert("Invalid Age");
	
}

function heartB(){
	var x = document.getElementById("hb").value;
	if(x<40 || x>120)
		alert("Invalid Heartbeat rate");
}

function bloodP(){
	var x = document.getElementById("bp").value;
	if(x<90 || x>140)
		alert("Invalid Blood Pressure");
}

function weightP(){
	var x = document.getElementById("weight").value;
	if(x<40 || x>110)
		alert("Invalid weight");
		
}

function monthT3(){
	var x = document.getElementById("month3").value;
	if(x<18 || x>55){
		alert("Invalid Iron content");
	}
}

function monthT4(){
	var x = document.getElementById("month4").value;
	if(x<18 || x>55){
		alert("Invalid Iron content");
		window.stop();
	}
}

function monthT5(){
	var x = document.getElementById("month5").value;
	if(x<18 || x>55)
		alert("Invalid Iron content");
}



function bweight(){
	var x = document.getElementById("bweight").value;
	if(x<0.5 || x>6)
		alert("Invalid weight");
}


function validatedate(){
	var x = document.getElementById("date").value;
   var pat =/^([0-2][0-9]|[3][0-1])\/([0][0-9]|[1][0-2])\/([2][0-9][0-9][0-9])$/;
  var res=pat.test(x);

	if(!res)
		alert("Invalid Date");
  
  }

function checkEmail() {

    var email = document.getElementById('mail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
	}
    return false;
 }

function valMob(){
	var y = document.getElementById("contact").value;
	if(y.length!=10)
	{
		alert("Mobile Number Length Invalid");
	}
	var x = document.getElementById("contact").value;
	var pat= /[7-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/
	var res=pat.test(x);
	if(!(res))
	{
			alert("Mobile Number Invalid");
	}
	
}
