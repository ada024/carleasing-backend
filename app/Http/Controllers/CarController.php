<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;
use Auth;


class CarController extends Controller
{
    public function  CarFetch(){
        $cars = Car::latest()->get();
        return view('admin.car.index',compact('cars'));
    }

    public function CarAdd(){
        return view('admin.car.create');
    }

    public function StoreCar(Request $request){

        $car_image = $request->file('image'); // image is from <form name=image


        $name_gen = hexdec(uniqid()) . '.' . $car_image->getClientOriginalExtension();
        Image::make($car_image)->resize(1920, 1088)->save('image/car/' . $name_gen);

        // path
        $last_img = 'image/car/'.$name_gen;
// Save fields to DB (Left-side fields in db)
        Car::insert([
            'name' => $request->name,
            'persons' => $request->persons,
            'doors' => $request->doors,
            'range' => $request->range,
            'description' => $request->description,
            'price' => $request->price,
            'img' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.car')->with('success', 'Car inserted Successfully!');

    }


    public function Edit($id)
    {
        $car = Car::find($id);
        return view('admin.car.edit', compact('car'));

    }

    public function Update(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|min:4',
                'persons' => 'required',
                'doors' => 'required',
                'range' => 'required',
                'price' => 'required',
                'description' => 'required|min:40',
            ],
            [
                'name.required' => 'Please input Car-name',
                'name.min' => 'Car Longer then 4 characters',
                'description.min' => 'Description minimum 40char'
            ]);

        $old_image = $request->old_image;
        $image = $request->file('image');

        // If user have picked an image else user only want to update the properties
        if ($image) {
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($image->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $up_location = 'image/car/';
            $last_img = $up_location . $img_name;
            $image->move($up_location, $img_name);

            unlink($old_image);

            Car::find($id)->update([
                'name' => $request->name,
                'persons' => $request->persons,
                'doors' => $request->doors,
                'range' => $request->range,
                'description' => $request->description,
                'price' => $request->price,
                'img' => $last_img,
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Car Updated Successfully!',
                'alert-type' => 'info'
            );

            return Redirect()->back()->with($notification);

        } else {
            Car::find($id)->update([
                'name' => $request->name,
                'persons' => $request->persons,
                'doors' => $request->doors,
                'range' => $request->range,
                'description' => $request->description,
                'price' => $request->price,
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Car Updated Successfully!',
                'alert-type' => 'warning'
            );
            return Redirect()->back()->with($notification);
        }
    }


    public function Delete($id)
    {
        $old_image = Car::find($id)->img;
        unlink($old_image);
        Car::find($id)->delete();
        $notification = array(
            'message' => 'Car Deleted Successfully!',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);

    }


    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login')->with('success', 'User Logout');
    }
}
