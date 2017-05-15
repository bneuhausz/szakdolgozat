$(document).ready(function(){
    $("#datePicker").kendoDatePicker({
        format: "yyyy-MM-dd"
    });

    $("#datePicker").change(function(){
        dateChange();
    });

    $(".deleteExerciseBtn").click(function(){
        deleteExercise(this);
    });

    $(".deleteSetBtn").click(function(){
        deleteSet(this);
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
                    addExercise($("#exerciseSelect").val());
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
    window.location = "./workoutLogger?date=" + date;
}

function addExercise(eID){
    var date = $("#datePicker").val();
    var exerciseId = eID;

    if ($("#db").val() > 0) {
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
    }else{
        $("#setError").removeClass("hidden");
        return;
    }

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
                $(".deleteSetBtn").click(function(){
                    deleteSet(this);
                });
                $(".deleteExerciseBtn").click(function(){
                    deleteExercise(this);
                });
            });
        },
        error: function(data){
            alert(data);
        },
    });
}

function deleteExercise(eID){
    var date = $("#datePicker").val();
    var exerciseId = eID;

    var weights = "";
    $("#" + exerciseId + " [name='weight']").each(function() {
        weights = weights + $(this).val() + ",";
    });

    var reps = "";
    $("#" + exerciseId + " [name='rep']").each(function() {
        reps = reps + $(this).val() + ",";
    });

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
                $(".deleteSetBtn").click(function(){
                    deleteSet(this);
                });
                $(".deleteExerciseBtn").click(function(){
                    deleteExercise(this);
                });
            });
        },
        error: function(data){
            alert(data);
        },
    });
}

function deleteFullExercise(eID){
    var date = $("#datePicker").val();
    var exerciseId = eID;
    var weights = "";
    var reps = "";
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
                $(".deleteSetBtn").click(function(){
                    deleteSet(this);
                });
                $(".deleteExerciseBtn").click(function(){
                    deleteExercise(this);
                });
            });
        },
        error: function(data){
            alert(data);
        },
    });
}

function deleteSet(sender){
    var id = $(sender).closest(".card").attr("id");
    var sets = $(sender).closest("ul").children().length;
    sets--;
    if (sets == 0) {
        $(sender).closest(".card").remove();
    }else{
        $(sender).closest("li").remove();
    }

    deleteExercise(id);
}

function deleteExercise(sender){
    var id = $(sender).closest(".card").attr("id");
    $(sender).closest(".card").remove();
    deleteFullExercise(id);
}
