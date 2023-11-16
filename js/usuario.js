var t;
var obj;
var idEdita =  new Array();
ativaalternativa = "ATIVO"
console.log('comecei');


$(document).ready(function () {

});


//Cadastrar login na tela cadastrar
function salvar(form) {
    console.log("aqui");
    //cadastrar login na tela Cadastrar

    var form = $("#form-cadastrar").serialize();
    console.log(form) ;


    $.ajax({

        url: 'cadastrarUsuario.php',
        type: 'POST',
        data: form,

        success:function (e) {
            console.log("entrei no ajax");

            if(e=='1'){

                console.log('1');
                alert('alert btn-seccess text-center','Sucesso!');

            }
            else{


                console.log('2');
                alert('alert btn-danger text-center', 'Erro no Login!');
            }
        }
    });


    limpar();

}
//fim da tela cadastrar


//cadastrar dados do usuário da tela de usuario
function salvarDadosUsuario(form){
    console.log("aqui Salvar Dados do usuário");
    var form = $("#form-cadastrar").serialize();
    var duplicateCPF = document.getElementById("cpf").value;
    console.log(duplicateCPF);
    if(duplicateCPF!=""){
        $.ajax({
            type: 'POST',//método
            url: 'verificarDuplicidadeUsuario.php',
            cache: false,
            data: duplicateCPF,

            success:function (e) {
                console.log("entrei no ajax");

                if(e=='1'){
                    console.log('1');
                    alert('Já existe um usuário com esse CPF!');
                    //setTextoNoAlert('alert btn-success text-center', 'já existe um usuário com esse CPF!');
                    //setTimeout("window.location.href='usuario.php'", 10000);

                
                }else{
                    console.log('2');

                    console.log(form);

                    $.ajax({
                        type: 'POST',//método
                        url: 'cadastrarDadosUsuario.php',
                        cache: false,
                        data: form,

                        success:function (d) {
                            console.log("entrei no ajax");

                            if(d=='3'){
                              setTextoNoAlert('alert btn-success text-center','Secesso!');

                              setTimeout("window.location.href='usuario.php'",7000);
                            }
                            if(d=='2' || d=='1'){

                              console.log('2');
                              //window.location.href='usuario.php';
                              setTextoNoAlert('aler0t btn-danger text-center','Erro no Cadastro!');

                              setTimeout("window.location.href='usuario.php'",10000);
                            }
                        }
                    });
                }
            }
        });
        //limpar
    }
    //fim do cadastrar dados usuário
} 
 
function limpar(){
    console.log("limpei cadastrar");
    document.getElementById("form-cadastrar").reset();
    document.getElementById("form-editar").reset();
    document.getElementById("ativoInativo").checked = false;

    const divSalvar = $("#mensagem");
    divSalvar.empty();
    const divEditar = $("#mensagem2");
    divEditar.empty();
    
}

//mensagem cadastro e editar
function setTextoNoAlert(classe, message) {
    $ ('.alert').attr('class', classe);
    $ ('#mensagem').text(message);
    $ ('#mensagem2').text(message);
}


function modalSucesso(){
    $ ("#myModalSucesso").modal();
} 
//modalSucesso();
function modalErro(){
    $("#myModalErro").modal();
}
//modalErro();


//preenchimento automatico ao inserir o CEP


