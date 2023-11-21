<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="css/teladeregistro.css">
    <link rel="stylesheet" href="css/media.query.css">
</head>
<body>
    <main>
        <section id="login">
            <div id="imagen"></div>
            <div id="formulario">
                <h1>Cadastre-se</h1>
                <p>Preencha os dados abaixo</p>
                <form action="fazercompra.php" method="post">
                    <div class="campo">
                        <Label for="inome">Nome:</Label>
                        <input type="email" name="nome" id="nome" 
                        placeholder="Nome completo" required maxlength="30"> 
                    </div>
                    <div class="campo">
                        <Label for="inome">CPF</Label>
                        <input type="email" name="cpc" id="icpf" 
                        placeholder="Seu CPF" required maxlength="30"> 
                    </div>
                    <div class="campo">
                        <Label for="idatanascimento">Datanasciemento:</Label>
                        <input type="email" name="datanasciemento" id="idatanasciemento" 
                        placeholder="Data nascimento" required maxlength="30"> 
                    </div>
                    <div class="campo">
                        <Label for="iemail">email</Label>
                        <input type="email" name="email" id="iemail" 
                        placeholder="E-mail" required maxlength="50"> 
                    </div>
                    <div class="campo">
                        <Label for="isenha">Senha:</Label>
                        <input type="password" name="senha" id="isenha" 
                        placeholder="Defina uma senha" autocomplete="current-password" 
                        required minlength="8" maxlength="18">
                    </div>
                    <div class="campo">
                        <Label for="iendereço">Endereço:</Label>
                        <input type="password" name="endereco" id="iendereco" 
                        placeholder="Endereço" autocomplete="current-password" 
                        maxlength="70">
                    </div>
                    <div class="campo">
                        <Label for="isenha">CEP:</Label>
                        <input type="password" name="cep" id="icep" 
                        placeholder="CEP" autocomplete="current-password" 
                        maxlength="70">
                    </div>
                    
                    <input type="submit" name="produto" value="<?php echo $_GET['produto'];?>">
                </form>
            </div>
        </section>
    </main>
</body>
</html>