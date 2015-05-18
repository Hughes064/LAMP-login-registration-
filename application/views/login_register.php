<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<title>Login and Registration</title>
	<style>

    body 
    {
        background-color: #E3E8E8;
    }
    h1 
    {
        text-align: center;
        color: #E3E8E8;
        font-family: 'Fjalla One', sans-serif;
        letter-spacing: 3px;
    }
	
    label 
    {
        color: #E3E8E8;
        font-family: 'Fjalla One', sans-serif;  
    }
    
    {
        color:#E3E8E8;
        text-align: center;
    }
	.errors, .thanks
	{
		color: #4D3953;
		text-align: center;
        margin-top: 15px;
	}

    .registration, .login_form
    {
        width: 470px;
        margin: 0 auto;        
        background-color: #766F78;
        padding: 5px;
        margin-top: 15px;
        border-radius: 15px;

    }

    .pure-button 
    {
    color: #E3E8E8;
    background-color: #92AFB3;
    border-radius: 10px;
    padding: 15px;
    width: 125px;
    font-size: 18px;    
    }



	</style>
</head>
<body>
<?php 
echo '<div class="errors">'.$this->session->flashdata('validation_errors').'</div>';

echo '<div class="success">'.$this->session->flashdata('success_message').'</div>';

echo '<div class="thanks">'.$this->session->flashdata('thank_you').'</div>';


 ?>	
<div class="registration">
    <h1>REGISTER</h1>
        <form class="pure-form pure-form-aligned" method="post" action="new">
            <fieldset>
                <div class="pure-control-group">
                    <label>First Name</label>
                    <input name="first_name" type="text" placeholder="First Name">
                </div>
                  <div class="pure-control-group">
                    <label>Last Name</label>
                    <input name="last_name" type="text" placeholder="Last Name">
                </div>
                <div class="pure-control-group">
                    <label for="email">Email Address</label>
                    <input name="email" type="text" placeholder="Email Address">
                </div>
                <div class="pure-control-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" placeholder="Password">
                </div>
        		<div class="pure-control-group">
                    <label for="password_confirm">Confirm Password</label>
                    <input name="password_confirm" type="password" placeholder="Confirm Password">
                </div>

                <div class="pure-controls">
                    <button type="submit" class="pure-button pure-button-primary">Submit</button>
                </div>
            </fieldset>
        </form>
</div>

<?php 
echo '<div class="errors">'.$this->session->flashdata('login_errors').'</div>';

echo '<div class="errors">'.$this->session->flashdata('error_message').'</div>';
 ?>
 <div class="login_form">
    <h1>LOG IN</h1>
    <form class="pure-form pure-form-aligned" method="post" action="login">
        <fieldset>
            <div class="pure-control-group">
                <label for="name">Email</label>
                <input name="email" type="text" placeholder="Email Address">
            </div>
              <div class="pure-control-group">
                <label for="email">Password</label>
                <input name="password" type="password" placeholder="Password">
            </div>
            <div class="pure-controls">
                <button type="submit" class="pure-button pure-button-primary">LogIn</button>
            </div>
        </fieldset>
    </form>  
</div> <!--end of login form> 
	
</body>
</html>