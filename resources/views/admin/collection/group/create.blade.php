@extends('layouts.admin')

@section('content')

        <div class="container-fluid mt-5">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>Collections | Group Form</h4>
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
                    <form action="{{url('group-store')}}" method="POST">
                        {{ @csrf_field() }}
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" name="name" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="FormControlTextarea1">Description</label>
                            <textarea class="form-control" name="descrip" id="FormControlTextarea" rows="3" placeholder="Enter Desscrption"></textarea>
                          </div>
                        <div class="form-check">
                            <input type="checkbox"  class="form-check-input" id="formCheck1">
                            <label class="form-check-label" name="status" for="formCheck1">Check/Hide</label>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                              <button type="submit"  class="btn btn-success">Save</button>
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
