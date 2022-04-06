<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#353858">
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- File esterni -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles\style.css">

    <script src="scripts\data.js" defer></script>
    <script src="scripts\ui.js" defer></script>

    <title>Game Night</title>
  </head>
  <body>

    <section id="landing" class="on onopacity">
      <div class="header">
        <img src="media/LogoGameNight.png">
        <h1>Caccia all'uomo</h1>
      </div>
      <div class="content">
        <h4>Inserisci il codice squadra</h4>
        <input type="number" id="logincode">
        <button onclick="checklogin()">Accedi</button>
        <div onclick="sectiontoggle('rules')"><p>Regole</p><i class="bi bi-book"></i></div>
      </div>
    </section>

    <section id="landing" class="">
      <div class="header">
        <h1>Caccia all'uomo</h1>
      </div>
      <div class="content">
        <h4>Inserisci il codice squadra</h4>
        <input type="number" id="logincode">
        <button onclick="checklogin()">Accedi</button>
        <div onclick="sectiontoggle('rules')"><p>Regole</p><i class="bi bi-book"></i></div>
      </div>
    </section>

  </body>
</html>