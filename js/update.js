var update = document.getElementById('update')

update.addEventListener('click', updatee)

function updatee(){

    var nomecliente = document.getElementById('nomecliente').value
    var data = document.getElementById('data').value
    var problema = document.getElementById('problema').value
    var id = document.getElementById('id').value
console.log(id)
   $.ajax({
        type: "POST",
        url: "backend/update.php",
    data: { nomeclientee: nomecliente, dataa:data, problemaa:problema, idd:id},
        dataType: "text",
        success: function (response) {
            alert(response)
           if(response == 'Dados atualizados'){
            window.location.href = "clientes.php";
           }
        }
        
    });
}
