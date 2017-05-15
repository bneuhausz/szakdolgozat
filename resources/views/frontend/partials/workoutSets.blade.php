@forelse ($loggedExercises->exercises as $loggedExercise)
    <div class="card" id="{{ $loggedExercise['id'] }}">
        <header>
            <b>{{ $loggedExercise['exerciseName'] }}</b>
            <button type="button" class="deleteExerciseBtn btn btn-danger btn-xs pull-right">Delete exercise</button>
        </header>

        <section>
            <ul>
                @for ($i=0; $i < count($loggedExercise['weights']); $i++)
                    <li>
                        <button type="button" class="btn btn-danger btn-xs deleteSetBtn">Delete set</button>
                        <!--<a href="{{ url('/addExerciseToWorkout') }}" class="btn btn-danger btn-xs deleteSetBtn">Delete set</a>-->
                        <input readonly type="number" name="weight" value="{{ $loggedExercise['weights'][$i] }}" style="width:40%">
                        <input readonly type="number" name="rep" data-rep="{{ $loggedExercise['id'] }}" value="{{ $loggedExercise['reps'][$i] }}" class="pull-right" style="width:40%">
                    </li>
                @endfor
            </ul>
        </section>
    </div>
@empty
    no exercises added yet
@endforelse
