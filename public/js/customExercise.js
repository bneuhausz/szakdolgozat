$("#addButton").click(function (){
    var exerciseName = $("#exerciseName").val();
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
