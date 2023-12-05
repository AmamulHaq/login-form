<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register</title>
  <link rel="stylesheet" type="text/css" href="login.css" />
  <style type="text/css">
    .box {
  position: relative;
  width: 350px;
  height: 420px;
  background: transparent;
  border-radius: 15px;
  border: 2px solid white;
  display: flex;
  justify-content: center;
  align-items: center;
  backdrop-filter: blur(15px);
}
  </style>
</head>

<body>


  <div class="background">
    <div class="box">
      <form class="form">

        <h2>REGISTER</h2>

        <div class="input">
          <input type="name" name="name" placeholder="Name" required />
        </div>
        <div class="input">
          <input type="email" name="email" placeholder="Email" required />
        </div>
        <div class="input">
          <input type="password" name="password" placeholder="Password" required />
        </div>
        <div class="input">
          <input type="password" name="repass" placeholder="Confirm Password" required />
        </div>
        <button type="submit">SIGN UP</button>
        <div class="register">
          <p>Already have an account..? <a href="login.html" target="login">LOGIN</a></p>
        </div>
    </div>

  </div>

</body>

</html>