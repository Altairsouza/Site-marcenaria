/* primeiro leia todo o documento para depois iniciar o codigo. aqui vamos configurar o menu interativo */
$(document).ready(function(){


    $('.ind-botao').on('click',function(){
       $('nav li').toggle();/* toggle ele parece um interruptor quando clica aparece e quando clica de novo desaparece */
    });


    $('nav li').on('click',function(){
        var linke = $(this).children('a').attr('href');
        window.location.href=linke;/* configurar os link do menu para funcionar(no meu caso ja funciona sem precisar desse javascript) */
     });


     $('.ind-slide').cycle({
        fx: 'fade' /* é pra sumir. Dai estou colocando mais fotos, uma some e outra aparece. aqui vamos editar fotos */

     });

    
});