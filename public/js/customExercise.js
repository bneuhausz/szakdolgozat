$(document).ready(function(){
    $("#addButton").click(function (){
        var exerciseName = $("#exerciseName").val();
        var existingNames = $(".existingExercise");
        var match = false;

        $(existingNames).each(function(){
            if (exerciseName == $(this).html()) {
                $("#error").removeClass("hidden");
                match = true;
            }
        });

        if(match == true){
            return;
        }

        var exerciseType = $("#exerciseType").val();
        var musclegroup = $("#musclegroup").val();

        $.ajax({
            headers: {
                'X-CSRF-Token': $('#token').val()
            },
            type: "POST",
            url: "./myExercises/add",
            data: { name: exerciseName, exerciseType: exerciseType, musclegroup: musclegroup },
            success: function(response){
                location.reload();
            }
        });
    });

    $(".cstExerciseDeleteBtn").click(function(){
        console.log("asd");
        var id = $(this).closest("li").attr("id");

        $.ajax({
            headers: {
                'X-CSRF-Token': $('#token').val()
            },
            type: "POST",
            url: "./myExercises/delete",
            data: { id: id },
            success: function(response){
                location.reload();
            }
        });
    });
});
