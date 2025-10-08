<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto | Tcerick</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #0f172a;
      color: #f1f5f9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      background: #1e293b;
      padding: 2rem 3rem;
      border-radius: 1rem;
      box-shadow: 0 0 20px rgba(0,0,0,0.4);
      max-width: 500px;
      width: 100%;
    }

    h1 {
      text-align: center;
      color: #38bdf8;
      margin-bottom: 1.5rem;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    label {
      font-weight: 600;
      font-size: 0.9rem;
    }

    input, textarea {
      width: 100%;
      padding: 0.8rem;
      border: none;
      border-radius: 0.5rem;
      background: #334155;
      color: #f8fafc;
      font-size: 0.95rem;
      outline: none;
      transition: 0.3s;
    }

    input:focus, textarea:focus {
      background: #475569;
    }

    textarea {
      resize: none;
      height: 120px;
    }

    button {
      background: #38bdf8;
      color: #0f172a;
      padding: 0.9rem;
      font-size: 1rem;
      font-weight: bold;
      border: none;
      border-radius: 0.5rem;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #0ea5e9;
    }

    .success-message {
      display: none;
      text-align: center;
      margin-top: 1rem;
      color: #22c55e;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Contáctanos</h1>
    <form id="contactForm" action="procesar_contacto.php" method="POST">
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

      <label for="email">Correo electrónico</label>
      <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>

      <label for="asunto">Asunto</label>
      <input type="text" id="asunto" name="asunto" placeholder="Motivo del mensaje" required>

      <label for="mensaje">Mensaje</label>
      <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>

      <button type="submit">Enviar</button>
      <p class="success-message" id="successMessage">¡Mensaje enviado correctamente!</p>
    </form>
  </div>

  <script>
    // Validación básica y mensaje de confirmaci
    document.getElementById("contactForm").addEventListener("submit", function(event){
      event.preventDefault(); // Evita el envío real (solo efecto visual)
      document.getElementById("successMessage").style.display = "block";
      this.reset();
      setTimeout(() => {
        document.getElementById("successMessage").style.display = "none";
      }, 4000);
    });
  </script>
</body>
</html>
