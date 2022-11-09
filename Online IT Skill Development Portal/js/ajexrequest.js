$(document).ready(function(){
	//Ajex call form already exists email varificaion
	$("#stuemail").on("keyprress blur", function(){
		var reg = /^[A-Z0-9._%+-]+@([A-Z0-9]+\.)+[A-Z]{2,4}$/i;
		var stuemail = $("#stuemail").val();
		$.ajax({
			url: "Student/addstudent.php",
			method: "POST",
			data:{
				checkemail: "checkmail",
				stuemail:stuemail,
			},
			success:function(data){
				//console.log(data);
				if (data != 0) {
					$("#statusMSG2").html('<small style="color:red;">Email Id Already Used !</small>');
					$("#signup").attr("disabled",true);
				}else if (data == 0 && reg.test(stuemail)) {
				$("#statusMSG2").html('<small style="color:green;">There You Go !</small>');
					$("#signup").attr("disabled",false);
				} else if(!reg.test(stuemail)){
					$("#statusMSG2").html('<small style="color:red;">Please Enter vallid Email e.g example8@gmail.com !</small>');
					$("#signup").attr("disabled",false);
				}
				if(stuemail == ""){
					$("#statusMSG2").html('<small style="color:red;">Please Enter Email</small>');		
				}
			},
		});
	});
});



function addstu(){
	var reg = /^[A-Z0-9._%+-]+@([A-Z0-9]+\.)+[A-Z]{2,4}$/i;
	var stuname = $("#stuname").val();
	var stuemail = $("#stuemail").val();
	var stupass = $("#stupass").val();
	

	//Checking form field on form Submition
	if(stuname.trim() == ""){
		$("#statusMSG1").html('<small style="color:red;"> Please Enter Name</small>');
		$("#stuname").focus();
		return false;
	} else if (/[^a-zA-Z0-9\-\/]/.test(stuname)) {
		$("#statusMSG1").html('<small style="color:red;"> Special characters not allowed </small>');
		$("#stuname").focus();
   		return false;
 	}else if(stuemail.trim() == ""){
		$("#statusMSG2").html('<small style="color:red;"> Please Enter email</small>');
		$("#stuemail").focus();
		return false;
	}else if(stuemail.trim() != "" && !reg.test(stuemail)){
		$("#statusMSG2").html('<small style="color:red;"> Please Enter vallid Email e.g example8@gmail.com</small>');
		$("#stuemail").focus();
		return false;
	}else if(stupass.trim() == ""){
		$("#statusMSG3").html('<small style="color:red;"> Please Enter Password</small>');
		$("#stupass").focus();
		return false;
	}else if(stupass.length < 8){
		$("#statusMSG3").html('<small style="color:red;"> Please Enter more than 8 char. Password</small>');
		$("#stupass").focus();
		return false;
	}else {
		$.ajax({
		url:"Student/addstudent.php",
		method: "POST",
		dataType: "json",
		data:{
			stusignup: "stusignup",
			stuname: stuname,
			stuemail: stuemail,
			stupass: stupass,
		},
		success:function(data){
			console.log(data);
			if(data == "ok"){
				$('#successMSG').html("<span class='alert alert-success'>Registration Successful !</span>");
				clearStuRegField();
				checkStuLogin();
				setTimeout(() => {
						window.location.href = "Student/quize/";
						},1000);
			}
			else if (data == "Failed") {
				$('#successMSG').html("<span class='alert alert-danger'>Unable to register!</span>");
				
			}
		},
	});
	}
}

//Empty All Filed
function clearStuRegField(){
	$("#sturegform").trigger("reset");
	$("#statusMSG1").html(" ");
	$("#statusMSG2").html(" ");
	$("#statusMSG3").html(" ");
}


//Ajeax call for Student Login varification
function checkStuLogin(){
	var reg = /^[A-Z0-9._%+-]+@([A-Z0-9]+\.)+[A-Z]{2,4}$/i;
	var stuLogEmail = $("#stulogemail").val();
	var stulogpass = $("#stulogpass").val();

	 if(stuLogEmail.trim() == ""){
		$("#LoginStatus").html('<small style="color:red;">Please Enter email</small>');
		$("#stulogemail").focus();
		return false;
	}else if(stuLogEmail.trim() != "" && !reg.test(stuLogEmail)){
		$("#LoginStatus").html('<small style="color:red;">Please Enter vallid Email e.g example8@gmail.com</small>');
		$("#stulogemail").focus();
		return false;
	}else if(stulogpass.trim() == ""){
		$("#PasswordStatus").html('<small style="color:red;">Please Enter Password</small>');
		$("#stulogpass").focus();
		return false;
	}else if(stulogpass.length < 8){
		$("#PasswordStatus").html('<small style="color:red;">Please Enter more than 8 char. Password</small>');
		$("#stulogpass").focus();
		return false;
	}else {
	$.ajax({
		url: "Student/addstudent.php",
		method: "POST",
		data:{
			checkLogemail: "checklogmail",
			stuLogEmail:stuLogEmail,
			stulogpass:stulogpass,
		},
		success: function(data){
			if (data == 0) {
				$("#statuLogMSG").html('<small class="alert alert-danger">Invalid Email ID OR Password</small>');
			}else if(data == 1){
					$("#statuLogMSG").html('<div class="spinner-border text-success" role="status"></div>');
					setTimeout(() => {
						window.location.href = "index.php";
						},1000);
			}
		},
	});
}
}