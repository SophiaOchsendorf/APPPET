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


function limpa_formulário_cep() {
    //limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
    document.getElementById('ibge').value=("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value=("conteudo.logradouro");
        document.getElementById('bairro').value=("conteudo.bairro");
        document.getElementById('cidade').value=("conteudo.localidade");
        document.getElementById('uf').value=("conteudo.uf");
        document.getElementById('ibge').value=("conteudo.ibge");
    } //end if.
    else {
        //CEP não encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com"..." enquanto consulta webservice.
            document.getElementById('rua').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('uf').value="...";


            //Cria um elemento javascript
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep +'/json/?callback=meu_callback';


            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);
           
        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
};

//Fim CEP


$(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#topo']").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
    
    
        // Store hash
        var hash = this.hash;
    
    
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    
    
    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;
    
    
        var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
      });
    });
    })
    
    
    