@extends('templates.base')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-6">
            <a class="btn btn-block btn-success" href="{{route('one')}}">
                Ir a la primer p&aacute;gina
            </a>    
        </div>
        <div class="col-6">
            <a class="btn btn-block btn-success" href="{{route('two')}}">
                Ir a la segunda p&aacute;gina
            </a>
        </div>
    </div>
</div>
    
@endSection