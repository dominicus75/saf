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
    document.getElementById("choose").addEventListener("click", function(event){

        event.preventDefault();

        var choosen = document.querySelectorAll('input[type=checkbox]:checked');
        var queryString = '?';

        for (var i = 0; i < choosen.length; i++) {
            if(i < choosen.length - 1) {
                queryString += 'choosen[]='+choosen[i].value+'&';
            } else {
                queryString += 'choosen[]='+choosen[i].value;
            }
        }

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("studentlist").innerHTML = this.responseText;
            }
        };

        xhttp.open("GET", "/students"+queryString, true);
        xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhttp.send();

    });
</script>
@endsection
