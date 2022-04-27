$('.btn').on('click', function (e) {
        e.preventDefault();
        let name = document.getElementById('nameProduct').value;
        let text = document.getElementById('textProduct').value;
        let value = document.getElementById('valueProduct').value;
        let image = document.getElementById('imageProduct').value;
        let link = document.getElementById('linkProduct').value;
        let id = document.getElementById('idProduct').value;
        let data = {name:name, text:text, value:value, image:image, link:link, id:id}

        if(name == '' || text == '' || value == '' || image == '' || link == '' || id == ''){
            alert('Por favor, preencha todo os campos.')
        }
        else{
            $.ajax({
                url: '../api/system/editProduct.php',
                method: 'POST',
                type: 'json',
                data: JSON.stringify(data),
                success: function(res){

                },
                error: function(){}
            })
        }

})