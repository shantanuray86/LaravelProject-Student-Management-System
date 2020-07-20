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
                        <label>Name</label>
                        :- <span>{{$myinfo->name}}</span><br>
                        <label>Mobile</label>
                        :- <span>{{$myinfo->phone_number}}</span><br>
                        <label>Email</label>
                        :- <span>{{$myinfo->email}}</span><br>
                        <label>Father's Name</label>
                        :- <span>{{$myinfo->father_name}}</span><br>
                        <label>Mother's Name</label>
                        :- <span>{{$myinfo->mother_name}}</span><br>
                        <label>Present Address</label>
                        :- <span>{{$myinfo->present_address}}</span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
