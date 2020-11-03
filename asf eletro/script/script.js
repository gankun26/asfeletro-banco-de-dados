function exibir_categoria(categoria){
    //alert(categoria);

    let elementos = document.getElementsByClassName('boxproduto');
    console.log(elementos);
     for(let i = 0;i < elementos.length; i++){
        console.log(elementos[i].id);
        if(categoria == elementos[i].id)
           elementos[i].style = "display:block";
        else
           elementos[i].style = "display:none";
    }
}

let exibir_todas = () => {
     let elementos = document.getElementsByClassName('boxproduto');

     for(var i=0; i<elementos.length; i++){
         elementos[i].style = "display:block";
     }
};
 let destaque = (imagem) => {
   if(imagem.width == 240)
     
     imagem.width = 150;
   else
     imagem.width = 240;  
 };