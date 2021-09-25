<html>
<head>
<title>Hello...</title>
<meta charset="utf-8">
<link rel="stylesheet" href=
"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.mi
n.css" >
<script src =
"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.
js" ></script>
<script src =
"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min
.js" ></script>
</head>
<body>
<div class="container">
<h1>Login</h1>
<form method="post" action="./login.php">
<input type="text" name="username"
placeholder="Username"/>
<input type="password" name="password"
placeholder="Password"/>
<button type="submit">Submit</button>
</form>
<h1>Registration</h1>
<form method="post" action="./registration.php">
<input type="text" name="id" placeholder="ID"/>
<input type="text" name="username"
placeholder="Username"/>
<input type="text" name="age" placeholder="Age"/>
<input type="password" name="password"
placeholder="Password"/>
<button type="submit">Submit</button>
</form>
</div>
</body>
</html>