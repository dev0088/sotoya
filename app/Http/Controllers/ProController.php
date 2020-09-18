<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ProjectMiddleware;
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
use App\Model\Project;
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

    public function index($id = null)
    {

        $projects = Project::where('user_id', Auth::id())->get();

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

        if($id) {

            return view('professional.index', compact('id', 'joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color', 'projects'));

        } else {

            return view('professional.index', compact('joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color', 'projects'));

        }

    }

    public function account() 
    {

        return view('professional.account.index');
    
    }

    public function projects($id = null)
    {

        $projects = Project::where('user_id', Auth::id())->get();

        if($id == null) {

            if(count($projects) > 0) {

                $id = Project::where('user_id', Auth::id())->first()->id;

                $orders = Project::where('user_id', Auth::id())->first()->orders()->get();

                return view('professional.account.projects', compact('projects', 'id', 'orders'));

            } else {

                return view('professional.account.projects');

            }

        } else {

            $orders = Project::where('id', $id)->first()->orders()->where('state_order', "0")->get();

            return view('professional.account.projects', compact('projects', 'id', 'orders'));

        }

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
            'company' => ($request->company) ? $request->company : "sans nom",
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

    public function recordorder(Request $request)
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

        $select_project_id = $request->post("select_project_submit");
        $new_project_name = $request->post("new_project_submit");

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

        if($select_project_id) {

            $order->project_id = $select_project_id;

        } else {

            $project = new Project();

            $project->user_id = Auth::id();
            $project->name = $new_project_name;

            $project->save();

            $order->project_id = $project->id;
            
        }

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

        return redirect()->route("account_pro_projects_id", Order::find($order->id)->project_id);

    }

    public function deleteproject($id)
    {
        $delete = Project::find($id)->delete();

        if($delete) {
            return redirect("/account_pro_projects");
        }

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

        return redirect()->route("account_pro_projects_id", Order::find($request->order_id)->project_id);

    }

    public function deleteorder($id)
    {
        $project_id = Order::find($id)->project_id;

        $delete = Order::find($id)->delete();

        if($delete) {
            return redirect()->route("account_pro_projects_id", $project_id);
        }

    }

    public function createproject(Request $request)
    {

        $new_project_name = $request->post("new_project_name");

        $project = new Project();

        $project->user_id = Auth::id();
        $project->name = $new_project_name;

        $project->save();

        return redirect()->route("account_pro_projects_id", $project->id);

    }

    public function ordereverything($id)
    {

        $orders = Order::where('project_id', $id)->get();

        foreach($orders as $key => $order) {

            $data = ([
                'state_order' => "1"
            ]);
    
            $update = $order->update($data);

        }

        return redirect()->route("account_pro_projects_id", $id);

    }

}
