$(document).ready(function () {
    let i = 4;
    $('.add_color').click(function(e) {
        e.preventDefault();        
        let message = '<label for="color_'+ i +'">'+ i +' цвет</label> <input type="text" name="colors_'+ i +'" id="color_'+ i +'">';
        i++;
        $("#colors").append(message);  
        if (i == 7) {
            $('.add_color').css("display","none");
        } 
    });

    
    $('#add_form').on('submit',function() {
        alert('Успешно');
    });


    var paramsString = document.location.search;
    var searchParams = new URLSearchParams(paramsString);
    
    let type = searchParams.get("type");
    if (type == 'add') {
        $('#catalog_type_add').addClass('current');
    } else if (type == 'delet') {
        $('#catalog_type_delet').addClass('current');
        $('#catalog_type_add').removeClass('current');
    } else if (type == 'changing') {
        $('#catalog_type_changing').addClass('current');
        $('#catalog_type_add').removeClass('current');
    }
});

