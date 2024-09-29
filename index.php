<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">

        <title>Cifras</title>

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div>    

            <h1>Cadastro de Cifras</h1> 

            <form action="cadastroCifras.php" method="POST">
            Nome do Autor:<br>
            <input class="input" type="text" name="nome"><br><br>

            Nome da Música:<br>
            <input class="input" type="text" name="musica"><br><br>

            Gênero Musical:<br>
            <input class="input" type="text" name="genero"><br><br>
            
            <input class="button" type="submit" name="btn_salvar" value="Salvar">
            </form>

        </div>
    </body>
</html>