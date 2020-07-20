@extends('../layouts.app')

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
                    <div>
                        Class: <span>{{$myclass->classes->title}}</span>
                    </div>
                    <div>
                        Subjects:
                        @if(count($mysubjects)>0)
                        <ul>
                            @foreach($mysubjects as $sub)
                            <li>{{ $sub->mysubject->title}}</li>
                            @endforeach
                        </ul>
                        @else
                        </br>
                        <div>
                        <p>No Subjects Available</p>
                        </div>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
