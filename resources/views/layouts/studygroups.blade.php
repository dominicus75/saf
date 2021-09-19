@extends('skeleton')
@section('title', 'Studygroups')
@section('style', '
        table {
        }

        th, td {
            vertical-align: middle;
            text-align: left;
            padding: .25rem 1rem .25rem 0;
        }

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
    {{ $groups->links('includes.paginator') }}
    <table>
        <thead>
            <tr>
                <th>NAME</th>
                <th>LEADER</th>
                <th>SUBJECT</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($groups as $group)
        <tr>
                <td><a href="studygroups/{{ $group->id }}">{{ $group->name }}</a></td>
                <td>{{ $group->leader }}</td>
                <td>{{ $group->subject }}</td>
            </tr>
    @endforeach
    </tbody>
    </table>
@endsection
