@extends('skeleton')
@section('title', $group->name)
@section('style', '
        table {
            width: 75%;
        }

        th, td {
            vertical-align: middle;
            text-align: left;
            padding: .25rem 1rem;
        }


        .avatar {
            height: 2rem;
            border: 1px solid black;
            border-radius: 1rem;
            vertical-align: baseline;
        }
')

@section('main')
    <header>
        <h1>{{ $group->name }}</h1>
        <p>{{ $group->subject }}</p>
    </header>
    <table>
        <caption>Enrolled students</caption>
        <thead>
            <tr>
                <th></th>
                <th>NAME</th>
                <th>SEX</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($group->students as $student)
        <tr>
                <td><a href="/students/{{ $student->id }}"><img src="{{ $student->avatar }}" alt="{{ $student->avatar }}" class="avatar"></a></td>
                <td><a href="/students/{{ $student->id }}">{{ $student->name }}</a></td>
                <td>{{ $student->sex }}</td>
            </tr>
    @endforeach
    </tbody>
    </table>
@endsection
