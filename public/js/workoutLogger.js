$(document).ready(function(){
    $("#datePicker").kendoDatePicker({
        //value: new Date(),
        format: "yyyy-MM-dd"
    });

    $("#datePicker").change(function(){
        dateChange();
    });

    $('#muscleGroupSelect').change(function(){
        var muscleGroupId = $('#muscleGroupSelect').val();

        $.ajax({
            headers: {
                  'X-CSRF-Token': $('#token').val()
            },
            type: "GET",
            url: "./getExercisesByMuscleGroup",
            data: { id: muscleGroupId },
            success: function(response){
                $('#exerciseSelects').html(response);
                $('#exerciseSelects').removeClass("hidden");
                $('#addExerciseButton').click(function(){
                    addExercise();
                });
                $("#muscleGroupSelect option[value='0']").each(function() {
                    $(this).remove();
                });
            },
        });
    });
});

function dateChange(){
    var date = $("#datePicker").val();

    /*$.ajax({
        headers: {
              'X-CSRF-Token': $('#token').val()
        },
        type: "GET",
        url: "./workoutLogger",
        data: { date: date },
        success: function(response){
            $("#pageContainer").fadeOut(800, function(){
                $("#pageContainer").html(response).fadeIn().delay(2000);
            });
        },
    });*/
    window.location = "./workoutLogger?date=" + date;
}

function addExercise(){
    var date = $("#datePicker").val();
    var exerciseId = $("#exerciseSelect").val();

    var weights = "";
    $("#" + exerciseId + " [name='weight']").each(function() {
        weights = weights + $(this).val() + ",";
    });
    weights = weights + $("#kg").val();

    var reps = "";
    $("#" + exerciseId + " [name='rep']").each(function() {
        reps = reps + $(this).val() + ",";
    });
    reps = reps + $("#db").val();

    $.ajax({
        headers: {
              'X-CSRF-Token': $('#token').val()
        },
        type: "GET",
        url: "./addExerciseToWorkout",
        data: { date: date, id: exerciseId, reps: reps, weights: weights },
        success: function(response){
            $("#workoutSets").fadeOut(800, function(){
                $("#workoutSets").html(response).fadeIn().delay(2000);
            });
        },
        error: function(data){
            alert(data);
        },
    });
}
