<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackeo de Instagram - Broma</title>
    <style>
        /* Estilo general de pantalla tipo "hackers" */
        body {
            background-color: #000;
            color: #0f0;
            font-family: 'Courier New', Courier, monospace;
            font-size: 16px;
            overflow: hidden;
            margin: 0;
            padding: 20px;
        }

        /* Efecto de glitch visual en el texto */
        .glitch {
            color: #0f0;
            text-shadow: 1px 0 10px #0f0, -1px 0 10px #ff0, 0 0 10px #f00;
        }

        /* Fuente de consola de película */
        #hackText {
            white-space: pre-line;
            font-size: 18px;
            margin-top: 20px;
            height: 60vh;
            overflow-y: auto;
            border: 2px solid #0f0;
            padding: 10px;
        }

        /* Barra de progreso para dramatismo */
        .progress-bar {
            background-color: #111;
            border: 2px solid #0f0;
            width: 100%;
            height: 20px;
            margin: 10px 0;
        }

        .progress {
            background-color: #0f0;
            height: 100%;
            width: 0;
            animation: loading 5s linear forwards;
        }

        /* Efecto de la barra de progreso */
        @keyframes loading {
            from { width: 0; }
            to { width: 100%; }
        }

        /* Estilos de entrada */
        input, button {
            font-family: 'Courier New', Courier, monospace;
            font-size: 18px;
            padding: 10px;
            background-color: #222;
            color: #0f0;
            border: 2px solid #0f0;
        }

        button:hover {
            background-color: #0f0;
            color: #000;
        }

        /* Animación de escritura tipo máquina de escribir */
        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        .typewriter {
            display: inline-block;
            border-right: 2px solid #0f0;
            white-space: nowrap;
            overflow: hidden;
            width: 100%;
        }
    </style>
</head>
<body>

    <h1 class="glitch">Iniciando hackeo a Instagram...</h1>

    <!-- Formulario de entrada -->
    <div id="inputSection">
        <label for="username">Ingresa la cuenta de Instagram a hackear:</label><br>
        <input type="text" id="username" placeholder="@nombre_cuenta"><br><br>
        <button onclick="startHack()">Iniciar Hackeo</button>
    </div>

    <!-- Área donde se mostrarán los mensajes del hackeo -->
    <div id="hackText"></div>

    <!-- Barra de progreso falsa -->
    <div class="progress-bar">
        <div id="progress" class="progress"></div>
    </div>

    <script>
        let username = "";
        let currentMessage = 0;

        // Simulación de mensajes en pantalla
        const messages = [
            "Escaneando puertos abiertos en el servidor de Instagram...",
            "Puertos vulnerables encontrados: 8080, 443, 8443",
            "Aplicando fuerza bruta para romper cifrado SSL...",
            "Cifrado SSL roto con éxito",
            "Bypass de firewall activado...",
            "Firewall desactivado",
            "Inyectando código SQL malicioso en la base de datos...",
            "Inyección SQL completada",
            "⚠ ALERTA: Contramedidas de seguridad activadas ⚠",
            "Contramedidas esquivadas con éxito",
            "Localizando cuenta objetivo en la base de datos...",
            "Cuenta '@' + username + ' encontrada'",
            "Descifrando contraseña de usuario...",
            "Contraseña descifrada: 'NoCaigasEnLaBroma123'",
            "Simulando acceso total a la cuenta...",
            "Acceso completo a la cuenta obtenido",
            "¡¡Felicidades!! ¡Acabas de ser hackeado... pero es una broma! 😄"
        ];

        // Función para iniciar el proceso de hackeo
        function startHack() {
            username = document.getElementById("username").value;
            if (username === "") {
                alert("Por favor, ingresa un nombre de cuenta.");
                return;
            }

            // Ocultar el formulario
            document.getElementById("inputSection").style.display = "none";
            document.querySelector(".progress-bar").style.display = "block"; // Mostrar barra de progreso
            setTimeout(showNextMessage, 2000);
        }

        // Función para mostrar los mensajes uno por uno
        function showNextMessage() {
            if (currentMessage < messages.length) {
                const hackTextDiv = document.getElementById("hackText");

                let message = messages[currentMessage].replace("@" + username + " encontrada", "@" + username + " encontrada");

                let newMessageDiv = document.createElement("div");
                newMessageDiv.classList.add("typewriter");
                newMessageDiv.style.width = "100%";
                newMessageDiv.textContent = message;

                hackTextDiv.appendChild(newMessageDiv);
                currentMessage++;

                let delay = Math.random() * 2000 + 1000; // Simula tiempos de espera aleatorios
                setTimeout(showNextMessage, delay);
            } else {
                // Ocultar barra de progreso una vez que todo termina
                document.querySelector(".progress-bar").style.display = "none";
            }
        }
    </script>

</body>
</html>

