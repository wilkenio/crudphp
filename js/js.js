var enviar = document.getElementById('enviar')


enviar.addEventListener('click', enviardados)

function enviardados() {
    var email = document.getElementById('email').value
    var senha = document.getElementById('senha').value

    if (email && senha !== '') {
        $.ajax({
            type: "POST",
            url: "backend/login.php",
            data: { emaill: email, password: senha },
            dataType: "text",
            success: function (response) {
                
                if(response == 'dados invalidos'){
                alert(response)
                }

                if (response == 'logado') {
                    window.location.href = "index.php";
                }
            }

        });
    }else{
        alert("digite os campos")
    }
}
