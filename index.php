<?php
 
 $result="";
 
 if (isset($_POST['submit'])){
  require 'phpmailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
 
  $mail->Host='smtp.gmail.com';
  $mail->Port=587;
  $mail->SMTPAuth=true;
  $mail->SMTPSecure='tls';
  $mail->Username='user1@bouchrabelmehdi.com';
  $mail->Password='alizette';
  
  $mail->setFrom($_POST['email'],$_POST['name']);
  $mail->addAddress('user1@bouchrabelmehdi.com');
  $mail->addReplyTo($_POST['email'],$_POST['name']);
  
  $mail->isHTML(true);
  $mail->Subject='Form Submission: '.$_POST['subject'];
  $mail->Body='<h1 align=center>Name :'.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['msg'].'</h1>';
  
  if(!$mail->send()){
	  $result="Something went wrong. Please try again.";
  }
  else{
	  $result="Thanks ".$_POST['name']." for contacting us. We'll get back to you soon!";
  }
 }

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="description" content="PHPMailer Gmail SMTP contact form" />
		<meta name="keywords" content="PHPMailer Gmail SMTP contact form" />
		<title>Contact | Bouchra Belmehdi</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="mainstyle.css" type="text/css"/>
</head>
<body>

  <main class='wrapper'>
  
   <header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="logo" href="http://bouchrabelmehdi.com"><img src="logo.png" alt="logo" /></a>
          </div>
          <div class="collapse navbar-collapse" data-toggle="collapse" data-target="#myNavbar" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li class="b"><a href="http://bouchrabelmehdi.com">Home</a></li>
              <li class="b"><a href="http://bouchrabelmehdi.com/portfolio">Portfolio</a></li>
              <li class="b active"><a href="http://bouchrabelmehdi.com/contact">Contact</a></li>
            </ul>
          </div>
        </div>
	</nav>
	</header>
	
	<br><br>
<section>
 <div class="container">
 
    <h5 class="text-center text-success"><?= $result; ?></h5>
    <form action="" method="post" id="form-box" class="p-2">
        
		<div class="row">
			<div class="col-25">
			<label for="name">Name</label>
			</div>
			<div class="col-75">
            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
			</div>
		</div>
		
		<div class="row">
			<div class="col-25">
			<label for="email">Email</label>
			</div>
			<div class="col-75">
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-25">
			<label for="subject">Subject</label>
			</div>
			<div class="col-75">
            <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
			</div>
		</div>
		
		<div class="row">
			<div class="col-25">
			<label for="msg">Message</label>
			</div>
			<div class="col-75">
            <textarea name="msg" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
			</div>
		</div>
		<div class="row">
			<br>
            <input type="submit" name="submit" id="submit" value="Send">
        </div> 
    </form>
 </div>
</section>
<br>

<section>
<div id="proj">
<p class="button1"><a href="http://bouchrabelmehdi.com:49500" class="link1"><blink>Start chatting </blink></a><span class="glyphicon glyphicon-comment"></span></p>
</div>
</section>

			<div class='push'></div>
		</main>
		
		<footer class='footer'>
			© 2019 Copyright bouchrabelmehdi.com
		</footer>
		
	</body>
</html>