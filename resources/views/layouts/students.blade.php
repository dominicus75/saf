@extends('skeleton')
@section('title', 'Diákok')

@section('main')
<main>
    <ul>
    @foreach ($students as $student)
    <li>
            <img src="{{ $student->avatar }}" alt="{{ $student->avatar }}">
            {{ $student->name }}
            {{ $student->sex }}
            {{ $student->birth_place }},
            {{ $student->birth_date }}
        </li>
    @endforeach
</ul>
{{ $students->links('includes.paginator') }}
</main>
@endsection


