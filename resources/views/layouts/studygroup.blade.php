@extends('skeleton')
@section('title', $group->name)
@section('style')

        @include('style.fontawesome')

        main {
            display: grid;
            grid-template-columns: 68%;
            grid-template-rows: auto auto auto;
            grid-gap: 2vmax;
            justify-content: flex-end;
            align-content: end;
            background-image: url('/img/group.png');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: 2wax center;
        }
        header.listHead {
            display: flex;
            justify-content: space-between;
        }
        header.listHead > h2, header.listHead > p, header.listHead > ul {
            display: inline-flex;
            justify-content: center;
            align-items: center;
        }
        header.listHead > h2 { font-size: 2rem;}
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
        h3 {
            font-size: 1.6rem;
            font-style: italic;
        }
        th, caption {
            font-size: 1.5rem;
            font-weight: normal;
            padding: 0.5rem 0;
            text-align: left;
        }
        td {
            font-size: 1.4rem;
            padding: 0.5rem 0;
        }
        .fa {
            background-color: #2cc0d5;
            color: #ffffff;
            padding: 0.5rem;
            margin-right: 0.5rem;
            border-radius: 0.25rem 0 0 0.25rem;
        }
        .avatar {
            height: 2rem;
            border: 1px solid black;
            border-radius: 1rem;
            vertical-align: baseline;
        }
@endsection

@section('main')
    <header class="listHead">
        <h2>{{ $group->name }}</h2>
        <ul>
            <li><a href="/studygroups/{{ $group->id }}/edit"><i class="fa fa-edit"></i>Edit</a></li>
            <li><a href="/studygroups/{{ $group->id }}/delete"><i class="fa fa-trash"></i>Delete</a></li>
        </ul>
    </header>
    <h3>{{ $group->subject }}</h3>
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
