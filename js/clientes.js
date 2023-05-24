

function test(elemento){
    const nome = elemento.parentElement.querySelector("#nome").textContent;
    const dataEntrega = elemento.parentElement.querySelector("#dataentrega").textContent;
    const problema = elemento.parentElement.querySelector("#problema").textContent;
    const id = elemento.parentElement.querySelector("#id").textContent;
  
    console.log(nome, dataEntrega, problema, id);

    window.location.href = "update.php?nomecliente="+nome+"&dataentrega="+dataEntrega+ "&problema="+problema +"&id="+ id;
 
}

function eliminar(elemento){
    var id = elemento.parentElement.querySelector("#id").textContent;
    var poup = document.getElementById("poup-up")
    poup.style.display="flex"
    localStorage.setItem('id', id);
}
function eliminarmsm(){
   
    let id = localStorage.getItem('id');

    $.ajax({
        type: "POST",
        url: "backend/update.php",
    data: { iddd: id},
        dataType: "text",
        success: function (response) {
            alert(response)
           if(response == 'Dados apagados'){
            window.location.href = "clientes.php";
           }
        }
        
    });

}
function cancelar(){
    var poup = document.getElementById("poup-up")
    poup.style.display="none"
}