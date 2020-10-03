<?php $title = "Cadastro de Time"; include_once('template/header.php') ?>


<div class="container">
    <h1>Cadastro de Time</h1>
    <a href="/mvc">Voltar</a>
    <form action="salvarTime.php" method="POST">
            <legend>Dados do time</legend>
            <input type="hidden" name="id" 
             value="<?php echo isset($time) ? $time->getID() : ""; ?>">
            
            <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control"
                value="<?php  echo isset($time) ? $time->getNome() : ""; ?>">
            <br>
            </div>
            
            <button class="btn btn-primary" type="submit">Salvar</button>
 
    </form>
</div>
<?php include_once('template/footer.php') ?>