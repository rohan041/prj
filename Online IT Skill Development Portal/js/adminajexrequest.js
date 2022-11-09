
//Ajeax call for admin Login varification
function checkAdminLogin(){
	var adminlogemail = $("#adminlogemail").val();
	var adminlogpass = $("#adminlogpass").val();
	$.ajax({
		url: "admin/admin.php",
		method: "POST",
		data:{
			checkLogemail: "checklogmail",
			adminlogemail:adminlogemail,
			adminlogpass:adminlogpass,
		},
		success: function(data){
			if (data == 0) {
				$("#statuAdminLogMSG").html('<p class="alert alert-danger">Invalid Email ID OR Password</p>');
			}else if(data == 1){
					$("#statuAdminLogMSG").html('<p class="alert alert-success">success Loading.....</p>');
					setTimeout(() => {
						window.location.href = "admin/adminDashboard.php";
						},1000);
			}
		},
	});
}