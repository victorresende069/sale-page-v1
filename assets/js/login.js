$('#submit').on('click', function(e) {
    e.preventDefault();
    let usuario = document.getElementById('usuario').value;
    let senha = document.getElementById('senha').value;

    if(senha == '' || usuario == ''){ 
        alert('Por favor preencha os campos'); return;
    }
    else{

    let data = {usuario: usuario, senha: senha}
    
    $.ajax({
        url: '../api/login/', 
        method: 'POST',
        type: 'json',
        data: JSON.stringify(data),
        success: function(res) {
            let obj = JSON.parse(res);
            let token = obj.token;
            if(token == true){
                window.location.href = './';
            }
            else{
                alert('Dados incorreto');
            }
    
        },
        error: function(){
    
        }
    
    })
    }

})