<?php session_start(); ?>
<!DOCTYPE html>
<html lang="PT">

<head>
    <meta name="UTF-8">
    <link rel="stylesheet" href="../../public/styles/usuario.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="header__img">
            <img src="../../public/imgs/logo.jpg" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">Match TI</span>
                </a>

                <div class="nav__list">
                    <a href="#" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Sobre mim</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Serviços</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-message-square-detail nav__icon'></i>
                        <span class="nav__name">Messagens</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-bookmark nav__icon'></i>
                        <span class="nav__name">Favoritos</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-folder nav__icon'></i>
                        <span class="nav__name">Agendados</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-bar-chart-alt-2 nav__icon'></i>
                        <span class="nav__name">Configuração</span>
                    </a>
                </div>
            </div>

            <a href="../../logout.php" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Sair</span>
            </a>
        </nav>
    </div>

    <h1>Seja bem vindo(a) a Match TI</h1>

    <div class=" formula">
        <form action="atualizarcadastro.php" mathod="POST">
        <input type="hidden" name="idProfissional" value="<?php $_SESSION['IdProfissional'] ?>">
            <div>
                <input type="image" src="" alt="">
            </div>

            <div>
                <fieldset class="field-top">
                    <div class="form-row">
                        <div>
                            <label>Nome:</label>
                            <input type="text" placeholder="Nome" name="NomeProfissional" required value="<?php $_SESSION['NomeProfissional']; ?>">

                            <label>CPF:</label>
                            <input type="text" placeholder="CPF" name="Cpf" required value="<?php $_SESSION['Cpf']; ?>">
                        </div>
                    </div>
    
                    <div class="form-row">
                        <div>
                            <label>Data de Nascimento:</label>
                            <input type="text" required name="DataNascimento" value="<?php $_SESSION['DataNascimento']; ?>">
    
                        </div>
                    </div>                    
                </fieldset>
                
                <fieldset class="field-bottom">
                    <div class="group-form">
                    
                        <label>Telefone:</label>
                        <input type="tel" placeholder="Telefone" name="Telefone" value="<?php $_SESSION['Telefone']; ?>">
        
                        <label>Cel:</label>
                        <input type="tel" placeholder="Celular" name="Celular" value="<?php $_SESSION['Celular']; ?>">
        
                        <label>Email:</label>
                        <input type="text" placeholder="Seu email" name="Email" value="<?php $_SESSION['Email']; ?>">
                    </div>
                </fieldset>


            </div>
            <fieldset>
                <div class="group-form">
                    <label>Fale um pouquinho de você:</label><br />
                    <input type="text" cols="120" rows="6" placeholder="biografia" name="habilidades" required value="<?php $_SESSION['DescricaoHabilidades']; ?>"></input>
                </div>
                <div class="div-buttons-form">
                    <button type="submit">Salvar</button>
                    <button class="cancel" type="reset">Cancelar</button>
                </div>
            </fieldset>

        </form>
    </div>

    <!--===== JAVASCRIPT MAIN =====-->
    <script>
        /*===== SHOW NAVBAR  =====*/
        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    // show navbar
                    nav.classList.toggle('show')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE  =====*/
        const linkColor = document.querySelectorAll('.nav__link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

    </script>
</body>

</html>