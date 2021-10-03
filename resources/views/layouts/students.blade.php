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
            <input type="button" id="choose" value="Choose groups">
        </fieldset>
    </form>
    <section id="studentlist">
    @include('includes.studentlist')
    </section>
@endsection

@section('script')
<script>

    var section = 'studentlist';

    @include('includes.ajax')

    @include('includes.choosen')

</script>
@endsection
