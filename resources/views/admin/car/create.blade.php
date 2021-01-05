@extends('admin.admin_master')
@section('admin')

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Add Car</h2>
            </div>
            <div class="card-body">
                <form action=" {{ route('store.car')  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Persons</label>
                        <input type="text" name="persons" class="form-control" id="exampleFormControlInput1" placeholder="Persons">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Doors</label>
                        <input type="text" name="doors" class="form-control" id="exampleFormControlInput1" placeholder="Doors">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Range</label>
                        <input type="text" name="range" class="form-control" id="exampleFormControlInput1" placeholder="Range">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Car description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Car image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Price</label>
                        <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                    </div>

                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
