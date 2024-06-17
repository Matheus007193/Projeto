$(document).ready(function(){
    $('#enviar').click(function(){

        var email = $("#iemail")
        var user = $('#inome').val();
        var comment = $('#icomentario').val();

        $.ajax({
            url: 'form2.php',
            type: 'POST',
            data: {
                e: email,
                u: user,
                c: comment
            }, 
            success: function(data){
                alert('Seu comentário foi cadastrado com sucesso!');
            }
        });
    });
    $('#Comentarios').click(function() {
        $.ajax({
            url: 'form3select.php',
            success: function(data) {
                $('#Resultado').html(data);
            }
        })
    });
});