<?php
$conteudoArquivoJson = file_get_contents(__DIR__ . '/filme.json');
$filme = json_decode($conteudoArquivoJson, true);
?>

<h1>Sucesso! Filme <?php echo$_GET['filme'];?> inserido.</h1>
<ul>
  <li><?= $filme["nome"]?></li>
  <li><?= $filme["anoLancamento"]?></li>
  <li><?= $filme["nota"]?></li>
  <li><?= $filme["genero"]?></li>
</ul>
