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
use App\Model\Order;
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

        return view('particular.index', compact('joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color'));
    }
    
    public function joinery($joinery) {

        $selected_joinery = $joinery;

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

        return view('particular.index', compact('selected_joinery', 'joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color'));

    }
    
    public function summary(Request $request) {

        $options = ["joinery", "material", "range", "opening", "leave", "installation" ,"aeration", "glazing", "color"];
        $dimension_options = ["height_size", "width_size", "insulation_size"];

        // $price = $request->post("price_submit");

        $joinery_id = $request->post("joinery_submit");
        $material_id = $request->post("material_submit");
        $range_id = $request->post("range_submit");
        $opening_id = $request->post("opening_submit");
        $leave_id = $request->post("leave_submit");
        $installation_id = $request->post("installation_submit");
        $aeration_id = $request->post("aeration_submit");
        $glazing_id = $request->post("glazing_submit");
        $color_id = $request->post("color_submit");
        $height_size_id = $request->post("height_size_submit");
        $width_size_id = $request->post("width_size_submit");
        $insulation_size_id = $request->post("insulation_size_submit");

        $joinery = Join::find($joinery_id);
        $material = Material::find($material_id);
        $range = Range::find($range_id);
        $opening = Opening::find($opening_id);
        $leave = Leave::find($leave_id);
        $installation = Installation::find($installation_id);
        $aeration = Aeration::find($aeration_id);
        $glazing = Glazing::find($glazing_id);
        $color = Color::find($color_id);
        $height_size = TotalHeight::find($height_size_id);
        $width_size = TotalWidth::find($width_size_id);
        $insulation_size = Insulation::find($insulation_size_id);

        $price = 
            $joinery["price"] + 
            $material["price"] + 
            $range["price"] + 
            $opening["price"] + 
            $leave["price"] + 
            $installation["price"] +
            $aeration["price"] +
            $glazing["price"] + 
            $color["price"] + 
            $height_size["price"] + 
            $width_size["price"] + 
            $insulation_size["price"];

        $price = $price."€";

        return view('particular.summary', compact('price', 'joinery', 'material', 'range', 'opening', 'leave', 'installation', 'aeration', 'glazing', 'color', 'height_size', 'width_size', 'insulation_size'));

    }

    public function account() 
    {

        return view('particular.account.index');

    }
    
    public function projects() 
    {

        // $projects = 
        // [
        //     ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
        //     ["date"=>"16 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>90, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
        //     ["date"=>"12 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>240, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"]
        // ];

        $projects = Order::where('state_order', "0")->get();

        return view('particular.account.projects', compact('projects'));
        
    }

    public function history()
    {

        // $history = 
        // [
        //     ["date"=>"19 juin 2020", "state"=>0, "statelabel"=>"En cours de livraison", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
        //     ["date"=>"14 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"],
        //     ["date"=>"9 juin 2020", "state"=>1, "statelabel"=>"Livré", "price"=>110, "joinery"=>"Fenêtre", "material"=>"Aluminium", "range"=>"Gamme 70", "opening"=>"Abattant", "leave"=>"1 vantail"]
        // ];

        $history = Order::where('state_order', "1")->get();

        return view('particular.account.history', compact('history'));

    }

    public function info()
    {

        $user = User::find(Auth::id());

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

        return redirect("/account_part");

    }

    public function recordorder(Request $request) 
    {

        //Record Order Here

        $joinery_id = $request->post("joinery");
        $material_id = $request->post("material");
        $range_id = $request->post("range");
        $opening_id = $request->post("opening");
        $leave_id = $request->post("leave");
        $installation_id = $request->post("installation");
        $aeration_id = $request->post("aeration");
        $glazing_id = $request->post("glazing");
        $color_id = $request->post("color");
        $height_size_id = $request->post("height_size");
        $width_size_id = $request->post("width_size");
        $insulation_size_id = $request->post("insulation_size");

        $joinery = Join::find($joinery_id);
        $material = Material::find($material_id);
        $range = Range::find($range_id);
        $opening = Opening::find($opening_id);
        $leave = Leave::find($leave_id);
        $installation = Installation::find($installation_id);
        $aeration = Aeration::find($aeration_id);
        $glazing = Glazing::find($glazing_id);
        $color = Color::find($color_id);
        $height_size = TotalHeight::find($height_size_id);
        $width_size = TotalWidth::find($width_size_id);
        $insulation_size = Insulation::find($insulation_size_id);

        $order = new Order();

        $order->user_id = Auth::id();
        $order->join_id = $joinery_id;
        $order->totalheight_id = $height_size_id;
        $order->material_id = $material_id;
        $order->insulation_id = $insulation_size_id;
        $order->range_id = $range_id;
        $order->aeration_id = $aeration_id;
        $order->opening_id = $opening_id;
        $order->leave_id = $leave_id;
        $order->glazing_id = $glazing_id;
        $order->installation_id = $installation_id;
        $order->color_id = $color_id;
        $order->totalwidth_id = $width_size_id;
        $order->mode = Auth::user()->mode;

        $price = 
            $joinery["price"] + 
            $material["price"] + 
            $range["price"] + 
            $opening["price"] + 
            $leave["price"] + 
            $installation["price"] +
            $aeration["price"] +
            $glazing["price"] + 
            $color["price"] + 
            $height_size["price"] + 
            $width_size["price"] + 
            $insulation_size["price"];

        $price = $price."€";


        $order->price = $price;

        $order->save();

        return redirect("/account_part_projects");
    }

    public function order($id)
    {

        $data = ([
            'state_order' => "1"
        ]);

        $update = Order::where('id', $id)->update($data);

        return redirect("/account_part_projects");

    }

    public function modifyorder($id)
    {

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

        $order = Order::find($id);

        return view('modify.order', compact('joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color', 'order'));
    }

    public function updateorder(Request $request)
    {

        $joinery_id = $request->post("joinery_submit");
        $material_id = $request->post("material_submit");
        $range_id = $request->post("range_submit");
        $opening_id = $request->post("opening_submit");
        $leave_id = $request->post("leave_submit");
        $installation_id = $request->post("installation_submit");
        $aeration_id = $request->post("aeration_submit");
        $glazing_id = $request->post("glazing_submit");
        $color_id = $request->post("color_submit");
        $height_size_id = $request->post("height_size_submit");
        $width_size_id = $request->post("width_size_submit");
        $insulation_size_id = $request->post("insulation_size_submit");

        $joinery = Join::find($joinery_id);
        $material = Material::find($material_id);
        $range = Range::find($range_id);
        $opening = Opening::find($opening_id);
        $leave = Leave::find($leave_id);
        $installation = Installation::find($installation_id);
        $aeration = Aeration::find($aeration_id);
        $glazing = Glazing::find($glazing_id);
        $color = Color::find($color_id);
        $height_size = TotalHeight::find($height_size_id);
        $width_size = TotalWidth::find($width_size_id);
        $insulation_size = Insulation::find($insulation_size_id);

        $price = 
            $joinery["price"] + 
            $material["price"] + 
            $range["price"] + 
            $opening["price"] + 
            $leave["price"] + 
            $installation["price"] +
            $aeration["price"] +
            $glazing["price"] + 
            $color["price"] + 
            $height_size["price"] + 
            $width_size["price"] + 
            $insulation_size["price"];

        $price = $price."€";

        $data = ([
            'join_id' => $joinery_id,
            'material_id' => $material_id,
            'range_id' => $range_id,
            'opening_id' => $opening_id,
            'leave_id' => $leave_id,
            'installation_id' => $installation_id,
            'totalheight_id' => $height_size_id,
            'totalwidth_id' => $width_size_id,
            'insulation_id' => $insulation_size_id,
            'aeration_id' => $aeration_id,
            'glazing_id' => $glazing_id,
            'color_id' => $color_id,
            'price'=>$price
        ]);

        $update = Order::where('id', $request->order_id)->update($data);

        return redirect("/account_part_projects");

    }


}
