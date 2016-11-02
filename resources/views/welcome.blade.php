@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Move to flash.blade.php
    @if (Session::has('flash_message'))
        <div class="alert alert-{{ Session::get('flash_message_level') }}" role="alert">
            {{ Session::get('flash_message') }}
        </div>
    @endif
    --}}
    @include('flash')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
