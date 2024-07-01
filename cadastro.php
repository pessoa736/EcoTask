<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles.css">
</head>
<body>
    <div class="container">
        <form action="main.php" method="POST">
            
            <label for="name">nome:</label><br>
            <input type="text" id="name" name="name"><br>
            
            <label for="email">email:</label><br>
            <input type="text" id="email" name="email"><br>
            
            <label for="cemail">confime seu email:</label><br>
            <input type="text" id="cemail" name="cemail"><br>
            
            <label for="senha">senha:</label><br>
            <input type="password" id="senha" name="senha"><br>

            <label for="csenha">confirme sua senha:</label><br>
            <input type="password" id="csenha" name="csenha"><br>
                    
            <input type="submit" value="sign">
        </form>    
    </div>
</form>
</body>
</html>