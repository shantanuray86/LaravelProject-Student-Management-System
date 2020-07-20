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
                

                <div class="card-body">
                    <div class="card-header">Add New Student</div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/student/studentSubjectRelation/'.Request::segment(4)) }}">
                @csrf
               
                <div class="form-group row">
                    <label for="subject" class="col-md-4 col-form-label text-md-right">Subjects</label>

                    <div class="col-md-6">
                        <select class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" required>
                            <option value="">Select Subject</option>
                        @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->title }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('department_id'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('subject') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                

                
                
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>

                    </div>
                </div>
            </form>
                <div class="form-group row">
                        <label for="subject" class="col-md-4 col-form-label text-md-right">Subjects</label><br>
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