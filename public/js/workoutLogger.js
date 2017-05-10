$(document).ready(function(){
    $("#datePicker").kendoDatePicker({
        value: new Date(),
        format: "yyyy-MM-dd"
    });

    $('#addButton').click(function(){
        teszt();
    });


});

/*$('.card').click(function(){
    var background = document.createElement('div');
    background.className = "modal-background";
    var width = window.innerWidth;
    var height = window.innerHeight;
    background.style.width = width + "px";
    background.style.height = height + "px";
    document.body.appendChild(background);

    var modal = document.getElementsByClassName('modal')[0];
    modal.style.display = "block";
    setTimeout(function(){
        modal.style.top = height / 2 - modal.offsetHeight / 2 + "px";
    }, 10);

    $('#modal-close').click(function(){
        var modal = document.getElementsByClassName('modal')[0];
        while(modal.firstElementChild.tagName != 'BUTTON'){
            modal.firstElementChild.remove();
        }
        modal.style.top = "10%";
        modal.style.display = "none";
        var background = document.getElementsByClassName('modal-background')[0];
        background.remove();
    });
});

$('.card').click(function(){
    //TODO: AJAX CALL WHICH RETURNS MODAL PARTIAL WITH DATA
    $('#workoutInfo').html();
});*/

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

/*function modalOpen(event){
    event.preventDefault();
    var background = document.createElement('div');
    background.className = "modal-background";
    var width = window.innerWidth;
    var height = window.innerHeight;
    background.style.width = width + "px";
    background.style.height = height + "px";
    document.body.appendChild(background);

    var modal = document.getElementsByClassName('modal')[0];
    modal.style.display = "block";
    setTimeout(function(){
        modal.style.top = height / 2 - modal.offsetHeight / 2 + "px";
    }, 10);
}

function modalClose(event){
    event.preventDefault();
    var modal = document.getElementsByClassName('modal')[0];
    while(modal.firstElementChild.tagName != 'BUTTON'){
        modal.firstElementChild.remove();
    }
    modal.style.top = "10%";
    modal.style.display = "none";
    var background = document.getElementsByClassName('modal-background')[0];
    background.remove();
}*/
