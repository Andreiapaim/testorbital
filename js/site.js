pegatemp();

function pegatemp()
{


	$.ajax({
	type: "GET",
	url: "https://api.openweathermap.org/data/2.5/onecall?lat=-23.154754&lon=-48.8653679&appid=e870492d569fc3771282f1789e5a5528&units=metric",
	data: {},
	dataType: "json",
	success: function(msg, status) 
	{
		var dd = document.getElementById('temp');
		dd.innerText = ' São Paulo - ' + msg.current.temp.toFixed(0) + 'º';
	},
	error: function(xhr, msg, e) {
		alert(msg);
	}
	});


}

$(function() {

		$(".login").click(function() {
			
				if (getCookie('GUID')) {
					window.open("dashboard","_self");
				}else {
					$('#loginmodal').modal('toggle');
				}
				return false;
		});

		// Calling Login Form
		$("#login_form").click(function() {
				$(".social_login").hide();
				$(".user_login").show();
				return false;
		});

		// Calling Register Form
		$("#register_form").click(function() {
				$(".social_login").hide();
				$(".user_register").show();
				$(".header_title").text('Register');
				return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function() {
				$(".user_login").hide();
				$(".user_register").hide();
				$(".social_login").show();
				$(".header_title").text('Login');
				return false;
		});
		
		$("#btnlogin").click(function(e)
		   { 

			e.preventDefault();
			email = $("#email").val();
			senha = $("#senha").val();

			enviarlogin(email,senha);
					 
		  });  

		  
		  
});

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
	var c = ca[i];
	while (c.charAt(0) == ' ') {
	  c = c.substring(1);
	}
	if (c.indexOf(name) == 0) {
	  return c.substring(name.length, c.length);
	}
  }
  return "";
}


function enviarlogin(email,senha)
{
		
	var params = '';
	$.ajax({
	type: "POST",
	url: "enviarlogin.php",
	data: { 'email' : email , 'senha' : senha},
	success: function(msg, status) 
	{

		 if(msg == "N")
		   {
		   $(".msglogin").text("E-mail ou Senha incorreta");
		   } 
		   else if(msg == "Y")
		   {
			$(".msglogin").text("Você está Logado"); 
			setTimeout(
			function() 
			{
			$('#loginmodal').modal('toggle');   
			window.open("dashboard","_self");
			}, 1000);

		   }
		
	},
	error: function(xhr, msg, e) {
		
	}
	});
	
}
