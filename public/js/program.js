$("#searchButton").click(function (){
    var difficulty = $("input[type='radio']:checked").val();
    var type = $("#type").val();
    var numOfDays = $("#numOfDays").val() != "" ? $("#numOfDays").val() : "0";

    //alert(numOfDays + " " +type + " " + difficulty);

    $.ajax({
        headers: {
            'X-CSRF-Token': $('#token').val()
        },
        type: "GET",
        url: "./programs/search",
        data: { difficulty: difficulty, type: type, numOfDays: numOfDays },
        success: function(response){
            $("#programBox").html(response);
        }
    });
});
