var $form = $('#calorieneed-form');

$form.submit(function(event) {
    event.preventDefault();

    var age = $("#age").val();
    var gender = $("#gender").val();
    var height = $("#height").val();
    var weight = $("#weight").val();

    $.ajax({
        headers: {
              'X-CSRF-Token': $('#token').val()
        },
        type: "POST",
        url: "./calorieneed",
        data: { age: age, gender: gender, height: height, weight: weight },
        success: function(response){
            $("#output").html(response);
        }
    })
});
