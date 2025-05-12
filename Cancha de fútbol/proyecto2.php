<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canchas de fútbol</title>
    <link rel="stylesheet" href="proyecto2.css">
</head>
<body>
    
    <div class="header">
        <div class="titulo">
            <h1>CANCHAS MIRANDA</h1><br>
        </div>

        
        <br>
    </div>

    <div class="a">
    <div class="b">
        <img src="inscripción.png" alt="inscripción" style="width: 45px; height: 45px;">
        <input type="button" id="solicitar-turno" value="Solicitar turno"> <br>

        <img src="trofeo.png" alt="trofeo" style="width: 45px; height: 45px;">
        <input type="button" id="inscripciones" value="Inscripciones"> <br>

        <img src="medalla.png" alt="medalla" style="width: 45px; height: 45px;">
        <input id="torneo" value="Torneo">
    </div>
    <div class="c">
    <script>
        document.getElementById('solicitar-turno').addEventListener('click', function() {
            if (document.getElementById('form-fondo')) return;

            const fondo = document.createElement('div');
            fondo.id = 'form-fondo';

            const form = document.createElement('div');
            form.id = 'turno-form';
            form.innerHTML = `
                <span class="close-btn" id="close-form">&times;</span>
                <h3>Solicitar Turno</h3><br>
                <h5>Alias: facundodiaz<h5><br><br>


                <form action="turno.php" method="POST" enctype="multipart/form-data">
                <label>Nombre:</label><br>
                <input type="text" name="nombre" required><br><br>
                
                <label>Cancha:</label><br>
                <select name="cancha" required>
                    <option value="Cancha 1">Cancha 1</option>
                    <option value="Cancha 2">Cancha 2</option>
                    <option value="Cancha 3">Cancha 3</option>
                    <option value="Cancha 4">Cancha 4</option>
                </select><br><br>
                

                <label>Fecha:</label><br>
                <input type="date" name="fecha" required><br><br>
                <p>(La fecha y la hora funcionaría con un select a la base de datos)<p><br><br>
                <label>Hora:</label><br>
                <input type="time" name="hora" required><br><br>

                <label>Subir comprobante:</label><br>
                <input type="file" name="imagen" accept="image/*"><br><br><br><br>
                
                
                <button type="submit">Enviar</button>
                </form>`;

            fondo.appendChild(form);
            document.body.appendChild(fondo);

            document.getElementById('close-form').addEventListener('click', () => {
                fondo.remove();
            });
        });
        
    </script>


    <script>
        document.getElementById('inscripciones').addEventListener('click', function() {
            if (document.getElementById('form-fondo')) return;

            const fondo = document.createElement('div');
            fondo.id = 'form-fondo';

            const form = document.createElement('div');
            form.id = 'turno-form';
            form.innerHTML = `
                <span class="close-btn" id="close-form">&times;</span>
                <h3>Inscripción a torneo relampago</h3><br>
                <h5>Alias: facundodiaz<h5><br><br>
                

                <form action="inscripciones.php" method="POST" enctype="multipart/form-data">
                <label>Nombre del capitán:</label><br>
                <input type="text" name="nombre_cap" required><br><br>
                
                <label>Nombre del subcapitán:</label><br>
                <input type="text" name="nombre_sub" required><br><br>
                
                <label>Teléfono del capitán:</label><br>
                <input type="number" name="tel_cap" required><br><br>

                <label>Teléfono del subcapitán:</label><br>
                <input type="number" name="tel_sub" required><br><br>

                <label>Subir comprobante:</label><br>
                <input type="file" name="imagen" accept="image/*"><br><br><br><br>
                
                
                <button type="submit">Registrarme</button>
                </form>`;

            fondo.appendChild(form);
            document.body.appendChild(fondo);

            document.getElementById('close-form').addEventListener('click', () => {
                fondo.remove();
            });
        });
        

    </script>


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cancha";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa";
    } catch(PDOException $e) {
        echo "Fallo la conexión: " . $e->getMessage();
    }
    ?>
    </div>
    </div>
</body>
<footer>
    <h1>Contacto:</h1>
</footer>
</html>
