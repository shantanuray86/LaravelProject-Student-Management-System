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
                <div class="card-header" style="font-size: 20px"><b>Department List</b>
                || <a href="{{ url('/admin/department/add') }}">Add Department</a>
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($departmentList as  $data)
                        <tr>
                            <th scope="row">{{ $data->id }}</th>
                            <td>{{ $data->title }}</td>
                            <td>
                                <a href="{{ url('/admin/department/edit',$data->id) }}">Edit</a> ||
                                <form id="delete-form-{{ $data->id }}" method="post" action="{{ url('/admin/department/delete', $data->id) }}" style="display: none">
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
@endsection