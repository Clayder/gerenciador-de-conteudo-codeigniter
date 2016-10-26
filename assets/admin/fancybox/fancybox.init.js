$(document).ready(function () {
    $('.fancy').fancybox({
        helpers: {
            overlay: {
                locked: false
            }
        }
    }
    );
});

/*
 * Faz a imagem aparecer, em imagem destacada
 */
function responsive_filemanager_callback(field_id) {
    var image = $('#' + field_id).val();
    $('#prev_img').attr('src', image);
}
;

function clear_img() {
    var image = '';
    $('#prev_img').attr('src', image);
    $('#nome_img').val('');
}

