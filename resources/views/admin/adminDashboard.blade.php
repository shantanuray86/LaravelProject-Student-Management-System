@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-3">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                   
                </div>
            </div>
        </div> -->
        @include('layouts.adminSideMenu')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection