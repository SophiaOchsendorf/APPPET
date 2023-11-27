function cadastrar(form) {
    console.log("aqui");
    var form = $("#form-cadastrar").serialize();
    console.log(form);

/*
    $.ajax({

        url: 'cadastrar2.php',
        type: 'POST',
        data: form,


        success:function (e) {
            console.log("entrei no ajax");
            console.log(e);

            if(e=='3'){

                console.log('3');
                alert('alert btn-success text-center', 'Sucesso!');
            }

            else {

                console.log('2');
                alert('alert btn-danger text-center', 'Erro no Cadastro!');
            }
        }
    });

    limpar();
    */
}

function limpar(){
    console.log("limpei");
    document.getElementById("form-cadastrar").reset();

}

