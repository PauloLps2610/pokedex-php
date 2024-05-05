<?php
include "Pokemon.php";
$controller = new Pokemon();

if (isset($_POST["submit"])) {
    $param = $_POST['pokemon'];
    if (isset($param) && $param !== '') {
        try {
            //função que retorna os dados dos pokémons

            $pokemon = $controller->getPokemon($param);
        } catch (Exception $e) {
            print_r('Erro: 404', $e->getMessage());
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Pokedéx</title>
</head>

<body>

        <img src="<?php echo $pokemon['sprites']['front_default']; ?>" alt="<?php echo $pokemon['name']; ?>">
    <h2>
        <?php echo $pokemon['id'] ?> </h2>
    <h2><?php echo $pokemon['name'] ?></h2>
    <!-- Formulário -->
    <form action="" method="post">
        <input class='input-pokemon' type="text" placeholder="Insira o nome ou ID do Pokémon" name='pokemon'>
        <br>
        <button type="submit" name="submit">Procurar</button>
    </form>
</body>

</html>