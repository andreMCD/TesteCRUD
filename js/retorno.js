$("#formCadastro").on('submit',function(event){
    event.preventDefault();
    let dados=$(this).serialize();

    $.ajax({
        url: 'controllers/controllerCadastro.php',
        type: 'post',
        dataType: 'html',
        data: dados,
        success:function(dados){
            $('.resultado').show().html(dados);
        }
    })
});

/* Confirmar antes de deletar */
$('.deletar').on('click', function(event){
    event.preventDefault();

    let link=$(this).attr('href');

    if(confirm("Deseja Mesmo Apagar esse Usuário?")) {
        window.location.href=link;
    }else{
        return false;
    }
});