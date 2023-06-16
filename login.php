<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, black);
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px; 
            border-radius: 15px; 
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        button:hover{
            background-color:deepskyblue;
        }

    </style>
</head>
<body>
      <div>
      <center>
        <h1>Login</h1>
        <form id="login" action="logado.php" method="POST">
         <input type="text" placeholder="Nome" id="login" required>
         <br><br>
         <input type="password" placeholder="Senha" id="senha" required>
         <br><br>
         <button>Entrar</button>
    </div>
 </form>
</center>
</body>
</html>
