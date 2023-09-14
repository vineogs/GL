document.getElementById("adicionar_jogo").addEventListener("submit", function(event) {
    event.preventDefault(); // Impede o envio do formulário tradicional

    // Obtém o valor do campo de entrada
    let valor = document.getElementById("valor").value;
    var imagem = document.getElementById("imagem").value.File[0];

    let formData = new FormData();
    formData.append("valor", valor);
    formData.append("imagem", imagem);

    // Cria uma instância do objeto XMLHttpRequest
    let xhr = new XMLHttpRequest();
    
    // Configura a solicitação para o arquivo PHP
    xhr.open("POST", "enviar.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Define o que fazer quando a solicitação for concluída
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Atualiza o elemento HTML com a resposta do PHP
            document.getElementById("resultado").innerHTML = xhr.responseText;

            if (imagem){
                let imagemPreview = document.getElementById("imagem-preview");
                imagemPreview.innerHTML = "asda";
            }
        }
    };

    // Envia a solicitação com os dados do formulário
    xhr.send("valor=" + valor);
});