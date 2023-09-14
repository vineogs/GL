<?php


    include 'connect.php';

    // Obter o valor do formulário
    $valor = $_POST['valor'];

    // Preparar e executar a consulta SQL
    $sql = "INSERT INTO teste (nome) VALUES ('$valor')";

    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Erro ao inserir valor: " . $conn->error;
    }

    $sql = "SELECT * FROM teste";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibe os dados
        while($row = $result->fetch_assoc()) {
            echo "Nome: " . $row["nome"]. " - ID: " . $row["ID"]. "<br>";
        }
    } else {
        echo "Nenhum resultado encontrado";
    }
    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeJogo = $_POST['valor'];
    $diretorioDestino = "../resources/images/"; // Pasta onde as imagens serão armazenadas
    $nomeArquivo = $_POST['imagem'];
    $caminhoCompleto = $diretorioDestino . $nomeArquivo;

    // Verifique se o arquivo é uma imagem
    $tipoArquivo = strtolower(pathinfo($caminhoCompleto, PATHINFO_EXTENSION));
    $tiposPermitidos = array("jpg", "jpeg", "png");

    $sql = "INSERT INTO teste (nome, imagem) VALUES ('$nomeJogo','$nomeArquivo')";

    if (in_array($tipoArquivo, $tiposPermitidos)) {
        if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminhoCompleto)) {
            if ($conn->query($sql) === TRUE) {
        
            } else {
                
            }
        } else {
            
        }
    } else {
        
    }
}

// Fecha a conexão
$conn->close();


