import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
// Importez les modules nécessaires
const bcrypt = require('bcrypt');
const express = require('express');
const session = require('express-session');
const app = express();

// Configuration de la session
app.use(session({
  secret: 'votre_clé_secrète',
  resave: false,
  saveUninitialized: false
}));

// Middleware pour vérifier l'authentification
const checkAuth = (req, res, next) => {
  if (req.session.isAuthenticated) {
    next(); // L'administrateur est authentifié, continuer vers la prochaine route
  } else {
    res.redirect('/login'); // L'administrateur n'est pas authentifié, rediriger vers la page de connexion
  }
};

// Route pour afficher la page de connexion
app.get('/login', (req, res) => {
  res.sendFile(__dirname + '/login.html');
});

// Route pour gérer la soumission du formulaire de connexion
app.post('/login', async (req, res) => {
  // Récupérez les informations d'identification fournies par l'administrateur
  const username = req.body.username;
  const password = req.body.password;

  // Recherchez l'administrateur dans la base de données par nom d'utilisateur
  const admin = await Admin.findOne({ username });

  if (admin) {
    // Vérifiez le mot de passe haché
    const isPasswordCorrect = await bcrypt.compare(password, admin.password);

    if (isPasswordCorrect) {
      // Authentification réussie
      req.session.isAuthenticated = true; // Définir req.session.isAuthenticated à true
      res.redirect('/dashboard'); // Rediriger vers le tableau de bord de l'administrateur après la connexion réussie
    } else {
      // Mot de passe incorrect
      res.redirect('/login?error=1'); // Rediriger vers la page de connexion avec un paramètre d'erreur
    }
  } else {
    // Administrateur introuvable
    res.redirect('/login?error=1'); // Rediriger vers la page de connexion avec un paramètre d'erreur
  }
});

// Route pour le tableau de bord de l'administrateur
app.get('/dashboard', checkAuth, (req, res) => {
  res.sendFile(__dirname + '/dashboard.html');
});

// Autres routes de l'application...

// Démarrer le serveur
app.listen(3000, () => {
  console.log('Serveur démarré sur le port 3000');
});// Importez les modules nécessaires
const bcrypt = require('bcrypt');
const express = require('express');
const session = require('express-session');
// Configuration de la session
app.use(session({
  secret: 'votre_clé_secrète',
  resave: false,
  saveUninitialized: false
}));

// Middleware pour vérifier l'authentification
function checkAuth(req, res, next) {
    if (req.session.isAuthenticated) {
        next(); // L'administrateur est authentifié, continuer vers la prochaine route
    } else {
        res.redirect('/login'); // L'administrateur n'est pas authentifié, rediriger vers la page de connexion
    }
}

// Route pour afficher la page de connexion
app.get('/login', (req, res) => {
  res.sendFile(__dirname + '/login.html');
});

// Route pour gérer la soumission du formulaire de connexion
app.post('/login', async (req, res) => {
  // Récupérez les informations d'identification fournies par l'administrateur
  const username = req.body.username;
  const password = req.body.password;

  // Recherchez l'administrateur dans la base de données par nom d'utilisateur
  const admin = await Admin.findOne({ username });

  if (admin) {
    // Vérifiez le mot de passe haché
    const isPasswordCorrect = await bcrypt.compare(password, admin.password);

    if (isPasswordCorrect) {
      // Authentification réussie
      req.session.isAuthenticated = true; // Définir req.session.isAuthenticated à true
      res.redirect('/dashboard'); // Rediriger vers le tableau de bord de l'administrateur après la connexion réussie
    } else {
      // Mot de passe incorrect
      res.redirect('/login?error=1'); // Rediriger vers la page de connexion avec un paramètre d'erreur
    }
  } else {
    // Administrateur introuvable
    res.redirect('/login?error=1'); // Rediriger vers la page de connexion avec un paramètre d'erreur
  }
});

// Route pour le tableau de bord de l'administrateur
app.get('/dashboard', checkAuth, (req, res) => {
  res.sendFile(__dirname + '/dashboard.html');
});

// Autres routes de l'application...

// Démarrer le serveur
app.listen(3000, () => {
  console.log('Serveur démarré sur le port 3000');
});
