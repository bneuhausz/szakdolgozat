<select name="exerciseSelect" id="exerciseSelect" style="width:100%;margin-bottom:10px;">
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
        <option value="c{{ $customExercise->id }}">{{ $customExercise->name }}</option>
    @endforeach
</select>

<br>
<input placeholder="kg" id="kg" type="number" name="weights" style="width:100%;margin-bottom:10px;">
<input placeholder="db" id="db" type="number" name="reps" style="width:100%;margin-bottom:10px;">

<div class="form-group">
    <a href="#" id="addExerciseButton" class="btn btn-primary btn-xs center" style="width:50%;">Add Exercise</a>
    <!--<button type="submit" id="addExerciseButton" class="btn btn-primary btn-sm center">Add Exercise</button>-->
</div>
