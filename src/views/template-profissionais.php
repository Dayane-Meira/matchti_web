<!DOCTYPE html>
<html lang="PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../public/styles/template.css">
    <link rel="shortcut icon" href="../../public/imgs/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <h2>Match<span>TI</span></h2>
            <ul class="menu">
                <li><a href="index.html" class="menu-btn">Home</a></li>
                <li><a href="template-profissionais.php">Técnicos</a></li>
                <li><a href="#about" class="menu-btn">Sobre nós</a></li>
                <li><a href="#services" class="menu-btn">Serviços</a></li>
                <li><a href="#teams" class="menu-btn">Equipe</a></li>
                <li><a href="#contact" class="menu-btn">Contatos</a></li>
                <li><a href="login.html" class="menu-btn">Cadastra/Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="container-contents">
        <div>
            <section>
                <div class="search-container">
                    <form action="" method="get">
                        <input type="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </section>
            <?php
                include "../../conexao.php";

                $sql = "SELECT * FROM tblprofissional";
                $carregador = mysqli_query($connect, $sql);
                while ($linha=mysqli_fetch_array($carregador)) {
            ?>
            <section class="cards">
                <div class="card">
                    <span>
                        <img class="column avatar" src="../../public/imgs/peoples/pexels-pixabay-371160.jpg" alt="avatar">
                    </span>
                    <div class="column name-tec">
                        <?php echo $linha['NomeProfissional']; ?> 
                    </div>
                    <div class="column name-tec">
                        <?php echo $linha['Email']; ?> 
                    </div>
                    <div class="column area-atuacao">
                    <?php echo $linha['Celular']; ?> 
                    </div>
                    <img src="https://img.icons8.com/windows/32/000000/like--v1.png" />
                </div>
            </section>
            <?php } ?>
        </div>
    </main>
</body>

</html>