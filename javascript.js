/*esta função faz a validação dos campos obrigatórios, no caso deles estarem vazios*/
function validation() {
    if(document.product.codigo.value=="")               //checa se Código do Produto foi preenchido
    {
        alert("campo código do produto é obrigatório");
        document.product.codigo.focus();
        return false;
    }
     if(document.product.tipo_de_mercadoria.value=="")  //checa se tipo de mercadoria foi preenchido
    {
        alert("campo tipo da mercadoria é obrigatório");
        document.product.tipo_de_mercadoria.focus();
        return false;
    }
     if(document.product.nome_da_mercadoria.value=="") //checa se nome da mercadoria foi preenchido
    {
        alert("campo nome da mercadoria é obrigatório");
        document.product.nome_da_mercadoria.focus();
        return false;
    }
     if(document.product.quantidade.value=="")         //checa se quantidade foi preenchida
    {
        alert("campo quantidade é obrigatório");
        document.product.quantidade.focus();
        return false;
    }
     if(document.product.preco.value=="")             // checa se preço foi preenchido
    {
        alert("campo preço é obrigatório");
        document.product.preco.focus();
        return false;
    }


}
