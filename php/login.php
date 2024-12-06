<?php
session_start();

if(isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["password"])){
    include_once "config.php";
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $mysqli->query($sql);


    if(mysqli_num_rows($result) < 1){
        print_r("<script>alert('falha ao logar!')</script>");
        header("Location: ../index.php"); // Redireciona para index.php em caso de falha
        exit(); // Encerra a execução do script para evitar outros problemas
    } else {
        print_r ("<script>alert('logado com sucesso')</script>");
        // Desative o buffer de saída se necessário
        $row = $result->fetch_assoc(); // Fetch the first row of the result
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["picture"] = $row['picture'];
        ob_end_clean();
        header("Location: home.php");
        exit();
    }
}