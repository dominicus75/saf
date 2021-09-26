@extends('skeleton')
@section('title', 'Students')
@section('style', '
        form {
            width: 25%;
            float: left;
        }

        table {
            width: 74%;
        }

        th, td {
            vertical-align: middle;
            text-align: left;
            padding: .25rem 1rem .25rem 0;
        }

        th:last-child, td:last-child { text-align: right; }

        .avatar {
            height: 2rem;
            border: 1px solid black;
            border-radius: 1rem;
            vertical-align: baseline;
        }

        .avatar:hover {
            opacity: 0.4;
            border-color: #ed7b3d;
        }
')

@section('main')
    <form action="" method="get">
        <fieldset>
            <legend>FILTERS FOR STUDY GROUPS</legend>
@foreach($groups as $group)
            <input type="checkbox" id="{{ $group->id }}" name="choosen[]" value="{{ $group->id }}">
            <label for="{{ $group->id }}">{{ $group->name }}</label><br>
@endforeach
<input type="submit" value="Chosse">
        </fieldset>
    </form>
    {{ $students->links('includes.paginator') }}
    <table>
        <thead>
            <tr>
                <th></th>
                <th>NAME</th>
                <th>SEX</th>
                <th>PLACE AND DATE OF BIRTH</th>
                <th>GROUPS</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($students as $student)
        <tr>
                <td><a href="/students/{{ $student->id }}"><img src="{{ $student->avatar }}" alt="{{ $student->avatar }}" class="avatar"></a></td>
                <td><a href="/students/{{ $student->id }}">{{ $student->name }}</a></td>
                <td>{{ $student->sex }}</td>
                <td>{{ $student->birth_place }}, {{ $student->birth_date }}</td>
                <td>
@forelse($student->studygroups as $group)
@if ($loop->last)
                    <a href="studygroups/{{ $group->id }}">{{ $group->name }}</a>
@else
                    <a href="studygroups/{{ $group->id }}">{{ $group->name }}</a>,
@endif
@empty
                    <strong>- none -</strong>
@endforelse
                </td>
            </tr>
    @endforeach
    </tbody>
    </table>
@endsection
