$(document).ready(function(){

    $("#form").submit(function(){
        $.ajax({
            type: "POST",
            url: "misha1.php",
            data: $(this).serialize()
        }).done(function(){
            alert("Дякуємо");
        });
        return false;
    });
    
});