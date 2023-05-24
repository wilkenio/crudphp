var cadastrar = document.getElementById('cadastrar')

cadastrar.addEventListener('click', cadastrardados)

function cadastrardados() {
    var nomecliente = document.getElementById('nomecliente').value
    var data = document.getElementById('data').value
    var problema = document.getElementById('problema').value

    if (nomecliente && data && problema !== '') {
        $.ajax({
            type: "POST",
            url: "backend/criar.php",
            data: { nomeclientee: nomecliente, dataa: data, problemaa: problema },
            dataType: "text",
            success: function (response) {
                if (response == 'cadastrado') {
                    window.location.href = "clientes.php";
                }
            }

        });
    }else{
        alert("digite todos os campos")
    }
}
