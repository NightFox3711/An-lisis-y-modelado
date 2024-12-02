


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
    <style>
        /* Estilos generales */
        html, body * { box-sizing: border-box; font-family: 'Open Sans', sans-serif; }

        body {
          background: linear-gradient(rgba(240,240,240,0.9), rgba(240,240,240,0.9)), 
          url(https://dl.dropboxusercontent.com/u/22006283/preview/codepen/sky-clouds-cloudy-mountain.jpg) no-repeat center center fixed;
          background-size: cover;
        }

        .container {
          width: 100%;
          padding-top: 60px;
          padding-bottom: 100px;
        }

        .frame {
          height: 650px;
          width: 430px;
          background: linear-gradient(rgba(50,50,50,0.9), rgba(20,20,20,0.9));
          margin-left: auto;
          margin-right: auto;
          border-top: solid 1px rgba(255,255,255,0.5);
          border-radius: 10px;
          box-shadow: 0px 4px 10px rgba(0,0,0,0.3);
          overflow: hidden;
          transition: all .5s ease;
        }

        h1 {
          color: #ffffff; /* Blanco */
          text-align: center;
          padding-top: 20px;
          font-weight: 300;
        }

        .slogan-container {
          background-color: #ff0000; /* Rojo */
          padding: 10px;
          border-radius: 5px;
          margin: 15px 20px;
          text-align: center;
          box-shadow: 0px 2px 5px rgba(0,0,0,0.2);
        }

        .slogan {
          color: #ffffff; /* Blanco */
          font-size: 1rem;
          font-style: italic;
          margin: 0;
          font-weight: 600;
        }

        .form-styling, select.form-styling {
          width: 100%;
          height: 35px;
          padding-left: 15px;
          border: none;
          border-radius: 20px;
          margin-bottom: 20px;
          background: rgba(200,200,200,0.3); /* Gris translúcido */
          font-size: 13px;
          color: #ffffff; /* Blanco */
        }

        .form-signin, .form-signup {
          width: 430px;
          padding: 55px 37px;
          font-size: 16px;
          font-weight: 300;
        }

        /* Estilos del botón */
        button, .btn-signin, .btn-register {
          width: 100%;
          height: 40px;
          border: none;
          border-radius: 20px;
          background: #ff0000; /* Rojo */
          color: #ffffff; /* Blanco */
          font-weight: 700;
          text-transform: uppercase;
          transition: transform 0.3s ease, background 0.3s ease;
          cursor: pointer;
        }

        button:hover, .btn-signin:hover, .btn-register:hover {
          background: #cc0000; /* Rojo más oscuro */
          transform: scale(1.05);
        }

        button:active, .btn-signin:active, .btn-register:active {
          transform: scale(0.95);
        }

        /* Texto en negrita para "Iniciar Sesión" */
        .btn-signin span {
          font-weight: bold; /* Negrita para el texto */
        }

        /* Estilo del enlace de registro */
        .register-link {
          display: block;
          text-align: center;
          margin-top: 20px;
        }

        /* Separación entre botones */
        .btn-register {
          margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="frame">
            <h1>Iniciar Sesión</h1>
            <div class="slogan-container">
                <p class="slogan">Bienvenido a <b>SC Motors</b> - "Moviéndote hacia el futuro con confianza"</p>
            </div>
            <form class="form-signin" method="POST" action="../Controller/LoginController.php">
                <label for="username" style="color: #ffffff;">Usuario:</label>
                <input class="form-styling" type="text" id="username" name="username" required>
                
                <label for="password" style="color: #ffffff;">Contraseña:</label>
                <input class="form-styling" type="password" id="password" name="password" required>
                
                <a href="RegisterView.php" class="register-link">
                    <button class="btn-register" type="button">Registrarse</button>
                </a>
                
                <button class="btn-signin" type="submit"><span>Iniciar Sesión</span></button>
            </form>
        </div>
    </div>
</body>
</html>