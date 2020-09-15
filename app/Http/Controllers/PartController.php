<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('part');
    }
    
    public function index()
    {

        $joinery = 
        [
            ["name"=>"Fenêtre", "image"=>"Mask Group 1@2x.png", "price"=>50],
            ["name"=>"Baie coulissante", "image"=>"Mask Group 2@2x.png", "price"=>60], 
            ["name"=>"Porte fenêtre", "image"=>"Mask Group 3@2x.png", "price"=>70],
            ["name"=>"Porte entrée", "image"=>"Mask Group 4@2x.png", "price"=>80], 
            ["name"=>"Porte de service", "image"=>"Mask Group 5@2x.png", "price"=>90], 
            ["name"=>"Volet roulant", "image"=>"Mask Group 6@2x.png", "price"=>100], 
            ["name"=>"Garde corps", "image"=>"Mask Group 7@2x.png", "price"=>110],
            ["name"=>"Véranda", "image"=>"Mask Group 8@2x.png", "price"=>120], 
            ["name"=>"Pergola", "image"=>"Mask Group 9@2x.png", "price"=>130], 
            ["name"=>"Accessoires", "image"=>"Mask Group 10@2x.png", "price"=>140]
        ];
        $material = 
        [
            ["name"=>"Aluminium", "price"=>10], 
            ["name"=>"PVC", "price"=>20]
        ];
        $range = 
        [
            ["name"=>"Gamme 70", "price"=>100], 
            ["name"=>"Gamme 50", "price"=>200]
        ];
        $opening = 
        [
            ["name"=>"Fixe", "price"=>10], 
            ["name"=>"Abattant", "price"=>20], 
            ["name"=>"Ouvrant française", "price"=>30], 
            ["name"=>"Ouvrant anglaise", "price"=>40], 
            ["name"=>"Oscillo-battant", "price"=>50]
        ];
        $leave = 
        [
            ["name"=>"1 vantail", "price"=>100]
        ];
        $installation = 
        [
            ["name"=>"Applique", "price"=>100], 
            ["name"=>"Tunnel", "price"=>200], 
            ["name"=>"Rénovation", "price"=>300]
        ];

        $height = 
        [
            ["name"=>"600", "price"=>100], 
            ["name"=>"700", "price"=>200], 
            ["name"=>"800", "price"=>300], 
            ["name"=>"900", "price"=>400], 
            ["name"=>"1000", "price"=>500]
        ];
        $width = 
        [
            ["name"=>"1600", "price"=>100], 
            ["name"=>"1700", "price"=>200], 
            ["name"=>"1800", "price"=>300], 
            ["name"=>"1900", "price"=>400], 
            ["name"=>"2000", "price"=>500]
        ];

        $insulation = 
        [
            ["name"=>"120", "price"=>100], 
            ["name"=>"130", "price"=>200], 
            ["name"=>"140", "price"=>300], 
            ["name"=>"150", "price"=>400]
        ];
        $aeration = 
        [
            ["name"=>"Aucune", "price"=>100], 
            ["name"=>"15 M3/H", "price"=>200], 
            ["name"=>"30 M3/H", "price"=>300]
        ];
        $glazing = 
        [
            ["name"=>"4/16/4 FE", "price"=>100], 
            ["name"=>"4/20/4 FE", "price"=>200], 
            ["name"=>"4/16/4 FE one", "price"=>300], 
            ["name"=>"4 FE/-/4 G200", "price"=>400], 
            ["name"=>"4 FE/-/4 dépoli", "price"=>500], 
            ["name"=>"4 planistar/-/4", "price"=>600], 
            ["name"=>"4 stopsol/-/4", "price"=>700], 
            ["name"=>"5/-/5 FE", "price"=>800], 
            ["name"=>"6/-/6", "price"=>900], 
            ["name"=>"6/-/4 planistar", "price"=>1000], 
            ["name"=>"10/-/4 FE", "price"=>1100], 
            ["name"=>"44.2/-/4 FE", "price"=>1200]
        ];

        $color = 
        [
            ["color"=>"#edede6", "name"=>"RAL 9016", "price"=>100], 
            ["color"=>"#383e42", "name"=>"RAL 7016", "price"=>200], 
            ["color"=>"#f1ece1", "name"=>"RAL 9010", "price"=>300], 
            ["color"=>"#a1a1a0", "name"=>"RAL 9006", "price"=>400], 
            ["color"=>"#0e0e10", "name"=>"RAL 9005", "price"=>500], 
            ["color"=>"#114232", "name"=>"RAL 6005", "price"=>600], 
            ["color"=>"#442f29", "name"=>"RAL 8017", "price"=>700], 
            ["color"=>"#878581", "name"=>"RAL 9007", "price"=>800], 
            ["color"=>"#e3d9c6", "name"=>"RAL 1013", "price"=>900], 
            ["color"=>"#004f7c", "name"=>"RAL 5010", "price"=>1000], 
            ["color"=>"#e6d2b5", "name"=>"RAL 1015", "price"=>1100], 
            ["color"=>"#6b1c23", "name"=>"RAL 3004", "price"=>1200]
        ];

        return view('particular.index', compact('joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color'));
    }
    
    public function joinery($joinery) {

        $selected_joinery = $joinery;

        $joinery = 
        [
            ["name"=>"Fenêtre", "image"=>"Mask Group 1@2x.png", "price"=>50],
            ["name"=>"Baie coulissante", "image"=>"Mask Group 2@2x.png", "price"=>60], 
            ["name"=>"Porte fenêtre", "image"=>"Mask Group 3@2x.png", "price"=>70],
            ["name"=>"Porte entrée", "image"=>"Mask Group 4@2x.png", "price"=>80], 
            ["name"=>"Porte de service", "image"=>"Mask Group 5@2x.png", "price"=>90], 
            ["name"=>"Volet roulant", "image"=>"Mask Group 6@2x.png", "price"=>100], 
            ["name"=>"Garde corps", "image"=>"Mask Group 7@2x.png", "price"=>110],
            ["name"=>"Véranda", "image"=>"Mask Group 8@2x.png", "price"=>120], 
            ["name"=>"Pergola", "image"=>"Mask Group 9@2x.png", "price"=>130], 
            ["name"=>"Accessoires", "image"=>"Mask Group 10@2x.png", "price"=>140]
        ];
        $material = 
        [
            ["name"=>"Aluminium", "price"=>10], 
            ["name"=>"PVC", "price"=>20]
        ];
        $range = 
        [
            ["name"=>"Gamme 70", "price"=>100], 
            ["name"=>"Gamme 50", "price"=>200]
        ];
        $opening = 
        [
            ["name"=>"Fixe", "price"=>10], 
            ["name"=>"Abattant", "price"=>20], 
            ["name"=>"Ouvrant française", "price"=>30], 
            ["name"=>"Ouvrant anglaise", "price"=>40], 
            ["name"=>"Oscillo-battant", "price"=>50]
        ];
        $leave = 
        [
            ["name"=>"1 vantail", "price"=>100]
        ];
        $installation = 
        [
            ["name"=>"Applique", "price"=>100], 
            ["name"=>"Tunnel", "price"=>200], 
            ["name"=>"Rénovation", "price"=>300]
        ];

        $height = 
        [
            ["name"=>"600", "price"=>100], 
            ["name"=>"700", "price"=>200], 
            ["name"=>"800", "price"=>300], 
            ["name"=>"900", "price"=>400], 
            ["name"=>"1000", "price"=>500]
        ];
        $width = 
        [
            ["name"=>"1600", "price"=>100], 
            ["name"=>"1700", "price"=>200], 
            ["name"=>"1800", "price"=>300], 
            ["name"=>"1900", "price"=>400], 
            ["name"=>"2000", "price"=>500]
        ];

        $insulation = 
        [
            ["name"=>"120", "price"=>100], 
            ["name"=>"130", "price"=>200], 
            ["name"=>"140", "price"=>300], 
            ["name"=>"150", "price"=>400]
        ];
        $aeration = 
        [
            ["name"=>"Aucune", "price"=>100], 
            ["name"=>"15 M3/H", "price"=>200], 
            ["name"=>"30 M3/H", "price"=>300]
        ];
        $glazing = 
        [
            ["name"=>"4/16/4 FE", "price"=>100], 
            ["name"=>"4/20/4 FE", "price"=>200], 
            ["name"=>"4/16/4 FE one", "price"=>300], 
            ["name"=>"4 FE/-/4 G200", "price"=>400], 
            ["name"=>"4 FE/-/4 dépoli", "price"=>500], 
            ["name"=>"4 planistar/-/4", "price"=>600], 
            ["name"=>"4 stopsol/-/4", "price"=>700], 
            ["name"=>"5/-/5 FE", "price"=>800], 
            ["name"=>"6/-/6", "price"=>900], 
            ["name"=>"6/-/4 planistar", "price"=>1000], 
            ["name"=>"10/-/4 FE", "price"=>1100], 
            ["name"=>"44.2/-/4 FE", "price"=>1200]
        ];

        $color = 
        [
            ["color"=>"#edede6", "name"=>"RAL 9016", "price"=>100], 
            ["color"=>"#383e42", "name"=>"RAL 7016", "price"=>200], 
            ["color"=>"#f1ece1", "name"=>"RAL 9010", "price"=>300], 
            ["color"=>"#a1a1a0", "name"=>"RAL 9006", "price"=>400], 
            ["color"=>"#0e0e10", "name"=>"RAL 9005", "price"=>500], 
            ["color"=>"#114232", "name"=>"RAL 6005", "price"=>600], 
            ["color"=>"#442f29", "name"=>"RAL 8017", "price"=>700], 
            ["color"=>"#878581", "name"=>"RAL 9007", "price"=>800], 
            ["color"=>"#e3d9c6", "name"=>"RAL 1013", "price"=>900], 
            ["color"=>"#004f7c", "name"=>"RAL 5010", "price"=>1000], 
            ["color"=>"#e6d2b5", "name"=>"RAL 1015", "price"=>1100], 
            ["color"=>"#6b1c23", "name"=>"RAL 3004", "price"=>1200]
        ];

        return view('particular.index', compact('selected_joinery', 'joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color'));

    }
    
    public function summary(Request $request) {

        $options = ["joinery", "material", "range", "opening", "leave", "installation" ,"aeration", "glazing", "color"];
        $dimension_options = ["height_size", "width_size", "insulation_size"];

        $price = $request->post("price_submit");

        $joinery = $request->post("joinery_submit");
        $material = $request->post("material_submit");
        $range = $request->post("range_submit");
        $opening = $request->post("opening_submit");
        $leave = $request->post("leave_submit");
        $installation = $request->post("installation_submit");
        $aeration = $request->post("aeration_submit");
        $glazing = $request->post("glazing_submit");
        $color = $request->post("color_submit");
        $height_size = $request->post("height_size_submit");
        $width_size = $request->post("width_size_submit");
        $insulation_size = $request->post("insulation_size_submit");

        return view('particular.summary', compact('joinery', 'material', 'range', 'opening', 'leave', 'installation', 'aeration', 'glazing', 'color', 'height_size', 'width_size', 'insulation_size'));

    }

    public function account() 
    {

        return view('particular.account.index');

    }
    
    public function projects() 
    {

        $products = 
        [
            ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
            ["date"=>"16 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>90, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
            ["date"=>"12 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>240, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"]
        ];

        return view('particular.account.projects', compact('products'));
        
    }

    public function history()
    {

        $history = 
        [
            ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
            ["date"=>"14 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
            ["date"=>"9 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"]
        ];

        return view('particular.account.history', compact('history'));

    }

    public function info()
    {

        $user = User::find(Auth::id());

        // $user = 
        // [
        //     "gender"=>"0", 
        //     "firstname"=>"Jean", 
        //     "lastname"=>"Marc", 
        //     "email"=>"jeanmarc@gmail.com", 
        //     "password"=>"123456", 
        //     "field"=>0, 
        //     "companyname"=>"", 
        //     "address"=>"14 Avenue Saint-Médard", 
        //     "postcode"=>"33000", 
        //     "city"=>"Bordeaux", 
        //     "telephone"=>"06 90 84 23 12"
        // ];

        return view('particular.account.info', compact('user'));
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

        return redirect("/account_part");

    }


}
