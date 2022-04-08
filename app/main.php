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
      </div>
      <div class="holder" id="teamholder">
        <div class="team">
          
          <div class="player p1">
            <h2 class="title is-4">Nome</h2>
            <button class="remove">X</button>
          </div>
          <div class="add">
            <h2>Aggiungi</h2>
            <button onclick="add(this)">+</button>
          </div>
        </div>

      </div>
    </section>
  </body>
</html>


<script>

let games=[{}];
games[0].stand=12;
games[0].player=342;
games[0].score=-5;
//postGame(games);

function postGame(games){
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let response=JSON.parse(this.responseText);
      console.log(response);
    }
  };
  xhttp.open("POST", "https://script.google.com/macros/s/AKfycbx4GRxJ30lZJXySfRzEZwdAEXP2CLeSV4GpHpvkNEuLhxABkZeQhpUKoHkKUut6v0sn/exec?r=game");
  xhttp.send(JSON.stringify(games));
}

getGame("342");

function getGame(pid){
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let response=JSON.parse(this.responseText);
      console.log(response);
    }
  };
  xhttp.open("GET", "https://script.google.com/macros/s/AKfycbx4GRxJ30lZJXySfRzEZwdAEXP2CLeSV4GpHpvkNEuLhxABkZeQhpUKoHkKUut6v0sn/exec?r=game&p="+pid);
  xhttp.send();
}

let team=document.querySelector(".team");
let player=document.querySelector(".player");
let container=document.querySelector("#teamholder");

container.appendChild(team.cloneNode(true));

function add(x){ //add new player
  x.parentNode.parentNode.appendChild(player.cloneNode(true));
}

</script>