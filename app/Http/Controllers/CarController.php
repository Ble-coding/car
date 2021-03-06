<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars= Car::all();

        // dd($cars[0]->image);
        return view('cars.index' , compact('cars'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        $car = new Car();

        return view('cars.create', compact('car'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'immatricule' => ['required', 'string', 'max:255', 'unique:cars'],
            'couleur' => 'required|string',
            'placeassise' => 'required|string',
            'marque' => 'required|string',
            'genre' => 'required|string',
            'cylindre' => 'required|string',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // dd($request->all());
        $image = array();
        if($files = $request->file('image')){
            foreach ($files as $file) {
                $image_name =  md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'multiple_image/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            }
        }

        // Car::insert([
        //     'image' => implode('|', $image),
        // ]);

        // $cars = Car::create($request->all());
        $cars = Car::insert([
            'immatricule' => $request->immatricule,
            'genre' => $request->genre,
            'marque' => $request->marque,
            'cylindre' => $request->cylindre,
            'couleur' => $request->couleur,
            'placeassise' => $request->placeassise,
            'image' => implode('|', $image),
        ]);

        return Redirect::route('cars.index')->with('message', 'id-car '. $request->immatricule.'. F??licitation, les informations de la voiture '. $request->marque . '-'. $request->genre . ' ont bien ??t?? enregistr??es.');
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.edit',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $car)
    {
        $car = Car::find($car);

        $image = array();
        if($files = $request->file('image')){
            foreach ($files as $file) {
                $image_name =  md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'multiple_image/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            }
        }
 
        $car->update([
               'immatricule' => $request->immatricule,
                'genre' => $request->genre,
                'marque' => $request->marque,
                'cylindre' => $request->cylindre,
                'couleur' => $request->couleur,
                'placeassise' => $request->placeassise,
                'image' => implode('|', $image),
        ]);


        return Redirect::route('cars.index')->with('message', 'id-car '. $car->immatricule.'. F??licitation, les informations de la voiture '. $car->marque .'- '. $car->genre.' ont bien ??t?? modifi??es.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        // dd($id);
        $car->delete();

        return Redirect::route('cars.index')->with('message', 'les informations de la voiture immatricul??e ' .  $car->immatricule . ' ont ??t?? supprim??es');
    }

    // private function validator(){

    //     return request()->validate([
    //         'immatricule' => ['required', 'string', 'max:255', 'unique:cars'],
    //         'couleur' => 'required|string',
    //         'placeassise' => 'required|string',
    //         'marque' => 'required|string',
    //         'genre' => 'required|string',
    //         'cylindre' => 'required|string',
    //         'image' => 'required|string',
    //     ]);
    // }
}
