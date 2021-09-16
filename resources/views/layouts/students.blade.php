@extends('skeleton')
@section('title', 'Diákok')

@section('main')
<main>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>NAME</th>
                <th>SEX</th>
                <th>PLACE AND</th>
                <th>DATE OF BIRTH</th>
                <th>GROUPS</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($students as $student)
        <tr>
                <td><a href="/student/{{ $student->id }}"><img src="{{ $student->avatar }}" alt="{{ $student->avatar }}"></a></td>
                <td><a href="/student/{{ $student->id }}">{{ $student->name }}</a></td>
                <td>{{ $student->sex }}</td>
                <td>{{ $student->birth_place }}</td>
                <td>{{ $student->birth_date }}</td>
                <td>
@forelse($student->studygroups as $group)
@if ($loop->last)
                    <a href="studygroup/{{ $group->id }}">{{ $group->name }}</a>
@else
                    <a href="studygroup/{{ $group->id }}">{{ $group->name }}</a>,
@endif
@empty
                    <strong>- none -</strong>
@endforelse
                </td>
            </tr>
    @endforeach
    </tbody>
    </table>
    {{ $students->links('includes.paginator') }}
</main>
@endsection
