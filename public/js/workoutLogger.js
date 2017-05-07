$(document).ready(function(){
    $("#datePicker").kendoDatePicker({
        value: new Date(),
        format: "yyyy-MM-dd"
    });
});

$('#addButton').click(function(){
    teszt();
});

function teszt(){
    var date = $("#datePicker").val();
    var id = 1;
    var weights = "10,10,10";
    var reps = "12,12,12";
    $.ajax({
        headers: {
              'X-CSRF-Token': $('#token').val()
        },
        type: "GET",
        url: "./addExerciseToWorkout",
        data: { date: date, id: id, reps: reps, weights: weights },
        success: function(response){
            alert(response);
        },
        error: function(data){
                    alert(data);
        },
    });
}
