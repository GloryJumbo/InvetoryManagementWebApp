@extends('layouts.admin')

@section('content')

        <div class="container-fluid mt-5">

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Collections | Group Edit Form</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="card-body">
                    <form action="{{url('group-update/'.$group->id)}}" method="POST">
                        {{ @csrf_field() }}
                        {{ @method_field('PUT') }}
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text"  name="name" class="form-control" value="{{$group->name}}" placeholder="Enter Name">
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="FormControlTextarea1">Description</label>
                            <textarea class="form-control" name="descrip" id="FormControlTextarea" rows="3" placeholder="Enter Desscrption">{{$group->descrip}}</textarea>
                          </div>
                        <div class="form-check">
                            <input type="checkbox"  class="form-check-input" id="formCheck1">
                            <label class="form-check-label" {{$group->status == '1' ? 'checked' : ''}} name="status" for="formCheck1">Check/Hide</label>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                              <button type="submit"  class="btn btn-info">Update</button>
                            </div>
                        </div>
                    </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
