$(document).ready(function(){
    $('.check-all').click(function(){
        if($('.select-table' ).prop( "checked" ) == true){
            $( '.select-table' ).prop( "checked" , false);
            $( '.check-all' ).prop( "checked" , false);
        } else {
            $( '.select-table' ).prop( "checked" , true);
            $( '.check-all' ).prop( "checked" , true);
        }
    })
    
})