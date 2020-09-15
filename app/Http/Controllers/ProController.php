<?php

namespace App\Http\Controllers;

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

        $joinery = 
        [
            ["name"=>"Fenêtre", "price"=>50, "image"=>"Mask Group 1@2x.png", "default"=>false],
            ["name"=>"Baie coulissante", "image"=>"Mask Group 2@2x.png", "price"=>60, "default"=>false], 
            ["name"=>"Porte fenêtre", "image"=>"Mask Group 3@2x.png", "price"=>70, "default"=>false],
            ["name"=>"Porte entrée", "image"=>"Mask Group 4@2x.png", "price"=>80, "default"=>false], 
            ["name"=>"Porte de service", "image"=>"Mask Group 5@2x.png", "price"=>90, "default"=>true], 
            ["name"=>"Volet roulant", "image"=>"Mask Group 6@2x.png", "price"=>100, "default"=>false], 
            ["name"=>"Garde corps", "image"=>"Mask Group 7@2x.png", "price"=>110, "default"=>false],
            ["name"=>"Véranda", "image"=>"Mask Group 8@2x.png", "price"=>120, "default"=>false], 
            ["name"=>"Pergola", "image"=>"Mask Group 9@2x.png", "price"=>130, "default"=>false], 
            ["name"=>"Accessoires", "image"=>"Mask Group 10@2x.png", "price"=>140, "default"=>false]
        ];
        $material = 
        [
            ["name"=>"Aluminium", "price"=>10, "default"=>false], 
            ["name"=>"PVC", "price"=>20, "default"=>true]
        ];
        $range = 
        [
            ["name"=>"Gamme 70", "price"=>100, "default"=>true], 
            ["name"=>"Gamme 50", "price"=>200, "default"=>false]
        ];
        $opening = 
        [
            ["name"=>"Fixe", "price"=>10, "default"=>false], 
            ["name"=>"Abattant", "price"=>20, "default"=>false], 
            ["name"=>"Ouvrant française", "price"=>30, "default"=>true], 
            ["name"=>"Ouvrant anglaise", "price"=>40, "default"=>false], 
            ["name"=>"Oscillo-battant", "price"=>50, "default"=>false]
        ];
        $leave = 
        [
            ["name"=>"1 vantail", "price"=>100, "default"=>true]
        ];
        $installation = 
        [
            ["name"=>"Applique", "price"=>100, "default"=>false], 
            ["name"=>"Tunnel", "price"=>200, "default"=>true], 
            ["name"=>"Rénovation", "price"=>300, "default"=>false]
        ];

        $height = 
        [
            ["name"=>"600", "price"=>100, "default"=>false], 
            ["name"=>"700", "price"=>200, "default"=>false], 
            ["name"=>"800", "price"=>300, "default"=>true], 
            ["name"=>"900", "price"=>400, "default"=>false], 
            ["name"=>"1000", "price"=>500, "default"=>false]
        ];
        $width = 
        [
            ["name"=>"1600", "price"=>100, "default"=>false], 
            ["name"=>"1700", "price"=>200, "default"=>false], 
            ["name"=>"1800", "price"=>300, "default"=>false], 
            ["name"=>"1900", "price"=>400, "default"=>true], 
            ["name"=>"2000", "price"=>500, "default"=>false]
        ];

        $insulation = 
        [
            ["name"=>"120", "price"=>100, "default"=>false], 
            ["name"=>"130", "price"=>200, "default"=>true], 
            ["name"=>"140", "price"=>300, "default"=>false], 
            ["name"=>"150", "price"=>400, "default"=>false]
        ];
        $aeration = 
        [
            ["name"=>"Aucune", "price"=>100, "default"=>false], 
            ["name"=>"15 M3/H", "price"=>200, "default"=>true], 
            ["name"=>"30 M3/H", "price"=>300, "default"=>false]
        ];
        $glazing = 
        [
            ["name"=>"4/16/4 FE", "price"=>100, "default"=>false], 
            ["name"=>"4/20/4 FE", "price"=>200, "default"=>false], 
            ["name"=>"4/16/4 FE one", "price"=>300, "default"=>false], 
            ["name"=>"4 FE/-/4 G200", "price"=>400, "default"=>false], 
            ["name"=>"4 FE/-/4 dépoli", "price"=>500, "default"=>true], 
            ["name"=>"4 planistar/-/4", "price"=>600, "default"=>false], 
            ["name"=>"4 stopsol/-/4", "price"=>700, "default"=>false], 
            ["name"=>"5/-/5 FE", "price"=>800, "default"=>false], 
            ["name"=>"6/-/6", "price"=>900, "default"=>false], 
            ["name"=>"6/-/4 planistar", "price"=>1000, "default"=>false], 
            ["name"=>"10/-/4 FE", "price"=>1100, "default"=>false], 
            ["name"=>"44.2/-/4 FE", "price"=>1200, "default"=>false]
        ];

        $color = 
        [
            ["color"=>"#edede6", "name"=>"RAL 9016", "price"=>100, "default"=>false], 
            ["color"=>"#383e42", "name"=>"RAL 7016", "price"=>200, "default"=>false], 
            ["color"=>"#f1ece1", "name"=>"RAL 9010", "price"=>300, "default"=>true], 
            ["color"=>"#a1a1a0", "name"=>"RAL 9006", "price"=>400, "default"=>false], 
            ["color"=>"#0e0e10", "name"=>"RAL 9005", "price"=>500, "default"=>false], 
            ["color"=>"#114232", "name"=>"RAL 6005", "price"=>600, "default"=>false], 
            ["color"=>"#442f29", "name"=>"RAL 8017", "price"=>700, "default"=>false], 
            ["color"=>"#878581", "name"=>"RAL 9007", "price"=>800, "default"=>false], 
            ["color"=>"#e3d9c6", "name"=>"RAL 1013", "price"=>900, "default"=>false], 
            ["color"=>"#004f7c", "name"=>"RAL 5010", "price"=>1000, "default"=>false], 
            ["color"=>"#e6d2b5", "name"=>"RAL 1015", "price"=>1100, "default"=>false], 
            ["color"=>"#6b1c23", "name"=>"RAL 3004", "price"=>1200, "default"=>false]
        ];

        $projects = 
        [
            ["name"=>"project1"], 
            ["name"=>"project2"], 
            ["name"=>"project3"], 
            ["name"=>"project4"], 
            ["name"=>"project5"]
        ];

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

        // $user = 
        // [
        //     "gender"=>"1", 
        //     "firstname"=>"Jean", 
        //     "lastname"=>"Marc", 
        //     "email"=>"jeanmarc@gmail.com", 
        //     "password"=>"123456", 
        //     "mode"=>1, 
        //     "companyname"=>"Sotoweb", 
        //     "address"=>"14 Avenue Saint-Médard", 
        //     "postcode"=>"33000", 
        //     "city"=>"Bordeaux", 
        //     "telephone"=>"06 90 84 23 12"
        // ];

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
                'password' => 'required|string',
                'mode' => 'required|string',
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
            'password' => $request->password,
            'mode' => $request->mode,
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
