<?php

namespace App\Http\Controllers;

use App\Model\Base\Aeration;
use App\Model\Base\Color;
use App\Model\Base\Glazing;
use App\Model\Base\Installation;
use App\Model\Base\Insulation;
use App\Model\Base\Join;
use App\Model\Base\Leave;
use App\Model\Base\Material;
use App\Model\Base\Opening;
use App\Model\Base\Range;
use App\Model\Base\TotalHeight;
use App\Model\Base\TotalWidth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('pro');
    }

    public function index()
    {

        $projects = 
        [
            ["name"=>"project1"], 
            ["name"=>"project2"], 
            ["name"=>"project3"], 
            ["name"=>"project4"], 
            ["name"=>"project5"]
        ];

        $joinery = Join::all();
        $material = Material::all();
        $range = Range::all();
        $opening = Opening::all();
        $leave = Leave::all();
        $installation = Installation::all();
        $height = TotalHeight::all();
        $width = TotalWidth::all();
        $insulation = Insulation::all();
        $aeration = Aeration::all();
        $glazing = Glazing::all();
        $color = Color::all();


        return view('professional.index', compact('joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color', 'projects'));
    }

    public function account() 
    {

        return view('professional.account.index');
    
    }

    public function projects()
    {

        return view('professional.account.projects');

    }

    public function history()
    {

        $currenthistory = 
        [
            ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
            ["date"=>"14 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
            ["date"=>"9 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"]
        ];
    
        $otherhistory = 
        [
            "Mai 2020"=>[
                ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
                ["date"=>"14 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
                ["date"=>"9 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
                ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
                ["date"=>"14 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"]
            ],
            // "Juin 2020"=>[
            //     ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
            //     ["date"=>"14 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
            //     ["date"=>"9 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
            //     ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
            //     ["date"=>"14 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"]
            // ]
        ];
    
        return view('professional.account.history', compact('currenthistory', 'otherhistory'));
    }

    public function info()
    {

        $user = User::find(Auth::id());

        return view('professional.account.info', compact('user'));
    }

    public function modifyinfo(Request $request)
    {

        
        $validator = Validator::make($request->all(),
            [
                'gender' => 'required|string',
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'email' => 'required|string',
                // 'company' => 'string',
                'address' => 'required|string',
                'postcode' => 'required|string',
                'city' => 'required|string',
                // 'telephone' => 'string',
            ]);

        $data = ([
            'gender' => $request->gender,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'company' => $request->company,
            'address' => $request->address,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'telephone' => $request->telephone,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $updated = User::where('id', $request->id)->update($data);

        return redirect("/account_pro");

    }

}
