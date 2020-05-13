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
                <div class="card-header" style="font-size: 20px"><b>Student List</b>
                || <a href="{{ url('/admin/student/add') }}">Add Student</a>
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father's Name</th>
                    <th scope="col">Mother's Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Home Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Department</th>
                    <th scope="col">Class</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as  $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->father_name }}</td>
                    <td>{{ $data->mother_name }}</td>
                    <td>{{ $data->phone_number }}</td>
                    <td>{{ $data->home_number }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->department->title }}</td>
                    <td>{{ $data->classes->title }}</td>
                    <td>
                        <a href="{{ url('/admin/student/edit',$data->id) }}">Edit</a> ||
                        <form id="delete-form-{{ $data->id }}" method="post" action="{{ url('/admin/student/delete', $data->id) }}" style="display: none">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                        </form>

                        <a href="" onclick="
                                if(confirm('Are you sure, You want to Delete this ??'))
                                {
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $data->id }}').submit();
                                }
                                else {
                                event.preventDefault();
                                }">Delete
                        </a>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection