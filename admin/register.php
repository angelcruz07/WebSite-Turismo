<?php 
    require "./config/database.php";
    $error = null;

    if ( $_SERVER['REQUEST_METHOD'] == "POST") { 
        if(empty( $_POST['username']) || empty( $_POST['email']) || empty( $_POST['password'])) { 
            $error = "Por Favor rellena los campos";
        }else if (!str_contains($_POST['email'], '@')) { 
            $error = "Por favor ingresa un formato de Email correcto";
        }else {
            $database = new Database();  // Crear una instancia de la clase Database
            $conn = $database->connect();  // Obtener la conexión
            $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
            $statement->bindParam(":email", $_POST["email"]);
            $statement->execute();

        if ($statement -> rowCount() > 0){ 
            $error = "Este email ya esta registrado"; 
        }else { 
         $conn
          ->prepare("INSERT INTO users (username, email, password, rol_id) VALUES (:username, :email, :password, 2)")
          ->execute([
            ":username" => $_POST["username"],
            ":email" => $_POST["email"],
            ":password" => password_hash($_POST["password"], PASSWORD_BCRYPT),
          ]);
          $statement = $conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
          $statement->bindParam(":email", $_POST["email"]);
          $statement->execute();
          $user = $statement->fetch(PDO::FETCH_ASSOC);

          session_start();
          $_SESSION["username"] = $user;
          header("Location: login.php");
      }
    }
  }
?>

<?php require "./partials/header.php"?>

<section class="form-register">
<div class="container-register">
    <h2 class="card-title">Crear cuenta</h2>
    <div class="container-form">
        <?php if ($error): ?>
        <p class="text-error">
            <?= $error ?>
        </p>
        <?php endif ?>
        <form method="POST" action="register.php">
            <div class="card-option">
                <label for="username" class="labels">Nombre:</label>
                <div class="container-input">
                    <input id="username" type="text" class="input" name="username" autocomplete="name" autofocus>
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
                    <button type="submit" class="btn">Registrate</button>
                </div>
            </div>
        </form>
      </div>
    </div>
</section>
<?php require "./partials/footer.php"?>
