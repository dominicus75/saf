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
@include('includes.grouplist')
@endsection

@section('script')
<script>

    var section = 'main';

    @include('includes.ajax')

</script>
@endsection
