const { response } = require('express');
const express = require('express');
const routes = express.Router();
const basePath = __dirname + "/views";

routes.get('/', (req, res) => res.sendFile(basePath + "/index.html"));
routes.get('/index.html', (req, res) => res.sendFile(basePath + "/index.html"));
routes.get('/login.html', (req, res) => res.sendFile(basePath + "/login.html"));
routes.get('/template-profissionais.php', (req, res) => res.sendFile(basePath + "/template-profissionais.php"));
routes.get('/perfil.html', (req, res) => res.sendFile(basePath + '/perfil.html'));
routes.get('/usuario.php', (req, res) => res.sendFile(basePath + '/usuario.php'));
routes.get('/cadastro-fim.html', (req, res) => res.sendFile(basePath + '/cadastro-fim.html'));

module.exports = routes;
