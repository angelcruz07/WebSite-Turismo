-- Active: 1690594507692@@127.0.0.1@3306@users
<?php 
    require "database.php";

// Variable para declarar errores en el llenado
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

      <div class="card">
        <div class="card-header">Registro</div>
        <div class="card-body">
          <?php if ($error): ?>
            <p class="text-danger">
              <?= $error ?>
            </p>
          <?php endif ?>
          <form method="POST" action="register.php">
            <div class="">
              <label for="name" class="">Name</label>

              <div class="col-md-6">
                <input id="name" type="text" class="" name="name" autocomplete="name" autofocus>
              </div>
            </div>

            <div class="">
              <label for="email" class="">Email</label>

              <div class="col-md-6">
                <input id="email" type="email" class="" name="email" autocomplete="email" autofocus>
              </div>
            </div>

            <div class="">
              <label for="password" class="">Password</label>

              <div class="">
                <input id="password" type="password" class="form-control" name="password" autocomplete="password" autofocus>
              </div>
            </div>

            <div class="">
              <div class="">
                <button type="submit" class="">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>


