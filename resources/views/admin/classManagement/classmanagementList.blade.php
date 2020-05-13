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
                <div class="card-header" style="font-size: 20px"><b>Class List</b>
                || <a href="{{ url('/admin/class/add') }}">Add Class</a>
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
                            <th scope="col">Teacher Name</th>
                            <th scope="col">Subject Name</th>
                            <th scope="col">Class Name</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($classmanagementlist as  $data)
                        <tr>
                            <th scope="row">{{ $data->id }}</th>
                            <td>{{ $data->name }}</td>
                            <td>
                            <ul>
                            @foreach($data->subjects as $sub)
                            <li>{{ $sub->subname->title}}</li>
                            @endforeach
                            </ul>
                            </td>
                            <td>
                            <ul>
                            @foreach($data->classes as $sub)
                            <li>{{ $sub->classname->title}}</li>
                            @endforeach
                            </ul>
                            </td>
                            <td>
                                <a href="{{ url('admin/class/edit',$data->id) }}">Edit</a> ||
                                <form id="delete-form-{{ $data->id }}" method="post" action="{{ url('admin/class/delete', $data->id) }}" style="display: none">
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