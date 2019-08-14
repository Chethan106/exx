<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <form action="exhome.php"> 
    <script src="pwd.js"></script>
</head>
<body>
    <form id="form_id"  method="POST" name="form" >
        <h1>BSIT LOGIN</h1>
        <div class="inset">
        <p>
          <label for="username">Username</label>
          <input style="color: beige" type="text" name="username" id="username"/>
        </p>
        <p>
          <label for="password">PASSWORD</label>
          <input style="color: beige" type="password" name="password" id="password"/>
        </p>
        </div>
        <p class="p-container">
          <span>Forgot password ?</span>
          <input type="button" name="go" id="go" value="Log in" onclick="validate()"/>
        </p>
      </form>
      
</body>
</html>