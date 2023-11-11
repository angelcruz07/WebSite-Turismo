<?php
require "./config/database.php";
require "./config/utilities.php";

session_start();
$error = null;

//Validacion de campos
$error = null;
if (isset($_SESSION["rol"])) {
  // Si ya hay una sesión (el usuario está logueado),
  // redirige a una página que corresponda al rol del usuario
  switch ($_SESSION["rol"]) {
    case 1:
      header("Location: admin.php");
      exit();
    case 2:
      header("Location: user/home.php");
      exit();
    default:
      // Manejar otros roles si es necesario
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"]) || empty($_POST["password"])) {
    $error = "Rellene con los datos correctos";
  } else if (!str_contains($_POST["email"], "@")) {
    $error = "Formato de email incorrecto";
  } else {
    $statement = $conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
    $statement->bindParam(":email", $_POST["email"]);
    $statement->execute();

    if ($statement->rowCount() == 0) {
      $error = "Email incorrecto.";
    } else {
      $query = $statement->fetch(PDO::FETCH_ASSOC);

      if (!password_verify($_POST["password"], $query["password"])) {
        $error = "Contraseña incorrecta.";
      } else {
        $rol = $query['rol_id'];
        $_SESSION['rol'] = $rol;

        switch ($_SESSION['rol']) {
          case 1:
            header('location: admin.php');
            break;
          case 2:
            header('location: User/home.php');
            break;
          default:
        }
      }
    }
  }
}
?>

<?php
require "../partials/header2.php";
require "../partials/navbar.php";
require "../partials/scroll-top.php";
?>

<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/login.css" type="text/css">
</head>

<body class="scroll-top">

  <section class="form-register">
    <div class="container-register">
      <h2 class="title-index">Iniciar sesion</h2>
      <div class="container-form">
        <?php if ($error) : ?>
          <p class="text-error"> <?= $error ?> </p>
        <?php endif ?>
        <form method="POST" action="#">
          <div class="card-option">
            <label for="email" class="labels">Email:</label>
            <div class="container-input">
              <input id="email" type="email" class="input" name="email" autocomplete="email" autofocus>
            </div>
          </div>
          <div class="card-option">
            <label for="password" class="labels">Contraseña:</label>
            <div class="container-input">
              <input id="password" type="password" class="input" name="password" autocomplete="password" autofocus>
            </div>
          </div>
          <div class="card-option">
            <div class="submit-form">
              <button type="submit" class="btn">Iniciar sesion</button>
            </div>
          </div>
          <div class="register">
            <p class="parraf">Aún no tienes cuenta? <a href="register.php" class="redirect-register">Registrarme</a></p>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php require "../partials/footer2.php" ?>
