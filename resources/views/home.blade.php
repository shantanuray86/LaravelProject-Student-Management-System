@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(Auth::user()->role=="teacher")
        @include('layouts.teacherSideMenu')
        @elseif(Auth::user()->role=="student")
        @include('layouts.studentSideMenu')
        @endif
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->role=="teacher")
                    <p><?php echo "This is teacher's dashbaord"?></p>
                    @elseif(Auth::user()->role=="student")
                    <p><?php echo "This is student's dashbaord"?></p>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
