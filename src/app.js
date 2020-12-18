$(document).ready(function(){
    $.ajax({
        url: 'dischi.php',
        method: 'GET',
        success: function(data){
            console.log(data);
        },
        error: function(){
            console.log('errore');
        },
    });
});
