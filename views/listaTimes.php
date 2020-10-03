<?php include_once('template/header.php') ?>

<div class="container">
<h1>Listagem de Times</h1>
<a href="/mvc">Voltar</a>
<table class="table">
  <tr>
    <th>Nome</th>
    <th>Ações</th>
  </tr>
  <tr>
    <?php if(!empty($times)): ?>
    <?php foreach($times as $time): ?>
    <td><?=$time->getNome()?></td>
    <td>
      <a class="btn btn-warning" href="time.php?id=<?php echo $time->getId() ?>">Editar</a>
      <a class="btn btn-danger" href="excluirTime.php?id=<?php echo $time->getId() ?>">Excluir</a>
    </td>
  </tr>
  <?php endforeach ?>
  <?php endif ?>
</table>
</div>
<?php include_once('template/footer.php') ?>