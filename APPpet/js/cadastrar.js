function cadastrar(form) {
    console.log("aqui");
    var form = $("#form-cadastrar").serialize();
    console.log(form);

    //alert("Hello! I am an alert box!");


    $.ajax({

        url: 'cadastrar2.php',
        type: 'POST',
        data: form,


        success:function (e) {
            console.log("entrei no ajax");
            console.log(e);

            if(e=='3'){

                //console.log('3');
                  //alert("3");
                setTextoToNoAlert('alert btn-success','Sucesso!');
                setTimeout("limpar()", 10000);
            }

            else {

                //console.log('2');
                setTextoToNoAlert('alert btn-danger', 'Erro no Cadastro!');
                setTimeout("limpar()", 10000);
            }
        }
    });


}

function limpar() {
    console.log("limpei");
    document.getElementById("form-cadastrar").reset();

}
function setTextoNoAlert(classe, message) {
    $('.alert').attr('class', classe);
    $('#mensagem').text(message);
}

