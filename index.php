<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Registro de Pedidos 1.0</title>
</head>
<body>
    <br>
    <div class="container">
    <h2>Entrar no sistema</h2>
    <form id="form_login" action="login.php" method="POST">
        <?php if (isset($resultado) && $resultado ["cod"] == 0) : ?>
        <div class="alert alert-danger">
            <?php echo $resultado["msg"]; ?>
        </div>
        <?php endif; ?>

    <label for="email" class="form-label">Endereço de Email</label>
    <br>
    <input type="email" id="email" name="email" placeholder="Digite o seu Email">
    <br>
    <label for="senha" class="form-label">Senha</label>
    <br>
    <input type="password" id="senha" name="senha" placeholder="Digite a sua Senha">
    <br><br>
    <input type="submit" id="submeter" value="Entrar" class="btn btn-primary">
    
    </form>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>