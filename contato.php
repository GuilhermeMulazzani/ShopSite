<?php
include_once './includes/head.php';
include_once './includes/header.php';
include_once './includes/footer.php';

?>

<body id="login">
    <div id="card-contato" style="width: 30rem ;" class="card container">
     <h4><b> Contate-nos por aqui</b></h4>

     <form id="formulario-login" action="./consulta.php" method="post">
        <textarea class="input-group-text container login-input" type="text" placeholder="Feedback" name="nome"/></textarea>
        <textarea class="input-group-text container login-input" type="text" placeholder="Seu Nome" name="nome"/></textarea>
        <textarea class="input-group-text container login-input" type="text" placeholder="Seu Email" name="nome"/></textarea>
        <textarea class="input-group-text container login-input" type="text" placeholder="Seu Telefone" name="nome"/></textarea>
        <div id="entsai" class="container" >
        <button id="entr-btn" type="button" class="btn btn-primary container  btn-login">Enviar</button>
        </div>
    </form>
    </div>
</body>