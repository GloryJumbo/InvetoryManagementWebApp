@extends('layouts.admin')

@section('content')

        <div class="container-fluid mt-5">

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body d-sm-flex justify-content-between">
                        <h4>Collections | Category Edit Form</h4>
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
                    <form action="{{url('category-update/'.$category->id)}}" method="POST">
                        {{ @csrf_field() }}
                        {{ @method_field('PUT') }}

                        <div class="row">
                        <div class="col-md-12">

                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputName">Group Id(Name)</label>
                                    <select name="group_id"  class="form-control">
                                        <option value="{{$category->group_id}}">{{$category->group->name}}</option>
                                        @foreach($group as $gitem)
                                        <option value="{{$gitem->id}}">{{$gitem->name}}</option>
                                        @endforeach
                                    </select>

                                </div>

                                  <div class="form-group col-md-6">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="Enter name">
                                  </div>
                                </diV>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="FormControlTextarea1">Description</label>
                            <textarea class="form-control" name="description"  id="FormControlTextarea" rows="3" placeholder="Enter Desscrption">{{$category->description}}</textarea>
                          </div>
                        <div class="form-check">
                            <input type="checkbox"  class="form-check-input" id="formCheck1">
                            <label class="form-check-label" name="status" for="formCheck1">Check/Hide</label>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                              <button type="submit"  class="btn btn-success">Update</button>
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
