//login
$("#form-login").submit(function(e){
    e.preventDefault();

    var email = $("#email").val().trim();
    var senha = $("#senha").val().trim();

    $.ajax({
        url: 'controller/login-usuario.php',
        method: 'POST',
        data: {"email": email, "senha": senha},
        success: function(data) {
            if(data === "ok"){
                window.location.href = "index.php";
            }else{
                $("#resultado").html(data)
            }
            
        }, 
        error: function(data){
             console.log(data); 
        }
    });
});

//cadastro usuario
$("#form-cadastro-usuario").submit(function(e){
    e.preventDefault();

    var nome = $("#nome").val().trim();
    var email = $("#email").val().trim();
    var senha = $("#senha").val().trim();

    $.ajax({
        url: 'controller/cadastro-usuario.php',
        method: 'POST',
        data: {"nome": nome, "email": email, "senha": senha},
        success: function(data) {
            $("#resultado").html(data)
        }, 
        error: function(data){
             console.log(data); 
        }
    });
});

//Registro ponto do colaborador
$("#form-registro-ponto").submit(function(e){
    e.preventDefault();

    var nome = $("#nome").val().trim();
    var data = $("#data").val().trim();
    var horario_entrada = $("#horario_entrada").val();
    var horario_saida = $("#horario_saida").val();

    $.ajax({
        url: 'controller/cadastro-ponto-colaborador.php',
        method: 'POST',
        data: {"nome": nome, "data": data, "horario_entrada": horario_entrada, "horario_saida": horario_saida},
        success: function(data) {
            $("#resultado").html(data)
            $("#nome").val("");
            $("#data").val("");
            $("#horario_entrada").val("");
            $("#horario_saida").val("");
        }, 
        error: function(data){
             console.log(data); 
        }
    });
});

//Editar registro ponto do colaborador
$("#form-editar-ponto").submit(function(e){
    e.preventDefault();

    var id = $("#id-ponto").val();
    var horario_entrada = $("#horario_entrada").val().trim();
    var horario_saida = $("#horario_saida").val().trim();

    $.ajax({
        url: 'controller/editar-ponto.php',
        method: 'POST',
        data: {"id": id, "horario_entrada": horario_entrada, "horario_saida": horario_saida},
        success: function(data) {
            $("#resultado").html(data)
        }, 
        error: function(data){
             console.log(data); 
        }
    });
});
