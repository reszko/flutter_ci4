<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API Rest com Flutter e CodeIgniter</title>

</head>

<body>

    <div class="container">
        <h3>Edição de Usuário</h3>

        <div class="col-sm-4">

            <?php echo form_open('Usuarios/store') ?>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" class="form-control" name="nome" value="<?php echo $usuario['nome']  ?>">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="status">
                    <option value="1" <?php echo $usuario['status'] == 1 ? 'selected' : '' ?>>Liberado</option>
                    <option value="0" <?php echo $usuario['status'] == 0 ? 'selected' : '' ?>>Proibido</option>
                    </select>
            </div>
            <button class="btn btn-success" type="submit">Salvar</button>
            <input type="hidden" value="<?php echo $usuario['id']?>" name="id">
            <?php form_close() ?>
        </div>

    </div>

</body>

</html>