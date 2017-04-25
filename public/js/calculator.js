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

function calc1rm(){
    var weight = $('#weight').val();
    var rep = $('#rep').val();
    var percent = 0;

    switch(rep){
        case '2':
            percent = 95;
        break;
        case '3':
            percent = 93;
        break;
        case '4':
            percent = 90;
        break;
        case '5':
            percent = 87;
        break;
        case '6':
            percent = 85;
        break;
        case '7':
            percent = 83;
        break;
        case '8':
            percent = 80;
        break;
        case '9':
            percent = 77;
        break;
        case '10':
            percent = 75;
        break;
        case '11':
            percent = 73;
        break;
        case '12':
            percent = 70;
        break;
        default:
            percent = 100;
        break;
    }

    $('#1rm').val(((weight*100)/percent).toFixed(2));
}

$('#weight').keyup(function(){
    calc1rm();
});

$('#rep').change(function(){
    calc1rm();
});
