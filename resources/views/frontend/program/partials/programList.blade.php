<ul>
    @foreach ($programs as $program)
        <a href="{{ route('program', ['programID' => $program->id]) }}"><li><span>{{ $program->name }}<span></li></a>
    @endforeach
</ul>
