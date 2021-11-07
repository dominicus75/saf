@extends('skeleton')
@section('title', $student->name)
@section('style')

        @include('style.fontawesome')

        main {
            display: grid;
            grid-template-columns: 68%;
            grid-template-rows: auto auto;
            grid-gap: 2vmax;
            justify-content: flex-end;
            align-content: end;
            background-image: url('/img/student-icon.png');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: 2wax center;
        }
        header.listHead {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2vmax;
        }
        header.listHead > h2, header.listHead > ul {
            display: inline-flex;
            justify-content: center;
            align-items: center;
        }
        header.listHead > h2 { font-size: 2.1rem;}
        header.listHead > ul > li {
            background-color: #34cae0;
            border-radius: 0.25rem;
            border: 1px solid #2cc0d5;
            margin-left: 1rem;
        }
        header.listHead > ul > li > a {
            color: #ffffff;
            padding-right: 0.5rem;
        }
        header.listHead > ul > li > a:hover,
        .fa:hover { color: #ed7b3d;  }
        td { font-size: 1.4rem; }
        .fa {
            background-color: #2cc0d5;
            color: #ffffff;
            padding: 0.5rem;
            margin-right: 0.5rem;
            border-radius: 0.25rem 0 0 0.25rem;
        }
        .avatar {
            border: 1px solid black;
            height: 100%;
        }

@endsection

@section('main')
    <header class="listHead">
        <h2>{{ $student->name }}</h2>
        <ul>
            <li><a href="/students/{{ $student->id }}/edit"><i class="fa fa-edit"></i>Edit</a></li>
            <li><a href="/students/{{ $student->id }}/delete"><i class="fa fa-trash"></i>Delete</a></li>
        </ul>
    </header>
    <table>
        <tr>
            <td rowspan="5"><img src="{{ $student->avatar }}" alt="{{ $student->avatar }}" class="avatar"></a></td>
            <td>Sex:</td>
            <td>{{ $student->sex }}</td>
        </tr>
        <tr>
            <td>Birth place:</td>
            <td>{{ $student->birth_place }}</td>
        </tr>
        <tr>
            <td>Birth date</td>
            <td>{{ $student->birth_date }}</td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td>{{ $student->email }}</td>
        </tr>
        <tr>
            <td>Study groups:</td>
            <td>
            @forelse($student->studygroups as $group)
@if ($loop->last)
                <a href="/studygroups/{{ $group->id }}">{{ $group->name }}</a>
@else
    <a href="/studygroups/{{ $group->id }}">{{ $group->name }}</a>,
@endif
@empty
                <strong>- none -</strong>
@endforelse
            </td>
        </tr>

    </table>
@endsection
