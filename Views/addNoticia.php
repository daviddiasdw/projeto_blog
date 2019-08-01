<?php
session_start();
?>

<?php if (isset($_SESSION['usuario'])) { ?>
    <a>Inserir Notícia</a>
    <form class="form-group" method="POST" action="../Controllers/NoticiaController.php">
        <label>Título: </label><input class="input-group mb-3" type="text" name="titulo">
        <label>Conteúdo: </label><input type="text" name="conteudo">
        <button type="submit">Enviar Notícia</button>
    </form>
    <a href="../sair.php">sair</a>
<?php } else { ?>
    <a>Efetuar Login</a>
    <form class="form-group" method="POST" action="../Controllers/NoticiaController.php">
        <input class="input-group" type="text" name="usuario">
        <input type="password" name="senha">
        <button type="submit">Login</button>
    </form>

<?php } ?>