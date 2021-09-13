@extends('skeleton')
@section('title', 'Diákok')

@section('main')
<main>
    @foreach ($students as $student)
        {{ $student->name }}
    @endforeach
{{ $students->links('includes.paginator') }}
</main>
@endsection


