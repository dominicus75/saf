@extends('skeleton')
@section('title', $student->name)
@section('style')

        @include('style.fontawesome')

        main {
            background-image: url('/img/student-icon.png');
            background-repeat: no-repeat;
            background-size: cover;
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
        form {
            display: grid;
            grid-template-columns: 1fr 2fr;
            grid-template-rows: auto;
            grid-template-areas:
            "groups image"
            "groups personal"
            "button personal";
            grid-gap: 2vmax;
            justify-content: center;
            align-content: center;
            min-height: 40vmax;
        }
        fieldset {
            display: block;
            border: 1px solid grey;
            border-radius: 1rem;
            padding: 1rem;
            background-color: rgb(189, 195, 199, 0.5);
        }
        legend {
            font-size: 1.4rem;
            font-weight: bold;
            color: #ffffff;
            border: 1px solid grey;
            border-radius: 0.5rem;
            padding: 0.3rem;
            background-color: #2cc0d5;
        }
        .alert {
            border: 1px solid red;
            border-radius: 0.5rem;
            padding: 1rem;
            color: red;
            font-weight: bold;
            background-color: rgb(255, 0, 0, 0.4);
            margin-bottom: 1vmax;
        }
        fieldset#personal {
            grid-area: personal;
        }
        fieldset#groups {
            grid-area: groups;
        }
        fieldset#iamge {
            grid-area: image;
        }
        fieldset#personal ul li {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1vmax;
            align-items: center;
            width: 100%;
        }
        fieldset#personal ul li label {
            display: inline-block;
            width: 35%;
            font-weight: bold;
            font-size: 1.2rem;
        }
        input[type=text], input[type=date], input[type=email], select {
            width: 100%;
            border: 1px solid black;
            border-radius: 4px;
            padding: 0.3rem 0;
        }
        input[type=text], input[type=date], input[type=email] {
            padding-left: 0.5rem;
        }
        #button {
            grid-area: button;
        }
        input[type=checkbox] {
        }
        .ckeckbox {
            font-size: 1rem;
            font-weight: bold;
        }
        #submit {
            width: 100%;
            background-color: #ed7b3d;
            color: #ffffff;
            padding: 1rem;
            font-size: 2rem;
            font-weight: bold;
            border-radius: 1rem;
            border-width: 1px;
            border-color: grey;
        }

@endsection

@section('main')
@if ($errors->any())
    <div class="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="post" action="/students/{{ $student->id }}/update" id="data">
        @csrf
        <fieldset id="groups">
            <legend>Editing {{ $student->name }}'s studygroups</legend>
@foreach($groups as $group)
        @if($student->studygroups->contains($group->id))
            <input type="checkbox" id="{{ $group->id }}" name="groups[]" value="{{ $group->id }}" checked>
        @else
            <input type="checkbox" id="{{ $group->id }}" name="groups[]" value="{{ $group->id }}">
        @endif
            <label for="{{ $group->id }}" class="ckeckbox">{{ $group->name }}</label><br>
@endforeach
        </fieldset>
        <fieldset id="image">
            <legend>Editing {{ $student->name }}'s avatar</legend>
            <img src="{{ $student->avatar }}" alt="{{ $student->avatar }}" class="avatar">
        </fieldset>
        <fieldset id="personal">
            <legend>Editing {{ $student->name }}'s personal datas</legend>
            <ul>
                <li>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ $student->name }}">
                </li>
                <li>
                    <label for="sex">Sex:</label>
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
                </li>
                <li>
                    <label for="birth_place">Birth place:</label>
                    <input type="text" id="birth_place" name="birth_place" value="{{ $student->birth_place }}">
                </li>
                <li>
                    <label for="birth_date">Birth date:</label>
                    <input type="date" id="birth_date" name="birth_date" value="{{ $student->birth_date }}">
                </li>
                <li>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" value="{{ $student->email }}">
                </li>
            </ul>
        </fieldset>
        <div id="button">
            <input type="submit" id="submit" value="Save changes">
        </div>
    </form>
@endsection
