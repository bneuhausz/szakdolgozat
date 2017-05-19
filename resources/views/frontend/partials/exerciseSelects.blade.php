<select name="exerciseSelect" id="exerciseSelect">
    @if (Config::get('app.locale') == 'hu')
        @foreach ($exercises as $exercise)
            <option value="{{ $exercise->id }}">{{ $exercise->name_hu }}</option>
        @endforeach
    @else
        @foreach ($exercises as $exercise)
            <option value="{{ $exercise->id }}">{{ $exercise->name_en }}</option>
        @endforeach
    @endif
    @foreach ($customExercises as $customExercise)
        <option value="c{{ $customExercise->id }}">(*){{ $customExercise->name }}</option>
    @endforeach
</select>

<br>
<input placeholder="kg" id="kg" type="number" name="weights">
<input placeholder="db" id="db" type="number" name="reps">

<div class="form-group">
    <a href="#" id="addExerciseButton" class="btn btn-primary btn-xs center">{{ trans('general.add') }}</a>
</div>

<span class="hidden" id="setError"><b>{{ trans('workoutPlans.setDB') }}</b></span>
