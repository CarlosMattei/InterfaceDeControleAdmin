<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include_once './admin/head.php'; ?>
</head>
<body>

<?php include_once './admin/navigation.php'; ?>

<?php
                $pagina = filter_input(type: INPUT_GET, var_name: 'p');
                if (empty($pagina)) {
                    include_once './admin/home.php';
                } else {
                    if (file_exists(filename: $pagina . '.php')) {
                        include_once $pagina . '.php';
                    } else {
                        echo "<div class='col-sm-12 col-md-12'>"
                        . "<div class='alert alert-danger' role='alert'>"
                        . "Erro 404, página não encontrada!"
                        . "</div>"
                        . "</div>";
                    }
                }
                ?>

</html>