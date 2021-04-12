$(document).ready(function () {
    $(".fed-form").submit(function (e) { // Устанавливаем событие отправки для формы с id=form
        e.preventDefault();
        $(".modal-order").css("display", "block");
        $(".dark-bg").css("display", "block");
        var form_data = $(this).serialize(); // Собираем все данные из формы
        $.ajax({
            type: "POST", // Метод отправки
            url: "requests/feedback_form.php", // Путь до php файла отправителя
            data: form_data,
            success: function () {
                $(this).find("input").val("");
                $(".fed-form").trigger("reset");
            }
        });
        $("#modal_btn_close").on('click', function() {        
            $(".modal-order").css("display", "none");
            $(".dark-bg").css("display", "none");        
        });
    });    
    
   

    $("#sketch-form").submit(function () { // Устанавливаем событие отправки для формы с id=form
        
        $(".modal-order").css("display", "block");
        $(".dark-bg").css("display", "block");
        
        $("#modal_btn_close").on('click', function() {        
            $(".modal-order").css("display", "none");
            $(".dark-bg").css("display", "none");      
            window.location.replace("../catalog.php");  
        });
    });     

});


