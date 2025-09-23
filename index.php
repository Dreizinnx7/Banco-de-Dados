<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Banco de Dados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        form.cadastro-form {
            background-color: #fff;
            padding: 20px;
            max-width: 400px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        form.cadastro-form h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form.cadastro-form input[type="text"],
        form.cadastro-form input[type="password"],
        form.cadastro-form input[type="number"],
        form.cadastro-form input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form.cadastro-form input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        form.cadastro-form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form class="cadastro-form">
        <h3>Cadastro</h3>
        <input type="text" placeholder="Login" id="login" />
        <input type="password" placeholder="Senha" id="senha" />
        <input type="number" placeholder="Número de telefone" id="numeroTelefone" />
        <input type="email" placeholder="Email" id="email" />
        <input type="submit" value="Enviar" onclick="logar(); return false;" />
    </form>

    <script>
        function logar() {
            const login = document.getElementById('login').value;
            const senha = document.getElementById('senha').value;
            const telefone = document.getElementById('numeroTelefone').value;
            const email = document.getElementById('email').value;
            console.log({ login, senha, telefone, email });
            alert('Dados enviados! Veja o console.');
        }
    </script>
</body>
</html>
