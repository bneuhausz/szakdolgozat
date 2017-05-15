@forelse ($loggedExercises->exercises as $loggedExercise)
    <div class="card" id="{{ $loggedExercise['id'] }}">
        <header>
            <b>{{ $loggedExercise['exerciseName'] }}</b>
            <button type="button" class="deleteExerciseBtn btn btn-danger btn-xs pull-right">{{ trans('workoutPlans.deleteExercise') }}</button>
        </header>

        <section>
            <ul>
                @for ($i=0; $i < count($loggedExercise['weights']); $i++)
                    <li>
                        <button type="button" class="btn btn-danger btn-xs deleteSetBtn">{{ trans('workoutPlans.deleteSet') }}</button>
                        <input readonly type="number" class="readonlyInput" name="weight" value="{{ $loggedExercise['weights'][$i] }}">
                        <input readonly type="number" class="readonlyInput pull-right" name="rep" data-rep="{{ $loggedExercise['id'] }}" value="{{ $loggedExercise['reps'][$i] }}">
                    </li>
                @endfor
            </ul>
        </section>
    </div>
@empty
    <div id="noExercises" class="topMargin">
        {{ trans('workoutPlans.noExercisesAdded') }}
    </div>
@endforelse
