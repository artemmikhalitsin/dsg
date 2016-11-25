@extends('layouts.app')

@section('content')

@foreach ($sequenceInfo as $s)
    {{$s->name}} | {{$s->level}} |
    @foreach ($s->prerequisiteList as $p)
    (
    [{{$p->prereq_id}}] [{{$p->isCorequisite}}]
        @for ($i = 0; $i < (sizeof($p->prerequisiteChoices) - 1); $i++)

            {{$p->prerequisiteChoices[$i]->name}} or
        @endfor
        {{array_values(array_slice($p->prerequisiteChoices, -1))[0]->name}}
    )
    @endforeach
    <br>
@endforeach

@endsection
