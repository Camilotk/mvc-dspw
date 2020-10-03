<?php $title = "Cadastro de Jogador"; include_once('template/header.php') ?>

<div class="container">
    <h1>Cadastro de Jogador</h1>
    <a href="/mvc">Voltar</a>
    <form action="salvarJogador.php" method="POST">
        <?php // <fieldset> ?>
        <legend>Dados do jogador</legend>

        <div class="form-group">
            <input type="hidden" name="id" class="form-control"
                value="<?php echo isset($jogador) ? $jogador->getID() : ""; ?>">
        </div>

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control"
                value="<?php  echo isset($jogador) ? $jogador->getNome() : ""; ?>">
        </div>

        <div class="form-group">
            <label for="posicao">Posição:</label>
            <input type="text" name="posicao" id="posicao" placeholder="Posição" class="form-control"
                value="<?php echo isset($jogador) ? $jogador->getPosicao() : ""; ?>">
        </div>

        <div class="form-group">
            <label for="overall">Overall:</label>
            <input type="number" name="overall" id="overall" placeholder="Overall" class="form-control"
                value="<?php echo isset($jogador) ?  $jogador->getOverall() : ""; ?>">
        </div>

        <div class="form-group">
            <label for="time">Time:</label>
            <select class="form-control" id="time" name="id_time">
                <?php foreach($times as $time ): ?>
                    <option value="<?=$time->getId()?>"><?=$time->getNome()?></option>
                <?php endforeach ?>
            </select>
        </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
        <?php // </fieldset> ?>
    </form>
</div>

<?php include_once('template/footer.php') ?>
