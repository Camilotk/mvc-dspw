<?php $title = "Lista de Jogadores"; include_once('template/header.php') ?>

<div class="container">
        <h1>Lista de Jogadores</h1>
        <a href="/mvc">Voltar</a>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Posição</th>
                <th scope="col">Overall</th>
                <th scope="col">Time</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($jogadores)): ?>
            <?php foreach($jogadores as $jogador): ?>
                <tr>
                    <td><?php echo $jogador->getNome() ?></td>
                    <td><?php echo $jogador->getPosicao() ?></td>
                    <td><?php echo $jogador->getOverall() ?></td>
                    <td><?=$jogador->getIdTime()?></td>
                    <td>
                        <a class="btn btn-warning" href="jogador.php?id=<?php echo $jogador->getId() ?>">Editar</a>
                        <a class="btn btn-danger" href="excluirJogador.php?id=<?php echo $jogador->getId() ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach ?>
            <?php endif ?>
            </tbody>
        </table>
        </container>

<?php include_once('template/footer.php') ?>