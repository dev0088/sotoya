@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
<style>
 
    .type-select {
        border:2px solid #e1e1e1;
        cursor: pointer;
    }
    .type-select.active {
        border:2px solid #18A75A;
    }
    .type-select span.check-icon {
        display:none;
    }
    .type-select.active span.check-icon {
        display:block;
    }

    .select-item {
        cursor: pointer;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        position: fixed;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }
     .modal-content {
        background-color: #fefefe;
        margin: auto;
        /* padding: 10px; */
        border: 1px solid #888;
        width: 80%;
        max-width: 770px;

    }
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 20px;
        font-weight: bold;
    }
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .enregister-button {
        background-color: #b0b0af;
    }
    .enregister-button.active {
        background-color: #18A75A;
    }

    .maxwidth-820 {
        max-width:820px;
    }
    .maxwidth-210 {
        max-width:210px;
    }
    .maxwidth-335 {
        max-width:335px;
    }

    .color-item {
        width:148px; 
        height:148px;
    }
    .maxwidth-1441 {
        max-width:1441px;
    }

</style>

@endsection

@section('content')

<main id="main-content" class="bg-whitegreen pb-10 md:pb-20">

    <div class="px-8 md:px-35">
        <div class="flex-none md:flex items-center pt-35px pb-4">
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="/" class="text-base text-darkgray fontbold leading-snug">Accueil</a>
            <span>
                <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                    <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                </svg>
            </span>
            </div>
            <span class="text-base text-dark fontbold leading-snug">Configurateur particulier</span>
        </div>
    </div>
    
    <div class="flex-none lg:flex maxwidth-1441 mx-auto px-8 md:px-35">
        <div class="w-full xl:w-9/12 pr-0 lg:pr-5">
    
                <div class="grid grid-cols-1 lg:grid-cols-3 col-gap-4 mb-4 mx-auto maxwidth-820">
                    <a href="/" class="py-4 mb-4 lg:mb-0 shadow-md text-center bg-white text-lg fontbold">Continuer mes achats</a>
                    <form method="post" action="{{ route('part-order-add') }}">
                        @csrf
                        @if(isset($joinery))
                            <input type="hidden" name="joinery" value="{{$joinery['id']}}"/>
                        @endif
                        @if(isset($material))
                            <input type="hidden" name="material" value="{{$material['id']}}"/>
                        @endif
                        @if(isset($insulation_size))
                            <input type="hidden" name="insulation_size" value="{{$insulation_size['id']}}"/>
                        @endif
                        @if(isset($height_size))
                            <input type="hidden" name="height_size" value="{{$height_size['id']}}"/>
                        @endif
                        @if(isset($range))
                            <input type="hidden" name="range" value="{{$range['id']}}"/>
                        @endif
                        @if(isset($aeration))
                            <input type="hidden" name="aeration" value="{{$aeration['id']}}"/>
                        @endif
                        @if(isset($opening))
                            <input type="hidden" name="opening" value="{{$opening['id']}}"/>
                        @endif
                        @if(isset($glazing))
                            <input type="hidden" name="glazing" value="{{$glazing['id']}}"/>
                        @endif
                        @if(isset($leave))
                            <input type="hidden" name="leave" value="{{$leave['id']}}"/>
                        @endif
                        @if(isset($installation))
                            <input type="hidden" name="installation" value="{{$installation['id']}}"/>
                        @endif
                        @if(isset($color))
                            <input type="hidden" name="color" value="{{$color['id']}}"/>
                        @endif
                        @if(isset($width_size))
                            <input type="hidden" name="width_size" value="{{$width_size['id']}}"/>
                        @endif

                        <button type="submit" class="w-full py-4 mb-4 lg:mb-0 shadow-md text-center bg-white text-lg fontbold cursor-pointer">Enregistrer mon projet</button>

                    </form>
                    <form method="POST" action="{{ route('part-clicandpay') }}">
                        @csrf
                        @if(isset($joinery))
                            <input type="hidden" name="joinery_submit_pay" value="{{$joinery['id']}}"/>
                        @endif
                        @if(isset($material))
                            <input type="hidden" name="material_submit_pay" value="{{$material['id']}}"/>
                        @endif
                        @if(isset($insulation_size))
                            <input type="hidden" name="insulation_size_submit_pay" value="{{$insulation_size['id']}}"/>
                        @endif
                        @if(isset($height_size))
                            <input type="hidden" name="height_size_submit_pay" value="{{$height_size['id']}}"/>
                        @endif
                        @if(isset($range))
                            <input type="hidden" name="range_submit_pay" value="{{$range['id']}}"/>
                        @endif
                        @if(isset($aeration))
                            <input type="hidden" name="aeration_submit_pay" value="{{$aeration['id']}}"/>
                        @endif
                        @if(isset($opening))
                            <input type="hidden" name="opening_submit_pay" value="{{$opening['id']}}"/>
                        @endif
                        @if(isset($glazing))
                            <input type="hidden" name="glazing_submit_pay" value="{{$glazing['id']}}"/>
                        @endif
                        @if(isset($leave))
                            <input type="hidden" name="leave_submit_pay" value="{{$leave['id']}}"/>
                        @endif
                        @if(isset($installation))
                            <input type="hidden" name="installation_submit_pay" value="{{$installation['id']}}"/>
                        @endif
                        @if(isset($color))
                            <input type="hidden" name="color_submit_pay" value="{{$color['id']}}"/>
                        @endif
                        @if(isset($width_size))
                            <input type="hidden" name="width_size_submit_pay" value="{{$width_size['id']}}"/>
                        @endif

                        <button type="submit" class="w-full py-4 mb-4 lg:mb-0 shadow-lg text-center bg-darkgray text-white text-lg fontbold">Payer ma commande</button>

                    </form>
                </div>
        
                <div class="w-full bg-white mx-auto shadow-md relative items-center mt-4 pb-10 maxwidth-820">
                    <p class="text-2xl fontbold py-10 text-center">Récapitulatif de votre configuration</p>
        
                    <div class="flex justify-between items-center px-3 md:px-8 h-15 bg-whitepink">
                        @if(isset($price))
                            <p class="text-lg fontbold">Prix :</p>
                            <p class="text-4xl fontbold">{{$price}}</p>
                        @endif
                    </div>
        
                    <div class="grid grid-row-1 lg:grid-cols-2 col-gap-12 row-gap-0 pt-4 px-3 md:px-8">
                        <div>
                            @if(isset($joinery))
                                <p class="text-base" style="padding-top:21px; padding-bottom:18px;">Type de menuiserie :<span id="joinery_result_finish" class="fontbold pl-3">{{$joinery["name"]}}</span></p>
                                <hr class="w-full"/>
                            @endif
                        </div>
                        
                        <div>
                            @if(isset($height_size))
                                <p class="text-base" style="padding-top:21px; padding-bottom:18px;">Largeur totale :<span id="height_size_result_finish" class="fontbold pl-3">{{$height_size["value"]}}</span></p>
                                <hr class="w-full"/>
                            @endif
                        </div>
                        <div>
                            @if(isset($material))
                                <p class="text-base" style="padding-top:21px; padding-bottom:18px;">Matériau :<span id="material_result_finish" class="fontbold pl-3">{{$material["name"]}}</span></p>
                                <hr class="w-full"/>
                            @endif
                        </div>
                        <div>
                            @if(isset($insulation_size))
                                <p class="text-base" style="padding-top:21px; padding-bottom:18px;">Pour isolation de :<span id="insulation_size_result_finish" class="fontbold pl-3">{{$insulation_size["value"]}}</span></p>
                                <hr class="w-full"/>
                            @endif
                        </div>
                        <div>
                            @if(isset($range))
                                <p class="text-base" style="padding-top:21px; padding-bottom:18px;">Gamme :<span id="range_result_finish" class="fontbold pl-3">{{$range["name"]}}</span></p>
                                <hr class="w-full"/>
                            @endif
                        </div>
                        <div>
                            @if(isset($aeration))
                                <p class="text-base" style="padding-top:21px; padding-bottom:18px;">Aération :<span id="aeration_result_finish" class="fontbold pl-3">{{$aeration["name"]}}</span></p>
                                <hr class="w-full"/>
                            @endif
                        </div>
                        <div>
                            @if(isset($opening))
                                <p class="text-base" style="padding-top:21px; padding-bottom:18px;">Type d’ouverture :<span id="opening_result_finish" class="fontbold pl-3">{{$opening["name"]}}</span></p>
                                <hr class="w-full"/>
                            @endif
                        </div>
                        <div>
                            @if(isset($leave))
                                <p class="text-base" style="padding-top:21px; padding-bottom:18px;">Nombre de vantaux :<span id="leave_result_finish" class="fontbold pl-3">{{$leave["name"]}}</span></p>
                                <hr class="w-full"/>
                            @endif
                        </div>
                        <div>
                            @if(isset($glazing))
                                <p class="text-base" style="padding-top:21px; padding-bottom:18px;">Vitrage :<span id="glazing_result_finish" class="fontbold pl-3">{{$glazing["name"]}}</span></p>
                                <hr class="w-full"/>
                            @endif
                        </div>
                        <div>
                            @if(isset($installation))
                                <p class="text-base" style="padding-top:21px; padding-bottom:18px;">Type de pose :<span id="installation_result_finish" class="fontbold pl-3">{{$installation["name"]}}</span></p>
                                <hr class="w-full"/>
                            @endif
                        </div>
                        <div>
                            @if(isset($color))
                                <p class="text-base" style="padding-top:21px; padding-bottom:18px;">Couleur menuiserie :<span id="color_result_finish" class="fontbold pl-3">{{$color["name"]}}</span></p>
                                <hr class="w-full"/>
                            @endif
                        </div>
                        <div>
                            @if(isset($width_size))
                                <p class="text-base py-4" style="padding-top:21px; padding-bottom:18px;">Hauteur totale :<span id="width_size_result_finish" class="fontbold pl-3">{{$width_size["value"]}}</span></p>
                                <hr class="w-full"/>
                            @endif
                        </div>
                    </div>
        
                </div>
            </form>
            
        </div>
    
    </div>
    
    <p id="joinery_selected" class="hidden">@if(isset($selected_joinery)) {{$selected_joinery}} @endif</p>
    
    <div id="enregister-modal" class="modal mx-auto z-50">
    
        <div class="modal-content relative p-8 md:p-15">
    
            <span class="absolute top-4 md:top-8 right-4 md:right-8 text-4xl close">
                <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.998" viewBox="0 0 20.001 19.998">
                    <path id="xmark" d="M9.743,27.5a1.131,1.131,0,0,0,0,1.589,1.158,1.158,0,0,0,1.6,0l8.072-8.072,8.072,8.072a1.128,1.128,0,0,0,1.6-1.589L21.007,19.42l8.085-8.072a1.128,1.128,0,0,0-1.6-1.589l-8.072,8.072L11.345,9.759a1.123,1.123,0,0,0-1.6,0,1.142,1.142,0,0,0,0,1.589l8.072,8.072Z" transform="translate(-9.417 -9.423)" fill="#020000"/>
                </svg>              
            </span>
    
            <p class="text-4xl pb-2 text-black fontbold text-center">Enregistrer mon projet</p>
    
            <div>
                <p class="text-lg fontbold pt-8 pb-3">Sélectionner le projet</p>
    
                <div class="flex relative">
                    <select id="select-project" class="block appearance-none w-full bg-white border border-gray-300 rounded-md p-4">
                        <option class="select-item" disabled selected>projet</option>
                        <option class="select-item">600</option>
                        <option class="select-item">700</option>
                        <option class="select-item">800</option>
                        <option class="select-item">900</option>
                        <option class="select-item">1000</option>
                        <option class="select-item">1100</option>
                        <option class="select-item">1200</option>
                        <option class="select-item">1300</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
        
                <p class="text-lg fontbold pt-8 pb-3">Ou créer un nouveau projet</p>
        
                <input id="new-project" type="text" class="w-full appearance-none p-4 bg-input text-base" placeholder="Nom du projet"/>    
                
            </div>
            <div class="w-full text-center md:text-left">
                <a href="{{ route('pro-projects') }}">
                    <button class="px-16 py-4 mt-8 font-bold text-white enregister-button">Enregister</button>
                </a>
            </div>
    
        </div>
    
    </div>

</main>

@endsection

@section('scripts')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>

    function totalPriceCalculate() {

        var total = 0;

        for(var i = 0 ; i < price.length ; i ++) {
            total += Number(price[i]);
        }
        for(var i = 0 ; i < dimension_price.length ; i ++) {
            total += Number(dimension_price[i]);
        }

        $("#price").html(total + "€");
        $("#price_finish").html(total + "€");

    }

    /////Modal Trigger///////
    var modal = document.getElementById("enregister-modal");
    var btn = document.getElementById("modal-trigger-button");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    $(function() {
        validateForm();

    });

    var selectProject = false;

    $("#select-project").change(function() {
        console.log("yes");

        selectProject = true;
        $("#new-project").val(null);

        validateForm();
    });

    $("#new-project").keyup(function() {
        validateForm();
    });

    $("#new-project").focus(function() {
        $("#select-project").prop("selectedIndex", 0);
    });

    function validateForm() {

        var newProject = $("#new-project").val();

        var button = $("button.enregister-button");
        
        if(selectProject || newProject.length != 0) {
            console.log("Yes");
            if(!button.hasClass("active")) {
                button.addClass("active");
            }

        } else {
            console.log("No");
            if(button.hasClass("active")) {
                button.removeClass("active");
            }
        }
    }

</script>
@endsection


@section('footer')
@include('layouts.footer')
@endsection
