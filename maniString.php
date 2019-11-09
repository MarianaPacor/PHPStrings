
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <p><textarea name="mensagem" id="" cols="30" rows="10"><?php echo $_POST['mensagem'] ?></textarea></p> 
        <p><input type="submit" name="enviar" value="Enviar"></p> 
    </form>
    <?php if(isset($_POST['enviar'])): 
        //echo $mensagem = addslashes($_POST['mensagem']) . '<br>'; adiciona barras invertidas para gravar caracteres especiais no código.
        //echo stripslashes($mensagem); transforma barras invertidas do banco de dados em caracteres especiais.
        //var_dump(explode(' ', $_POST['mensagem'])); transforma um texto em array. 
        //echo $mensagem = htmlentities($_POST['mensagem']) . '<br>'; transforma hmtl em caracteres universais.
        //echo html_entity_decode($mensagem); desfaz o que foi feito acima.
        //echo implode('-', array ('jaca', 'carolina', 'goiaba', 'jota', 'lua'));
        //echo $senha = 'minhasenha';
        //echo md5($senha); codifica a senha, não há função de retorno
        //echo nl2br($_POST['mensagem']); adiciona formatção de parágrafo no post. 
        //echo number_format(12343.69, 2, ',', '.'); formata a visualização numérica. ltrim() e rtrim() removem caracteres da esquerda e da direita.
        //echo trim('textoooo', 'o'); remove espaços ou caracteres.
        //echo str_pad('Texto', 20, 'l'); recebe 3 parâmetros, uma string, o tamanho e os caracteres para completar esse tamanho.
        //echo str_repeat('mari ', 40); repete uma string.
        //echo str_replace('o', 'a', $_POST['mensagem']) substituir texto em uma string, a STR_IREPLACE não faz distinção de maiúsculas.
        //echo str_word_count($_POST['mensagem']) conta o número de palavras em uma string.
        //echo strip_tags($_POST['mensagem']) retira as tags html de uma string.
        //echo strlen($_POST['mensagem']); conta os caracteres (incluso espaços) de uma string.
        //echo strpos('Texto simples de exemplo', 'Texto'); procura a primeira ocorrencia de uma string em um texto e strrpos procura a ultima.
        //echo substr ('Texto simples de exemplo', 6, 7); captura um texto de uma string.
        //echo strtoupper ($_POST['mensagem']); funções de transformação do texto.
        // strtolower(string), ucfirst(string), ucwords(string).
        endif;?>
</body>
</html>