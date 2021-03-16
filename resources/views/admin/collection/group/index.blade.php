@extends('layouts.admin')

@section('content')

        <div class="container-fluid mt-5">
        <!-- Heading -->
            <div class="card mb-4 wow fadeIn">
                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">
                    <h4 class="mb-2 mb-sm-0 pt-1">
                       <span> Collections | Group</span>
                        <a href="{{url('group-add')}}" class="btn btn-primary py-2">Add Category</a>
                    </h4>
                </div>
            </div>
            <!-- Heading -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Show</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach ($group as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->descrip}}</td>
                                <td>
                                    <input type="checkbox" href="{{ $item->status== "1" ? checked : '' }}">
                                </td>
                                <td>
                                    <a href="{{url('group-edit/'.$item->id)}}" class="badge btn-success">Edit</a>
                                    <a href="{{url('group-delete/'.$item->id)}}" class="bagde btn-danger">Delete</a>
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
