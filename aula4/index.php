<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view/css/h_estilo.css" />
    <script src="view/js/h_script.js"></script>
    <title>Aula 4</title>
</head>

<body>
    <form id="acesso" method="POST" action="control/cad.php" name="acesso">
        <!--      
Login:
<input type="text" id="cxlogin"/>
</br>
Senha:
<input type="password" id="cxsenha"/>
</br>
-->
        <h1> Perguntas:</h1>

        </br>
        Qual é o nome mais comum no Brasil?
        </br>

        </br>
        <input type="radio" name="pg1" value="errado">
        Maria.
        </br>

        </br>
        <input type="radio" name="pg1" value="certo">
        Carlos.
        </br>

        </br>
        <input type="radio" name="pg1" value="errado">
        João.
        </br>

        </br>
        Como devemos matar aula?
        </br>
        
        </br>
        <input type="radio" name="pg2" value="errado">
        Matando professor.
        </br>

        </br>
        <input type="radio" name="pg2" value="errado">
        Se matando.
        </br>

        </br>
        <input type="radio" name="pg2" value="certo">
        só não estudando.
        </br>

        </br>
        Eai guei ta tão sério, pq?
        </br>
        
        </br>
        <input type="radio" name="pg3" value="certo">
        pq sou guei.
        </br>

        </br>
        <input type="radio" name="pg3" value="errado">
        neda sua conta.
        </br>

        </br>
        <input type="radio" name="pg3" value="errado">
        te perguntei?
        </br>
        </br>
        te perguntei?
        </br>
        
        </br>
        <input type="radio" name="pg4" value="errado">
        sim, sim pô.
        </br>

        </br>
        <input type="radio" name="pg4" value="certo">
        .
        </br>

        </br>
        <input type="radio" name="pg4" value="errado">
        acabou de pergunta.
        </br>

        <button type="submit" name="submit">verifica</button>

        <!--  <button onclick="acessar()">acessar</button>-->
    </form>
</body>

</html>