<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro e Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="registrar" style="display:none;">
      <h1 class="form-title">Registro</h1>
      <form method="post" action="registro.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="nome" required>
           <label for="nome">Nome</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="sobrenome" required>
            <label for="sobrenome">Sobrenome</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Senha</label>
        </div>
       <input type="submit" class="btn" value="Registrar-se" name="registrar">
      </form>
      <p class="or">
        ----------or----------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Já possui uma conta?</p>
        <button id="loginButton">Login</button>
      </div>
    </div>

    <div class="container" id="login" style="display:block">
        <h1 class="form-title">Login</h1>
        <form method="post" action="registro.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Senha</label>
          </div>
          <p class="recuperar">
            <a href="#">Recuperar senha</a>
          </p>
         <input type="submit" class="btn" value="Login" name="login">
        </form>
        <p class="or">
          ----------or----------
        </p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
          <p>Ainda não possui uma conta?</p>
          <button id="registrarButton">Registrar-se</button>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>
