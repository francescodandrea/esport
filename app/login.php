<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#353858">
    <!-- bulma -->
    <link href="https://jenil.github.io/bulmaswatch/darkly/bulmaswatch.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="app\styles\style.css">
    <script src="app\scripts\data.js" defer></script>
    <script src="app\scripts\ui.js" defer></script>
    <title>Login</title>
  </head>
  <body>
    <section id="landing" class="on onopacity">
      <div class="header">
        <h1>Tag reader</h1>
        <img src="app\media/OratorioSPT_BIANCO.png">
      </div>
      <div class="holder">
        <div class="content">
          <h4>Accedi</h4>
        </div>
        <div class="field centerflex">
          <p class="control has-icons-left has-icons-right w3">
            <input class="input" type="email" placeholder="Email">
            <span class="icon is-small is-left">
              <i class="bi bi-envelope"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="bi bi-check"></i>
            </span>
          </p>
        </div>
        <div class="field centerflex">
          <p class="control has-icons-left w3">
            <input class="input" type="password" placeholder="Password">
            <span class="icon is-small is-left">
              <i class="bi bi-lock"></i>
            </span>
          </p>
        </div>
        <div class="field centerflex">
            <button class="button is-primary">Accedi</button>
        </div>
      </div>
    </section>
  </body>
</html>