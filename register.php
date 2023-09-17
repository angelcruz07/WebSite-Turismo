<?php 
    require "database.php";
// Variable para declarar errores en el llenado del formulario
    $error = null;

    if ( $_SERVER['REQUEST_METHOD'] == "POST") { 
        if(empty( $_POST['name']) || empty( $_POST['email']) || empty( $_POST['password'])) { 
            $error = "Por Favor rellena los campos";
        }else if (!str_contains($_POST['email'], '@')) { 
            $error = "Por favor ingresa un formato de Email correcto";
        }else {
            $statement = $conn -> prepare("SELECT * FROM users WHERE email = :email");
            $statement -> bindParam(":email",$_POST ["email"]);
            $statement -> execute();

        if ($statement -> rowCount() > 0){ 
            $error = "Este email ya esta registrado"; 
        }else { 
         $conn
          ->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)")
          ->execute([
            ":name" => $_POST["name"],
            ":email" => $_POST["email"],
            ":password" => password_hash($_POST["password"], PASSWORD_BCRYPT),
          ]);

          $statement = $conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
          $statement->bindParam(":email", $_POST["email"]);
          $statement->execute();
          $user = $statement->fetch(PDO::FETCH_ASSOC);

          session_start();
          $_SESSION["user"] = $user;

          header("Location: logueado.php");
      }
    }
  }
?>
<!-- <form method="POST" action="resgister.php">
    <label for="name">Nombre de usuario</label><br>
    <input type="text" name="username" placeholder="Ingresa un nombre de usuario"><br>
    <label for="email">Ingresa un correo</label><br>
    <input type="email" name='email' placeholder="Ingresa tu correo"><br>
    <label for="password">Ingresa una contraseña</label><br>
    <input type="password" name="password" placeholder="Ingresa contraseña"><br>
    <input type="submit" value="Enviar">
</form> -->
<?php require "./partials/header.php"?>
<section class="form-register">
<div class="container-register">
    <h2 class="card-title">Registro</h2>
    <div class="container-form">
        <?php if ($error): ?>
        <p class="text-error">
            <?= $error ?>
        </p>
        <?php endif ?>
        <form method="POST" action="register.php">
            <div class="card-option">
                <label for="name" class="labels">Nombre:</label>
                <div class="container-input">
                    <input id="name" type="text" class="input" name="name" autocomplete="name" autofocus>
                </div>
            </div>
            <div class="card-option">
                <label for="email" class="labels">Email:</label>
                <div class="container-input">
                    <input id="email" type="email" class="input" name="email" autocomplete="email" autofocus>
                </div>
            </div>
            <div class="card-option">
                <label for="password" class="labels">Contraseña:</label>

                <div class="container-input">
                    <input id="password" type="password" class="input" name="password" autocomplete="password"autofocus>
                </div>
            </div>
            <div class="card-option">
                <div class="submit-form">
                    <button type="submit" class="btn">Enviar</button>
                </div>
            </div>
        </form>
</div>
</div>
</section>

<?php require "./partials/footer.php"?>
