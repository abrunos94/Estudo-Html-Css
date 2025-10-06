<pre>
    <h1>Dados recebidos do formulário</h1>
    <?php 
        echo "Os dados foram enviados com sucesso! <br><br>";

        echo "Veja o que foi enviado: <br>";

        // O var_dump é ótimo para depuração, pois mostra o conteúdo de uma variável
        var_dump($_POST);

    ?>
    <p><a href="javascript:history.go(-1)">Voltar para o formulário</a></p>
</pre>