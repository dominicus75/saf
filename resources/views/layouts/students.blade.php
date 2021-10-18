@extends('skeleton')
@section('title', 'Students')
@section('style')

        @include('style.fontawesome')

        main {
            display: grid;
            grid-template-columns: 1fr 4fr;
            grid-template-rows: auto auto;
            grid-gap: 2rem;
            justify-content: space-between;
            align-content: stretch;
        }
        form#students {
            display: grid;
            grid-template-columns: auto auto;
            margin-bottom: 1.9vmax;
            height: 2rem;
        }
        input#nsearch {
            border-top: 1px solid #9ca8af;
            border-right: 0;
            border-bottom: 1px solid #9ca8af;
            border-left: 1px solid #9ca8af;
            border-radius: 3px 0 0 3px;
            font-size: 1rem;
            padding-left: 0.5rem;
        }
        input#nsearch:focus { background-color: #34cae0; }
        button#nsearchb {
            border-top: 1px solid #9ca8af;
            border-right: 1px solid #9ca8af;
            border-bottom: 1px solid #9ca8af;
            border-left: 0;
            border-radius: 0 3px 3px 0;
        }
        input#nsearch, button#nsearchb, ul#namelist {
            background-color: #e4e8eb;
        }
        ul#namelist {
            display: none;
            border: 1px solid #9ca8af;
            border-radius: 0 0 3px 3px;
            z-index: 1;
        }
        input#nsearch:focus ~ ul#namelist, input#nsearch:focus-within ~ ul#namelist {
            display: block;
        }
        ul#namelist a {
        }
        legend {
            vertical-align: middle;
            text-align: left;
            padding: 1rem 1rem 1rem 0;
        }
        label { font-weight: bold; }
        input[type="checkbox"]:checked + label {
            color: #2cc0d5;
        }
        #choose {
            background-color: #34cae0;
            color: #ffffff;
            height: 2rem;
            margin-top: 2rem;
            padding: 0 1rem;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 3px;
            border-width: 1px;
            border-color: #2cc0d5;
        }

        @include('style.paginator')
        @include('style.studentslist')

@endsection

@section('main')
    <aside>
        <form method="get" action="/search" id="students">
            <input type="search" id="nsearch" name="name" placeholder="Search for name">
            <button id="nsearchb"><i class="fa fa-search"></i></button>
            <ul id="namelist">
                <li><a href="/students/1">student 1</a></li>
                <li><a href="/students/2">student 2</a></li>
                <li><a href="/students/3">student 3</a></li>
                <li><a href="/students/4">student 4</a></li>
                <li><a href="/students/5">student 5</a></li>
                <li><a href="/students/6">student 6</a></li>
            </ul>
        </form>
        <form method="get" id="groups">
            <fieldset>
                <legend>FILTERS FOR STUDY GROUPS</legend>
@foreach($groups as $group)
                <input type="checkbox" id="{{ $group->id }}" name="choosen[]" value="{{ $group->id }}" class="sgroup">
                <label for="{{ $group->id }}">{{ $group->name }}</label><br>
@endforeach
                <input type="button" id="choose" value="Choose groups">
            </fieldset>
        </form>
    </aside>
    <section id="studentlist">
    @include('includes.studentlist')
    </section>
@endsection

@section('script')
<script>

    @include('js.ajax')

    @include('js.paginator')

    window.addEventListener("load", function(event){ paginator('studentlist'); });

    document.getElementById("choose").addEventListener("click", function(event){
        event.preventDefault();
        var choosen = document.querySelectorAll('input[type=checkbox]:checked');
        var url     = '/students?';
        for (var i = 0; i < choosen.length; i++) {
            if(i < choosen.length - 1) {
                url += 'choosen[]='+choosen[i].value+'&';
            } else {
                url += 'choosen[]='+choosen[i].value;
            }
        }
        ajax({
            type: 'GET',
            url: url,
            success: function(response) {
                document.getElementById('studentlist').innerHTML = response;
                paginator('studentlist');
            }
        });
    });

</script>
@endsection
