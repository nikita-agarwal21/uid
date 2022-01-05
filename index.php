<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Required Core stylesheet -->
  <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">

  <!-- Optional Theme stylesheet -->
  <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">

	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Login Page</title>
</head>

<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" width="80" height="80" class="nav-img" alt="nav-img">
      </a>
              <h1 style='background-color:white'>TO-DO LIST</h1>
    </nav>
</div>

  <div  style='background-color:blue;'>
    <div class="row">
          <center>   <h4 style='color:white;'>ABOUT TO-DO LIST</h4></center>
        <div class="container col-sm" style='color:white;'>
          <ul>
        <li>Being in this Gen Z era we depend on smartphones for everything one of the
advantages of using smartphones is to make a "note" of things which we might forget.
So this particular app not only allows us to make a note it but also helps us to add the
bill payments if any and saves time.
</li>
          <li>We can create a new note and save it in our database, we can also delete and update the
already existing content.With the help of the time data we can analyse when was the data added
or last modified.
 </li>
          <li>With the help of this webpage we can also sort the given content based on alphabetical order or
the recently  added and also search for the particular note as per  the user requirement.
</li>
        </ul>

      </div>

      <div class="col-sm-4">
        <img class='imgLogo' src="images/todo.jpg " alt='metro'style="height: 250px; width: 250px ;float:left"/>

      </div>

    </div>
  </div>

<div class='form'>
	<form action="validate.php" method="post">
		<div class="login-box">
			<h1>Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Adminname"
						name="adminname" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>

			<input class="button" type="submit"
					name="login" value="Sign In">
		</div>
	</form>
</div>
</body>

</html>
