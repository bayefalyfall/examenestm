<!DOCTYPE html>
<html>
<head>
  <title>Page d'accueil</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h1>Authentification</h1>
    <style>.container {
  width: 300px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

h1 {
  text-align: center;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
}

button[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}</style>
    <form id="login-form">
      <input type="text" id="username" placeholder="Nom d'utilisateur" required>
      <input type="password" id="password" placeholder="Mot de passe" required>
      <button type="submit">Se connecter</button>
    </form>
  </div>

  <script src="script.js"></script>
  <a href="/accueil" class= "btn btn-primary">Ma page d'accueil</a>
  </body>
  </html>