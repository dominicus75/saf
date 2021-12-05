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
    <form method="post" action="/students/{{ $student->id }}/update" id="update">
        @csrf

        <fieldset>
            <legend>Editing {{ $student->name }}'s datas</legend>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ $student->name }}"><br>
            <label for="sex">Sex:</label><br>
            <select name="sex" id="sex">
@if ($student->sex == 'Male')
                <option selected>Male</option>
                <option>Female</option>
                <option>Other</option>
@elseif ($student->sex == 'Female')
                <option>Male</option>
                <option selected>Female</option>
                <option>Other</option>
@else
                <option>Male</option>
                <option>Female</option>
                <option selected>Other</option>
@endif
            </select>
            <label for="birth_place">Birth place:</label><br>
            <input type="text" id="birth_place" name="birth_place" value="{{ $student->birth_place }}"><br>
            <label for="birth_date">Birth date:</label><br>
            <input type="text" id="birth_date" name="birth_date" value="{{ $student->birth_date }}"><br>
            <label for="email">E-mail:</label><br>
            <input type="text" id="email" name="email" value="{{ $student->email }}"><br>
@foreach($groups as $group)
        @if($student->studygroups->contains($group->id))
            <input type="checkbox" id="{{ $group->id }}" name="choosen[]" value="{{ $group->id }}" checked>
        @else
            <input type="checkbox" id="{{ $group->id }}" name="choosen[]" value="{{ $group->id }}">
        @endif
            <label for="{{ $group->id }}">{{ $group->name }}</label><br>
@endforeach
            <input type="submit" id="submit" value="Save changes">
        </fieldset>
    </form>
@endsection
