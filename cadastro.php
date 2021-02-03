<?php include 'header.html';?>

<form action="valida_cadastro" method='POST' autocomplete='on' class='cadastro'>

    <fieldset class='info_login'>

        <!-- E-mail e senha que serão passadas para realizar o login -->
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" class='email' placeholder='Ex: teste@teste.com.br'><br>

        <label for="re_email">Repetir e-mail: </label>
        <input type="re_email" name="re_email" id="re_email" class='re_email'><br>

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" placeholder='Minimo 8 caracteres'><br>

        <label for="re_senha">Senha: </label>
        <input type="re_password" name="re_senha" id="re_senha" placeholder='Minimo 8 caracteres'><br>
        <!-- ------------Fechamento e-mail e senha--------------- -->


        <!-- ---------------Dados cadastrais--------------------- -->

        <fieldset class='dados_cadastrais'>

            <legend>Dados cadastrais: </legend>

            <label for="nome">Nome</label>
            <input type="text" name='nome' placeholder='Ex: João' id='nome'><br>

            <label for="sobrenome">Sobrenome</label>
            <input type="text" name='sobrenome' placeholder='Ex: Silva' id='sobrenome'><br>

            <label for="senha">Repetir senha: </label>
            <input type="password" name="senha" id="senha" placeholder='Minimo 8 caracteres'><br>

            <label for="telefone">Telefone / Celular: </label>
            <input type="tel" name="telefone" id="telefone" placeholder='(00)99999-9999'><br>

        </fieldset>
        <!-- ----------------Fim dados cadastrais------------------  -->
 

</form>

<?php include 'footer.html';?>