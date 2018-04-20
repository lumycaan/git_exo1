<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<style type="text/css">
html, body, h1, form, fieldset, input
{
margin: 0; padding: 0; border: none;
}
body {
font-family: Helvetica, Arial, sans-serif; font-size: 12px;
}
#registration {
    color: #fff;
    background: #2d2d2d;
    background: -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0, rgb(60,60,60)),
        color-stop(0.74, rgb(43,43,43)),
        color-stop(1, rgb(60,60,60))
        );
     background: -moz-linear-gradient(
        center bottom,
        rgb(60,60,60) 0%,
        rgb(43,43,43) 74%,
        rgb(60,60,60) 100%
        );
     -moz-border-radius: 10px;
     -webkit-border-radius: 10px;
     border-radius: 10px;
     margin: 10px;
     width: 430px;
     }
 
 #registration a {
      color: #8c910b;
      text-shadow: 0px -1px 0px #000;
      }
 
#registration fieldset {
      padding: 20px;
      }
</style>
</head>
<body>
	<div id="registration">
		<h2>Create an Account</h2>
		<form id="RegisterUserForm" action="" method="post">
			<fieldset>
				<label for="name">Name</label> <input class="text" id="name" type="text" name="name" value="" />
				<label for="tel">Phone Number</label> <input class="text" id="tel" type="tel" name="tel" value="" />
				<label for="email">Email</label> <input class="text" id="email" type="email" name="email" value="" />
				<label for="password">Password</label> <input class="text" id="password" type="password" name="password" />
				 
				<input id="acceptTerms" type="checkbox" name="acceptTerms" />
				<label for="acceptTerms"> I agree to the <a>Terms and Conditions</a> and <a>Privacy Policy</a> </label>
				 
				<button id="registerNew" type="submit">Register</button>
			</fieldset>
		</form>
	</div>
</body>