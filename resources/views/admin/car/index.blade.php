@extends('admin.admin_master')
@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <h4>Manage cars</h4>
                <a href="{{route('car.add')}}">
                    <button class="btn btn-info" style=" margin-left: 20px ">Add Car</button>
                </a>
                <br><br>
                <div class="col-md-12">
                    <div class="card">

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('success')}} </strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="card-header">Car list</div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" style="width: 5%"></th>
                                <th scope="col" style="width: 7%">Name</th>
                                <th scope="col" style="width: 5%">Persons</th>
                                <th scope="col" style="width: 5%">Door</th>
                                <th scope="col" style="width: 5%">Range</th>
                                <th scope="col" style="width: 17%">Description</th>
                                <th scope="col" style="width: 5%">Price</th>
                                <th scope="col" style="width: 13%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                               @php($i = 1)
                            @foreach($cars as $car)
                                <tr>
                                    <td><img src="{{ asset($car->img) }}" alt=""
                                             style="height: 100px; width: 140px"></td>
                                    <td>{{$car->name}} </td>
                                    <td>{{$car->persons}} </td>
                                    <td>{{$car->doors}} </td>
                                    <td>{{$car->range}} </td>
                                    <td>{{$car->description}} </td>
                                    <td>{{$car->price}} </td>
                                    <td>
                                        <a href="{{ url('car/edit/'.$car->id )  }}" class="btn btn-info">Edit</a>
                                        <a href="{{  url('car/delete/'.$car->id )  }}"
                                           onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
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
