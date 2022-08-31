<?php
    $dbHost =  'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'usuarios';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno){
        echo "Erro";
    }
    else{
        echo "Conexão efetuada";
    }
?>


    Colocar o código em php abaixo na tela de cadastro.
    Como você me pergunta, bem a resporta é simples, 
    selecione o código clique crtl + x,
    vá para o aquivo da tela de cadastro,
    clique crtl + v, renomeie de .html para .php, mas como renomear?
    Simples clique com o botão direito sobre o arquivo,
    apague o html e substitua por php.
    Legal, certo? Agora tente você msmo!
<?php
    if(isset($_POST['submit'])){
        include_once(Config.php);
        $email = $_POST['email'];
        $nome = $_POST['name'];
        $sobrenome = $_POST['lastname'];
        $senha = $_POST['password'];
        $result = mysqli_query($conexao, "INSERT INTO usuarios(Nome, Sobrenome, E-mail, Senha)
                                VALUES('$email', '$nome', '$sobrenome', '$senha')");
    }
?>