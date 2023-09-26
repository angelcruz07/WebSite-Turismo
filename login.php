<?php
  require "database.php";
  session_start();

  $error = null;
  if (isset($_SESSION["rol"])) {
    // Si ya hay una sesión (el usuario está logueado),
    // redirige a una página que corresponda al rol del usuario
    switch ($_SESSION["rol"]) {
      case 1:
        header("Location: admin.php");
        exit();
      case 2:
        header("Location: home.php");
        exit();
      default:
        // Manejar otros roles si es necesario
    }
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"]) || empty($_POST["password"])) {
      $error = "Please fill all the fileds.";
    } else if (!str_contains($_POST["email"], "@")) {
      $error = "Email format is incorrect.";
    } else {
      $database = new Database();  // Crear una instancia de la clase Database
      $conn = $database->connect();  // Obtener la conexión  
      $statement = $conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
      $statement->bindParam(":email", $_POST["email"]);
      $statement->execute();

      if ($statement->rowCount() == 0) {
        $error = "Email incorrecto.";
      } else {
        $query = $statement->fetch(PDO::FETCH_ASSOC);

        if (!password_verify($_POST["password"], $query["password"])) {
          $error = "Password incorrecta.";
        } else {

          $rol = $query['rol_id'];
          $_SESSION['rol'] = $rol;

          switch($_SESSION['rol']){ 
            case 1:
                header('location: admin.php');
            break;
            // Reder
            case 2:
            header('location: home.php');
            break;
            default:
          }
        }
      }
    }
  }
?>

<?php 
//  require "./partials/header.php"
 ?>


<form action="#" method="POST">
<?php if ($error): ?>
            <p class="text-danger">
              <?= $error ?>
            </p>
 <?php endif ?>

<label for="email">Nombre de usuario</label>
<input type="email" name="email">
<label for="password">Contraseña</label>
<input type="password"  name="password">

<input type="submit" value="Iniciar Sesion">

</form>

<?php  
// require "./partials/footer.php"
?>
