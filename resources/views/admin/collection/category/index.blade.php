@extends('layouts.admin')

@section('content')

        <div class="container-fluid mt-5">
        <!-- Heading -->
            <div class="card mb-4 wow fadeIn">
                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">
                    <h4 class="mb-2 mb-sm-0 pt-1">
                        Collections | Category
                        <a href="{{url('category-add')}}" class="btn btn-primary py-2">Add category</a>                    </h4>
                    </h4>
                </div>
            </div>
        </div>
     <!-- Heading -->
     <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                <h6>{{ session('status') }}</h6>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Group Name</th>
                            <th>Description</th>
                            <th>Show</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach ($category as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->group->name}}</td>
                            <td>{{$item->description}}</td>
                            <td>
                                <input type="checkbox" href="{{ $item->status== "1" ? checked : '' }}">
                             </td>
                            <td>
                                <a href="{{url('category-edit/'.$item->id)}}" class="badge btn-success">Edit</a>
                                <a href="{{url('category-delete/'.$item->id)}}" class="bagde btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
