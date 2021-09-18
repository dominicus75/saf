@extends('skeleton')
@section('title', 'Studygroups')

@section('main')
<main>
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
    {{ $groups->links('includes.paginator') }}
</main>
@endsection
