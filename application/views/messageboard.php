<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <title>User Information</title>
</head>
<?php var_dump($messages) ?>
<?php $user = $this->session->userdata('user')?>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Test App</a>
          <a class="navbar-brand" href="#">Dashboard</a>
          <a class="navbar-brand" href="/">Profile</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <div class="navbar-form navbar-right">
            <a href="signin"><button type="submit" class="btn btn-primary">Log Off</button></a>
          </div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <div class="container">
    	<div class="row">
    		<div class="col-lg-6">
    			<h3><?php echo $user['first_name'] ?></h3>
    			<p>Registered at:<?php echo $user['created_at'] ?></p>
    			<p>User ID:<?php echo $user['id'] ?></p>
    			<p>Email address:<?php echo $user['email'] ?></p>
    		</div>
    	</div>
    </div>
    <div class="container">
    	<div class="row">
    		<div class="col-lg-12">
    			<h2>Leave a message for <?php echo $user['first_name'] ?></h2>
    			<form action="/postMessage" method="post">
	    			<div class="form-group">
	    				<textarea class="form-control" name="message" rows="3" placeholder="Write a message..."></textarea>
	    				<input type="hidden" name= "" value=""
              <br>
	    			<div>
	    			<button type="submit" class="btn btn-success">Post</button>
	    		</form>
	    	</div>
    	</div>
    </div>
<!-- Messages start-->
<?php foreach($messages as $message) { ?>
  <div class="row">
		  <div class="col-lg-12 col-md-12 col-sm-12">
		  	<h2>Dan Bissell wrote:</h2>
					<div class="well">
						<p><?php echo $message['message'] ?></p>
					</div>
          <div class="col-lg-11 col-md-12 col-sm-12 pull-right">
				    <h2 class="inline"><a>Jeff Johnson 
            </a>wrote:</h2>
				    <p class="inline pull-right">Comment created at</p>
				    <div class="well">
            <p>Comment</p>				   
            </div>           
				    <form action="#" method="post">
					     <div class="form-group">
				  	     <textarea class="form-control" rows="3" name="comment" placeholder="Write a comment..."></textarea>
<?php } ?>
					     </div>
					     <button type="submit" class="btn btn-success pull-right">Post</button>
				    </form>
			    </div>
		  </div>
	</div>
<hr>
</body>
</html>
