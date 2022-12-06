<?php
$titulo_pagina = "Home";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<?php require('./modules/top-menu.php');

$query_games = "SELECT id, nome, imagem_url, valor, data_lancamento FROM jogo";
$lista_games = mysqli_query($conn, $query_games);

?>

<body>
    <div id="body-container">
        <?php require('./modules/side-menu.php') ?>
        <div id="content">
            <div id="header">RECOMENDADOS E EM DESTAQUE</div>
            <div id="game-list">
                <?php while ($jogo = mysqli_fetch_array($lista_games)) {

                    $query_plataformas = "SELECT plataforma.nome FROM plataforma INNER JOIN jogo_plataforma ON jogo_plataforma.id_plataforma = plataforma.id WHERE jogo_plataforma.id_jogo = {$jogo["id"]}";
                    $lista_plataformas = mysqli_query($conn, $query_plataformas);

                    $query_nome_idioma = "SELECT idioma.nome FROM idioma INNER JOIN jogo_idioma ON jogo_idioma.id_idioma = idioma.id WHERE jogo_idioma.id_jogo = {$jogo["id"]}";
                    $lista_nome_idiomas = mysqli_query($conn, $query_nome_idioma);

                    if ($jogo["valor"] == 0) {
                        $jogo["valor"] = "Free-to-Play";
                    } else {
                        $jogo["valor"] = "R$" . number_format($jogo["valor"], 2, ",");
                    }
                ?>
                    <a href="game.php?id=<?= $jogo["id"] ?>">
                        <div class="game">

                            <div class="photo">
                                <img src="<?= $jogo["imagem_url"] ?>" alt="<?= $jogo["nome"] ?> Photo">
                            </div>


                            <div class="info">
                                <div class="title"><?= ucwords(mb_strtolower($jogo["nome"])) ?></div>
                                <div class="platforms">
                                    <?php while ($plataforma = mysqli_fetch_array($lista_plataformas)) { ?>
                                        <div class="platform sub-block"><?= $plataforma["nome"] ?></div>
                                    <?php } ?>
                                </div>

                                <div class="idioms">
                                    <?php while ($idioma = mysqli_fetch_array($lista_nome_idiomas)) { ?>
                                        <div class="idiom sub-block"><?= $idioma["nome"] ?></div>
                                    <?php } ?>
                                </div>

                                <div class="release-date"><?=date_format(date_create($jogo['data_lancamento']), "d/m/Y")?></div>
                            </div>
                            <div class="price"><?= $jogo["valor"] ?></div>

                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>

    </div>
</body>

</html>