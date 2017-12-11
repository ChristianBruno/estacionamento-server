<!doctype html>
<html lang="pt-BR">
<head>
    <title>Simulador de Sensores</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>

<body>

<nav class="navbar navbar-light bg-primary">
    <span class="navbar-brand mb-0 h1 text-white">Simulador de Sensores</span>
</nav>

<div class="container" style="margin-top: 20px;">
    <form action="simulador" method="post">
        <div class="form-group">
            <label>Sensor 1</label>
            <?php
            $options = array(
                '1' => 'ON',
                '0' => 'OFF'
            );

            $class = 'class="form-control"';
            echo form_dropdown('s1', $options, $leituras->s1, $class);
            ?>
        </div>
        <div class="form-group">
            <label>Sensor 2</label>
            <?php
            $options = array(
                '1' => 'ON',
                '0' => 'OFF'
            );
            $class = 'class="form-control"';
            echo form_dropdown('s2', $options, $leituras->s2, $class);
            ?>
        </div>
        <div class="form-group">
            <label>Sensor 3</label>
            <?php
            $options = array(
                '1' => 'ON',
                '0' => 'OFF'
            );
            $class = 'class="form-control"';
            echo form_dropdown('s3', $options, $leituras->s3, $class);
            ?>
        </div>
        <button class="btn btn-primary"><span class="glyphicon glyphicon-name"></span> Atualizar</button>
    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>