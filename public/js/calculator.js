var $bmrForm = $('#calorieneed-form');

$bmrForm.submit(function(event) {
    event.preventDefault();

    var age = $("#age").val();
    var gender = $("#gender").val();
    var height = $("#height").val();
    var weight = $("#weight").val();
    var bmr = 0;
    var save = false;

    if ($("#gender").val() == "Férfi" || $("#gender").val() == "Male") {
        bmr = 10 * weight + 6.25 * height - 5 * age + 5;
    }else{
        bmr = 10 * weight + 6.25 * height - 5 * age - 161;
    }

    if ($("#save").is(":checked")) {
        $.ajax({
            headers: {
                  'X-CSRF-Token': $('#token').val()
            },
            type: "POST",
            url: "./calorieneed",
            data: { bmr: bmr },
            success: function(){
                $("#outputSpan").html(bmr);
                $("#output").removeClass("hidden");
            }
        });
    }else{
        $("#outputSpan").html(bmr);
        $("#output").removeClass("hidden");
    }
});
