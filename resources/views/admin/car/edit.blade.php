@extends('admin.admin_master')
@section('admin')


    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit Car</div>
                        <div class="card-body">

                            <form action=" {{ url('car/update/'.$car->id)  }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="old_image" value="{{$car->img}}">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" value="{{ $car->name }} ">

                                    @error('name')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Persons</label>
                                    <input type="text" name="persons" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" value="{{ $car->persons }} ">

                                    @error('persons')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Doors</label>
                                    <input type="text" name="doors" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" value="{{ $car->doors }} ">

                                    @error('doors')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Range</label>
                                    <input type="text" name="range" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" value="{{ $car->range }} ">

                                    @error('range')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                              name="description">{{$car->description}}</textarea>

                                    @error('description')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Price</label>
                                    <input type="text" name="price" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" value="{{ $car->price }} ">

                                    @error('price')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" value="{{ $car->img }} ">
                                    @error('image')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <img src="{{asset($car->img) }}" style="width: 400px;height: 200px;">
                                </div>

                                <button type="submit" class="btn btn-primary">Update Car</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
