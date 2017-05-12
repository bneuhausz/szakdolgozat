@forelse ($loggedExercises->exercises as $loggedExercise)
    <div class="card" id="{{ $loggedExercise['id'] }}">
        <header>
            <b>{{ $loggedExercise['exerciseName'] }}</b>
            <button id="deleteExerciseBtn" type="button" class="btn btn-danger btn-xs pull-right">Delete exercise</button>
        </header>

        <section>
            <ul>
                @for ($i=0; $i < count($loggedExercise['weights']); $i++)
                    <li>
                        <button id="deleteSetBtn" type="button" class="btn btn-danger btn-xs">Delete set</button>
                        <input readonly type="number" name="weight" value="{{ $loggedExercise['weights'][$i] }}" style="width:40%">
                        <input readonly type="number" name="rep" data-rep="{{ $loggedExercise['id'] }}" value="{{ $loggedExercise['reps'][$i] }}" class="pull-right" style="width:40%">
                    </li>
                @endfor
            </ul>
        </section>
    </div>
@empty
    asd
@endforelse
