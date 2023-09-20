<?php 
    require "database.php";

    session_start();

    if(isset($_GET['cerrar_sesion'])){ 
        session_unset(); 
        session_destroy();
    }

    if(isset($_SESSION['rol'])){ 

        switch($_SESSION['rol']){ 
            case 1:
                header('location: admin.php');
            break;
            // Reder
            case 2:
            header('location: logueado.php');
            break;
            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){ 
        $username =  $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT * FROM  users WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        if($row == true){ 
            //validar el rolx
            $rol = $row[4];
            $_SESSION['rol'] = $rol;
            switch($_SESSION['rol']){ 
                case 1:
                    header('location: admin.php');
                break;
                // Reder
                case 2:
                header('location: logueado.php');
                break;
                default:
            }


        }else { 
            // No hixo mach con algun rol
            echo "El usuario o contraseña son incorectos";
        }

}



     
?>



<?php 
//  require "./partials/header.php"
 ?>


<form action="#" method="POST">

<label for="username">Nombre de usuario</label>
<input type="text" name="username">
<label for="password">Contraseña</label>
<input type="password"  name="password">

<input type="submit" value="Iniciar Sesion">

</form>

<?php  
// require "./partials/footer.php"
?>
