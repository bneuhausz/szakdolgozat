<div class="col-md-3" style="margin-top:32px;">
    <div class="form-group">
        <input id="datePicker" name="date" style="width:100%;"/>
    </div>
</div>

<div class="col-md-3" style="margin-top:32px;">
    <!--<form class="form-horizontal" method="get" action="{{ url('/addExerciseToWorkout') }}">-->
    <form class="form-horizontal">
        <!--<div class="form-group">
            <input id="datePicker" value="2017-05-12" name="date" style="width:100%;"/>
            <input type="hidden" name="id" value="c1">
        </div>-->
        <div class="form-group">
            <select class="" name="muscleGroupSelect" id="muscleGroupSelect" style="width:100%;margin-bottom:10px;">
                @if (Config::get('app.locale') == 'hu')
                    <option value="0">Please Choose</option>
                    @foreach ($muscleGroups as $muscleGroup)
                        <option value="{{ $muscleGroup->id }}">{{ $muscleGroup->name_hu }}</option>
                    @endforeach
                @else
                    @foreach ($muscleGroups as $muscleGroup)
                        <option value="{{ $muscleGroup->id }}">{{ $muscleGroup->name_en }}</option>
                    @endforeach
                @endif
            </select>

            <div id="exerciseSelects" class="hidden">
                @include('frontend.partials.exerciseSelects')
            </div>
        </div>

        <input type="hidden" id="token" name="_token" value="{{ Session::token() }}">
    </form>
</div>

<div class="col-md-6" id="workoutSets">
    @if (count($loggedExercises) > 0)
        @include('frontend.partials.workoutSets')
    @endif
</div>
