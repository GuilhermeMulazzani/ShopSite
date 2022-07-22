<?php
include_once './includes/head.php';
include_once './includes/header.php';
include_once './includes/footer.php';

?>

<body id="login">
    <div id="card-login" style="width: 30rem ;" class="card container">
     <h4><b>Boas Vindas ao Grande AnimalVerse</b></h4>

     <form id="formulario-login" action="./consulta.php" method="post">
        <input class="input-group-text container login-input" type="text" placeholder="Insira o seu Usuário" name="nome"/>
        <input class="input-group-text container login-input" type="text" placeholder="Insira a sua Senha" name="senha"/>
        <div id="entsai" class="container" >
        <button id="entr-btn" type="button" class="btn btn-primary container  btn-login">Entrar</button>
        <button id="login-btn" type="button" class="btn btn-primary container  btn-login"> Cadastrar</button>
        </div>
    </form>
    </div>
</body>