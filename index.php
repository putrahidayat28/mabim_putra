<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ini judul -->
    <title>Mabim Fasilkom 2026</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="logo" href="aset/img/icon.jpg">
    <!-- css internal -->
     <!-- <style>
        *{
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            margin: 0;
            height: 100vh;
            background: linear-gradient(135deg, #4f46e5, #06b6d4);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        /*content*/
        .login-class {
            background: #ffffff;
            padding: 30px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        .judul-login {
            color :green;
            text-align: center;
        }
     </style> -->
     <!-- css external -->
<link rel="stylesheet" href="aset/css/style.css">

</head>
<body>
  <!-- <h1>Halo bos </h1>  
  <h2>Manawi aya</h2> -->
  <div class="login-class">
    <h2 class="judul-login">Login</h2>
    <form action="login.php" method="post" return="validasi()">
    <label for="Username">Username</label>
    <input type="text"  name="Username" id="Username"/>
    <label for="Password">Password</label>
    <input type="password"  name="Password" id="Password"/>

    <div class="error" id="errorMsg"></div>

    <input type="submit" class="login-button" value="Login">
  </form>
  </div>
  <script src="aset/js/script.js">

  </script>
</body>
</html>