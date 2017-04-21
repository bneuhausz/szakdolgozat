var $form = $('#calorieneed-form');

$form.submit(function(event) {
    event.preventDefault();
    var age = $("#age").val();
    $.ajax({
        type: "POST",
        url: "./calorieneed",
        data: "",
        success: function(){

        }
    })
});
