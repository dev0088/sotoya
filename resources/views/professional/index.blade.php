@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
<style>

    select {
        font-size:15px;
    }
    .select-item {
        background-color: white;
        border-radius: 10px;
        padding: 16px;
        font-size: 15px;
    
    }
    select:focus {
        border:2px solid #18A75A;
    }

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
        max-width: 820px;
    }
    .maxwidth-210 {
        max-width:210px;
    }
    .maxwidth-225 {
        max-width:335px;
    }
    .maxwidth-418 {
        max-width:418px;
    }

    .color-item {
        width:148px;
        height:148px;
    }

    .check-item {
        width:210px;
        height:210px;
    }
    .maxwidth-1441 {
        max-width:1441px;
    }

</style>

@endsection

@section('content')

<main id="main-content" class="bg-whitegreen pb-10 md:pb-20">

    <div class="px-8 md:px-35">
        <div class="flex-none md:flex items-center pt-35px pb-6">
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="/" class="text-base text-darkgray fontbold">Accueil</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <span class="text-base text-dark fontbold">Configurateur professionnel</span>
        </div>
    </div>

        <div class="flex-none lg:flex px-8 md:px-20 maxwidth-1441 mx-auto">
    
            <div class="w-full lg:w-8/12 pr-0 lg:pr-5">
        
                <div class="grid grid-cols-1 md:grid-cols-3 col-gap-4 mb-4 mx-auto maxwidth-820 items-center">
                    <a href="/">
                        <button type="button" class="w-full py-4 mb-4 md:mb-0 shadow-md text-center bg-white text-lg fontbold">Continuer mes achats</button>
                    </a>
                    <form method="post" action="@if(isset($id)){{ route('add_product_pro') }}@else{{ route('record_order_pro') }}@endif">
                        @csrf
                
                        @if(isset($id))
                            <input type="hidden" name="select_project_submit" value="{{$id}}"/>
                        @endif

                        <input id="price_submit" type="hidden" name="price_submit"/>
                        <input id="joinery_submit" type="hidden" name="joinery_submit"/>
                        <input id="material_submit" type="hidden" name="material_submit"/>
                        <input id="range_submit" type="hidden" name="range_submit"/>
                        <input id="opening_submit" type="hidden" name="opening_submit"/>
                        <input id="leave_submit" type="hidden" name="leave_submit"/>
                        <input id="installation_submit" type="hidden" name="installation_submit"/>
                        <input id="height_size_submit" type="hidden" name="height_size_submit"/>
                        <input id="width_size_submit" type="hidden" name="width_size_submit"/>
                        <input id="insulation_size_submit" type="hidden" name="insulation_size_submit"/>
                        <input id="aeration_submit" type="hidden" name="aeration_submit"/>
                        <input id="glazing_submit" type="hidden" name="glazing_submit"/>
                        <input id="color_submit" type="hidden" name="color_submit"/>

                        <div id="enregister-modal" class="modal mx-auto z-50">
    
                            <div class="modal-content relative p-8 md:p-15">
                        
                                <span class="absolute top-4 md:top-8 right-4 md:right-8 text-4xl close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.998" viewBox="0 0 20.001 19.998">
                                        <path id="xmark" d="M9.743,27.5a1.131,1.131,0,0,0,0,1.589,1.158,1.158,0,0,0,1.6,0l8.072-8.072,8.072,8.072a1.128,1.128,0,0,0,1.6-1.589L21.007,19.42l8.085-8.072a1.128,1.128,0,0,0-1.6-1.589l-8.072,8.072L11.345,9.759a1.123,1.123,0,0,0-1.6,0,1.142,1.142,0,0,0,0,1.589l8.072,8.072Z" transform="translate(-9.417 -9.423)" fill="#020000"/>
                                    </svg>              
                                </span>
                        
                                <p class="text-4xl text-black fontbold text-center" style="padding-top:10px;">Enregistrer mon projet</p>
                        
                                <div>
                                    <p class="text-lg fontbold pt-12 pb-3">Sélectionner le projet</p>
                                    <div class="h-input">
                                        <button type="button" class="select-button focus:border-green p-4 text-base border border-heavygray rounded-md w-full relative text-left h-input">
                                            <span id="select-project">
                                                {{-- projet --}}
                                            </span>
                                            
                                            <input id="select-project-submit" type="hidden" @if(!isset($id))name="select_project_submit"@endif/>
                
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                                <svg class="down-icon" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                                    <path d="M16.518,26.539a.921.921,0,0,0,.685-.3l7.924-8.108a.912.912,0,0,0,.276-.654.926.926,0,0,0-.941-.941.99.99,0,0,0-.665.266l-7.28,7.444L9.238,16.8a.971.971,0,0,0-.665-.266.926.926,0,0,0-.941.941.954.954,0,0,0,.276.665l7.924,8.1A.937.937,0,0,0,16.518,26.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                                </svg>
                                                <svg class="up-icon hidden" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                                    <path d="M16.519,16.539a.921.921,0,0,1,.685.3l7.925,8.109a.912.912,0,0,1,.276.654.926.926,0,0,1-.941.941.991.991,0,0,1-.665-.266l-7.28-7.444-7.28,7.444a.971.971,0,0,1-.665.266.926.926,0,0,1-.941-.941.954.954,0,0,1,.276-.665l7.925-8.1A.937.937,0,0,1,16.519,16.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                                </svg>
                                            </div>
                                        </button>
                                        <div class="hidden rounded-md w-full mt-3 relative z-50 bg-white " style="@if(isset($projects) && count($projects) > 0) border: 1px solid #dedede @endif">
                                            {{-- <p id="project-disabled" class="hidden bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">Projet</p> --}}
                                            @if(isset($projects) && count($projects) > 0)
                                                @foreach($projects as $key => $item)  
                                                    <p id="{{$item['id']}}" class="project-item bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">{{$item["name"]}}</p>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                            
                                    <p class="text-lg fontbold pb-3" style="padding-top:37px;">Ou créer un nouveau projet</p>
                            
                                    <input id="new-project" type="text" class="w-full appearance-none p-4 bg-input text-base h-input" name="new_project_submit" placeholder="Nom du projet"/>    
                                    
                                </div>
                                <div class="w-full text-center md:text-left">
                                    <button type="button" class="px-16 py-4 mt-8 font-bold text-white enregister-button h-input">Enregister</button>
                                </div>
                        
                            </div>
                        
                        </div>
                        @if(isset($id))
                            <button type="submit" class="w-full py-4 mb-4 md:mb-0 shadow-md text-center bg-white text-lg fontbold cursor-pointer">Enregistrer mon projet</button>
                        @else
                            <button id="modal-trigger-button" class="@if(isset($id))hidden @endif w-full py-4 mb-4 md:mb-0 shadow-md text-center bg-white text-lg fontbold cursor-pointer">Enregistrer mon projet</button>
                        @endif

                    </form>

                    <form method="POST" action="/payiteminsert_pro">
                        @csrf
                        <input id="price_submit_pay" type="hidden" name="price_submit_pay"/>
                        <input id="joinery_submit_pay" type="hidden" name="joinery_submit_pay"/>
                        <input id="material_submit_pay" type="hidden" name="material_submit_pay"/>
                        <input id="range_submit_pay" type="hidden" name="range_submit_pay"/>
                        <input id="opening_submit_pay" type="hidden" name="opening_submit_pay"/>
                        <input id="leave_submit_pay" type="hidden" name="leave_submit_pay"/>
                        <input id="installation_submit_pay" type="hidden" name="installation_submit_pay"/>
                        <input id="height_size_submit_pay" type="hidden" name="height_size_submit_pay"/>
                        <input id="width_size_submit_pay" type="hidden" name="width_size_submit_pay"/>
                        <input id="insulation_size_submit_pay" type="hidden" name="insulation_size_submit_pay"/>
                        <input id="aeration_submit_pay" type="hidden" name="aeration_submit_pay"/>
                        <input id="glazing_submit_pay" type="hidden" name="glazing_submit_pay"/>
                        <input id="color_submit_pay" type="hidden" name="color_submit_pay"/>

                        <button type="submit" class="w-full py-4 mb-4 md:mb-0 shadow-md text-center bg-black text-white text-lg fontbold">Payer ma commande</button>
                    </form>
                </div>

                <div id="joinery" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                    <div class="flex bg-white mx-auto relative items-center select-item">
                        <p class="text-2xl fontbold py-10 mx-auto">Type de menuiserie</p>
                    </div>
                    <div class="bg-white px-4 md:px-14 pb-4 md:pb-55 toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 col-gap-10 row-gap-10">
                            @if(isset($joinery) && count($joinery) > 0)
                                @foreach($joinery as $key => $item)
                                    <div id="{{$item['id']}}" class="relative rounded-md mx-auto text-center type-select maxwidth-210 @if(isset($selected_joinery)) @if($selected_joinery == $item['id']) active @endif @else @if($item['default'] == 1) active @endif @endif">
                                    <img class="w-full rounded-md" src="{{ asset('images') }}/{{$item['image']}}">
                                        <div class="w-full absolute bottom-0 rounded-b-md">
                                            <p class="bg-white mx-auto text-lg py-4 text-center fontbold rounded-b-md">{{$item["name"]}}</p>
                                        </div>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span>
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
               
                <div id="material" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                    <div class="flex bg-white mx-auto relative items-center select-item">
                        <p class="text-2xl fontbold py-10 mx-auto">Matériau</p>
                    </div>
                    <div class="bg-white px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                            @if(isset($material) && count($material) > 0)
                                @foreach($material as $key => $item)
                                    <div id="{{$item['id']}}" class="relative rounded-md px-3 py-10 mx-auto type-select maxwidth-210 @if($item['default'] == 1) active @endif check-item" style="padding-top:42px; padding-bottom:42px;">
                                        <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                        <p class="text-center leading-normal text-darkgray" style="font-size: 13px;">{{$item["description"]}}</p>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span>
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
        
                <div id="range" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                        <p class="text-2xl fontbold py-10 mx-auto">Gamme</p>
                    </div>
                    <div class="bg-white px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                            @if(isset($range) && count($range) > 0)
                                @foreach($range as $key => $item)
                                    <div id="{{$item['id']}}" class="relative rounded-md px-3 py-10 mx-auto type-select maxwidth-210 @if($item['default'] == 1) active @endif check-item" style="padding-top:42px; padding-bottom:42px;">
                                        <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                        <p class="text-center leading-normal text-darkgray" style="font-size:13px;">{{$item["description"]}}</p>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span>
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
        
                </div>
        
                <div id="opening" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                        <p class="text-2xl fontbold py-10 mx-auto">Type d’ouverture</p>
                    </div>
                    <div class="bg-white px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                            @if(isset($opening) && count($opening) > 0)
                                @foreach($opening as $key => $item)
                                    <div id="{{$item['id']}}" class="relative rounded-md px-3 py-10 mx-auto type-select maxwidth-210 @if($item['default'] == 1) active @endif check-item" style="padding-top:42px; padding-bottom:42px;">
                                        <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                        <p class="text-center leading-normal text-darkgray" style="font-size:13px;">{{$item["description"]}}</p>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span>
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
        
                </div>
        
                <div id="leave" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                        <p class="text-2xl fontbold py-10 mx-auto">Nombre de vantaux</p>
                    </div>
                    <div class="bg-white px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                            @if(isset($leave) && count($leave) > 0)
                                @foreach($leave as $key => $item)
                                    <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-md px-3 py-10 mx-auto type-select maxwidth-210 @if($item['default'] == 1) active @endif check-item" style="padding-top:42px; padding-bottom:42px;">
                                        <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                        <p class="text-center leading-normal text-darkgray" style="font-size:13px;">{{$item["description"]}}</p>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span>
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
        
                <div id="installation" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                        <p class="text-2xl fontbold py-10 mx-auto">Type de pose</p>
                    </div>
                    <div class="bg-white px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                            @if(isset($installation) && count($installation) > 0)
                                @foreach($installation as $key => $item)
                                    <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-md px-3 py-10 mx-auto ax-width-120 type-select maxwidth-210 @if($item['default'] == 1) active @endif check-item" style="padding-top:42px; padding-bottom:42px;">
                                        <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                        <p class="text-center leading-normal text-darkgray" style="font-size:13px;">{{$item["description"]}}</p>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span> 
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
        
        
                </div>
        
                <div id="dimension" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                        <p class="text-2xl fontbold py-10 mx-auto">Dimensions</p>
                    </div>
                    <div class="bg-white px-r md:px-14 pb-4 md:pb-14 toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 col-gap-10 row-gap-10 px-4 pb-4 mb-4">
    
                            <div class="h-12">
                                <p class="text-lg fontbold pb-3">Hauteur totale</p>
                                <button type="button" class="select-button focus:border-green p-4 text-base border border-heavygray rounded-md w-full relative text-left">
                                    <span id="height_size">
                                        @if(isset($height) && count($height) > 0)
                                            @foreach($height as $key => $item)
                                                @if($item["default"] == 1)
                                                    {{$item["value"]}}
                                                @endif
                                            @endforeach
                                        @endif
                                    </span>
                                    <span id="height_size_default" class="hidden">
                                        @if(isset($height) && count($height) > 0)
                                            @foreach($height as $key => $item)
                                                @if($item["default"] == 1)
                                                    {{$item["id"]}}
                                                @endif
                                            @endforeach
                                        @endif
                                    </span>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                        <svg class="down-icon" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                            <path d="M16.518,26.539a.921.921,0,0,0,.685-.3l7.924-8.108a.912.912,0,0,0,.276-.654.926.926,0,0,0-.941-.941.99.99,0,0,0-.665.266l-7.28,7.444L9.238,16.8a.971.971,0,0,0-.665-.266.926.926,0,0,0-.941.941.954.954,0,0,0,.276.665l7.924,8.1A.937.937,0,0,0,16.518,26.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                        </svg>
                                        <svg class="up-icon hidden" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                            <path d="M16.519,16.539a.921.921,0,0,1,.685.3l7.925,8.109a.912.912,0,0,1,.276.654.926.926,0,0,1-.941.941.991.991,0,0,1-.665-.266l-7.28-7.444-7.28,7.444a.971.971,0,0,1-.665.266.926.926,0,0,1-.941-.941.954.954,0,0,1,.276-.665l7.925-8.1A.937.937,0,0,1,16.519,16.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                        </svg>
                                    </div>
                                </button>
                                <div class="hidden rounded-md w-full mt-3 relative z-50 bg-white " style="border: 1px solid #dedede">
                                    <p class="hidden bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">Isolation</p>
                                    @if(isset($height) && count($height) > 0)
                                        @foreach($height as $key => $item)
                                            <p id="{{$item['id']}}" class="sel-item bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">{{$item["value"]}}</p>
                                        @endforeach
                                    @endif
                                </div>
                                @if(isset($height) && count($height) > 0)
                                    @foreach($height as $key => $item)
                                        <p id="{{$item["value"]}}" class="height_price hidden">{{$item["price"]}}</p>
                                    @endforeach
                                @endif
                            </div>
                            <div class="h-12">
                                <p class="text-lg fontbold pb-3">Largeur totale</p>
                                <button type="button" class="select-button focus:border-green p-4 text-base border border-heavygray rounded-md w-full relative text-left">
                                    <span id="width_size">
                                        @if(isset($width) && count($width) > 0)
                                            @foreach($width as $key => $item)
                                                @if($item["default"] == 1)
                                                    {{$item["value"]}}
                                                @endif
                                            @endforeach
                                        @endif
                                    </span>
                                    <span id="width_size_default" class="hidden">
                                        @if(isset($width) && count($width) > 0)
                                            @foreach($width as $key => $item)
                                                @if($item["default"] == 1)
                                                    {{$item["id"]}}
                                                @endif
                                            @endforeach
                                        @endif
                                    </span>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                        <svg class="down-icon" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                            <path d="M16.518,26.539a.921.921,0,0,0,.685-.3l7.924-8.108a.912.912,0,0,0,.276-.654.926.926,0,0,0-.941-.941.99.99,0,0,0-.665.266l-7.28,7.444L9.238,16.8a.971.971,0,0,0-.665-.266.926.926,0,0,0-.941.941.954.954,0,0,0,.276.665l7.924,8.1A.937.937,0,0,0,16.518,26.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                        </svg>
                                        <svg class="up-icon hidden" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                            <path d="M16.519,16.539a.921.921,0,0,1,.685.3l7.925,8.109a.912.912,0,0,1,.276.654.926.926,0,0,1-.941.941.991.991,0,0,1-.665-.266l-7.28-7.444-7.28,7.444a.971.971,0,0,1-.665.266.926.926,0,0,1-.941-.941.954.954,0,0,1,.276-.665l7.925-8.1A.937.937,0,0,1,16.519,16.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                        </svg>
                                    </div>
                                </button>
                                <div class="hidden rounded-md w-full mt-3 relative z-50 bg-white " style="border: 1px solid #dedede">
                                    <p class="hidden bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">Isolation</p>
                                    @if(isset($width) && count($width) > 0)
                                        @foreach($width as $key => $item)
                                            <p id="{{$item['id']}}" class="sel-item bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">{{$item["value"]}}</p>
                                        @endforeach
                                    @endif
                                </div>
                                @if(isset($width) && count($width) > 0)
                                    @foreach($width as $key => $item)
                                        <p id="{{$item["value"]}}" class="width_price hidden">{{$item["price"]}}</p>
                                    @endforeach
                                @endif
                            </div>
                            
                        </div>
                    </div>
                </div>
        
                <div id="insulation" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                        <p class="text-2xl fontbold py-10 mx-auto">Pour isolation de</p>
                    </div>
                    <div class="bg-white pt-4 md:px-14 pb-4 md:pb-14 toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 col-gap-10 row-gap-10 pb-4 mb-4">
    
                            <div class="h-12">
                                <p class="text-lg fontbold pb-3">Pour isolation de</p>
                                <button type="button" class="select-button focus:border-green p-4 text-base border border-heavygray rounded-md w-full relative text-left">
                                    <span id="insulation_size">
                                        @if(isset($insulation) && count($insulation) > 0)
                                            @foreach($insulation as $key => $item)
                                                @if($item["default"] == 1)
                                                    {{$item["value"]}}
                                                @endif
                                            @endforeach
                                        @endif
                                    </span>
                                    <span id="insulation_size_default" class="hidden">
                                        @if(isset($insulation) && count($insulation) > 0)
                                            @foreach($insulation as $key => $item)
                                                @if($item["default"] == 1)
                                                    {{$item["id"]}}
                                                @endif
                                            @endforeach
                                        @endif
                                    </span>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                        <svg class="down-icon" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                            <path d="M16.518,26.539a.921.921,0,0,0,.685-.3l7.924-8.108a.912.912,0,0,0,.276-.654.926.926,0,0,0-.941-.941.99.99,0,0,0-.665.266l-7.28,7.444L9.238,16.8a.971.971,0,0,0-.665-.266.926.926,0,0,0-.941.941.954.954,0,0,0,.276.665l7.924,8.1A.937.937,0,0,0,16.518,26.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                        </svg>
                                        <svg class="up-icon hidden" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                            <path d="M16.519,16.539a.921.921,0,0,1,.685.3l7.925,8.109a.912.912,0,0,1,.276.654.926.926,0,0,1-.941.941.991.991,0,0,1-.665-.266l-7.28-7.444-7.28,7.444a.971.971,0,0,1-.665.266.926.926,0,0,1-.941-.941.954.954,0,0,1,.276-.665l7.925-8.1A.937.937,0,0,1,16.519,16.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                        </svg>
                                    </div>
                                </button>
                                <div class="hidden rounded-md w-full mt-3 relative z-50 bg-white " style="border: 1px solid #dedede">
                                    <p class="hidden bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">Isolation</p>
                                    @if(isset($insulation) && count($insulation) > 0)
                                        @foreach($insulation as $key => $item)  
                                            <p id="{{$item['id']}}" class="sel-item bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">{{$item["value"]}}</p>
                                        @endforeach
                                    @endif
                                </div>
    
                                @if(isset($insulation) && count($insulation) > 0)
                                    @foreach($insulation as $key => $item)
                                        <p id="{{$item["value"]}}" class="insulation_price hidden">{{$item["price"]}}</p>
                                    @endforeach
                                @endif
                            </div>
                            
                        </div>
                    </div>
                </div>
        
                <div id="aeration" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                        <p class="text-2xl fontbold py-10 mx-auto">Aération</p>
                    </div>
                    <div class="bg-white px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                            @if(isset($aeration) && count($aeration) > 0)
                                @foreach($aeration as $key => $item)
                                    <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-md px-3 py-10 maxwidth-210 mx-auto type-select @if($item['default'] == 1) active @endif check-item" style="padding-top:42px; padding-bottom:42px;">
                                        <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                        <p class="text-center leading-normal text-darkgray" style="font-size:13px;">{{$item["description"]}}</p>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span> 
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
        
                <div id="glazing" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                        <p class="text-2xl fontbold py-10 mx-auto">Vitrage</p>
                    </div>
                    <div class="bg-white px-4 md:px-8 pb-4 md:pb-14 toggle-part">
                        <div class="grid md:grid-cols-1 xl:grid-cols-2 col-gap-10 row-gap-10">
                            @if(isset($glazing) && count($glazing) > 0)
                                @foreach($glazing as $key => $item)
                                    <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-md px-3 py-10 mx-auto type-select maxwidth-335 @if($item['default'] == 1) active @endif check-item" style="width:335px; height:147px; padding-top:20px; padding-bottom:20px;">
                                        <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                        <p class="text-center leading-normal text-darkgray" style="font-size:13px;">{{$item["description"]}}</p>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span> 
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
        
                <div id="color" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                        <p class="text-2xl fontbold py-10 mx-auto">Couleur menuiserie</p>
                    </div>
                    <div class="bg-white px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 col-gap-10 row-gap-10">
                            @if(isset($color) && count($color) > 0)
                                @foreach($color as $key => $item)
                                    <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-md  text-center mx-auto type-select color-item @if($item['default'] == 1) active @endif" style="background-color: {{$item['value']}};">
                                        <div class="w-full absolute bottom-0">
                                            <p class="bg-white mx-auto  py-4 text-center fontbold rounded-b-sm">{{$item['name']}}</p>
                                        </div>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span> 
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="w-full lg:w-4/12 pl-0 pt-6 lg:pt-0">
                <div class="mx-auto maxwidth-418">
                    <div class="pb-6 shadow-md bg-white">
                        <p class="text-2xl pt-10 fontbold text-center" style="padding-bottom: 27px;">Votre configurateur</p>
                        
                        <div class="flex justify-between items-center px-3 md:px-8 h-15 bg-whitepink">
                            <p class="text-lg fontbold">Prix :</p>
                            <p id="price" class="text-4xl fontbold">0€</p>
                        </div>
                        <div class="px-3 md:px-8">
                            <div id="joinery_result_wrapper">
                                <div class="flex flex-wrap items-center">
                                    <p class="text-base" style="padding-top: 20px; padding-bottom: 18px;">Type de menuiserie :</p>
                                    <p id="joinery_result" class="fontbold py-2 pl-3">Fenêtre</p>
                                </div>
                            </div>
                            <div id="material_result_wrapper">
                                <hr class="bg-gray-400"/>
                                <div class="flex flex-wrap items-center">
                                    <p class="text-base" style="padding-top: 20px; padding-bottom: 18px;">Matériau :</p>
                                    <p id="material_result" class="fontbold py-2 pl-3">Aluminium</p>
                                </div>
                            </div>
                            <div id="range_result_wrapper">
                                <hr class="bg-gray-400"/>
                                <div class="flex flex-wrap items-center">
                                    <p class="text-base" style="padding-top: 20px; padding-bottom: 18px;">Gamme :</p>
                                    <p id="range_result" class="fontbold py-2 pl-3">Gamme 70</p>
                                </div>
                            </div>
                            <div id="opening_result_wrapper">
                                <hr class="bg-gray-400"/>
                                <div class="flex flex-wrap items-center">
                                    <p class="text-base" style="padding-top: 20px; padding-bottom: 18px;">Type d’ouverture :</p>
                                    <p id="opening_result" class="fontbold py-2 pl-3">Abattant</p>
                                </div>
                            </div>
                            <div id="leave_result_wrapper">
                                <hr class="bg-gray-400"/>
                                <div class="flex flex-wrap items-center">
                                    <p class="text-base" style="padding-top: 20px; padding-bottom: 18px;">Nombre de vantaux :</p>
                                    <p id="leave_result" class="fontbold py-2 pl-3">1 vantail</p>
                                </div>
                            </div>
                            <div id="installation_result_wrapper">
                                <hr class="bg-gray-400"/>
                                <div class="flex flex-wrap items-center">
                                    <p class="text-base" style="padding-top: 20px; padding-bottom: 18px;">Type de pose :</p>
                                    <p id="installation_result" class="fontbold py-2 pl-3">Applique</p>
                                </div>
                            </div>
                            <div id="height_size_result_wrapper">
                                <hr class="bg-gray-400"/>
                                <div class="flex flex-wrap items-center">
                                    <p class="text-base" style="padding-top: 20px; padding-bottom: 18px;">Hauteur totale :</p>
                                    <p id="height_size_result" class="fontbold py-2 pl-3">600</p>
                                </div>
                            </div>
                            <div id="width_size_result_wrapper">
                                <hr class="bg-gray-400"/>
                                <div class="flex flex-wrap items-center">
                                    <p class="text-base" style="padding-top: 20px; padding-bottom: 18px;">Largeur totale :</p>
                                    <p id="width_size_result" class="fontbold py-2 pl-3">600</p>
                                </div>
                            </div>
                            <div id="insulation_size_result_wrapper">
                                <hr class="bg-gray-400"/>
                                <div class="flex flex-wrap items-center">
                                    <p class="text-base" style="padding-top: 20px; padding-bottom: 18px;">Pour isolation de :</p>
                                    <p id="insulation_size_result" class="fontbold py-2 pl-3">120</p>
                                </div>
                            </div>
                            <div id="aeration_result_wrapper">
                                <hr class="bg-gray-400"/>
                                <div class="flex flex-wrap items-center">
                                    <p class="text-base" style="padding-top: 20px; padding-bottom: 18px;">Aération :</p>
                                    <p id="aeration_result" class="fontbold py-2 pl-3">15 M3/H</p>
                                </div>
                            </div>
                            <div id="glazing_result_wrapper">
                                <hr class="bg-gray-400"/>
                                <div class="flex flex-wrap items-center">
                                    <p class="text-base" style="padding-top: 20px; padding-bottom: 18px;">Vitrage :</p>
                                    <p id="glazing_result" class="fontbold py-2 pl-3">4/16/4 FE</p>
                                </div>
                            </div>
                            <div id="color_result_wrapper">
                                <hr class="bg-gray-400"/>
                                <div class="flex flex-wrap items-center">
                                    <p class="text-base" style="padding-top: 20px; padding-bottom: 18px;">Couleur menuiserie :</p>
                                    <p id="color_result" class="fontbold py-2 pl-3">RAL 9016</p>
                                </div>
                            </div>
                            
                        </div>
                  
                        
                    </div>
                </div>
                
            </div>
        
        </div>
        
    {{-- </form> --}}
    
</main>

@endsection

@section('scripts')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>

    var price;
    var dimension_price = [0, 0, 0];

    var options = ["joinery", "material", "range", "opening", "leave", "installation" ,"dimension", "insulation", "aeration", "glazing", "color"];

    var height_prices = [];
    var width_prices = [];
    var insulation_prices = [];

    var dimension_options = ["height_size", "width_size", "insulation_size"];
    var dimensions = ["", "", ""];


    $(function() {

        selected = ["", "" ,"" ,"", "", "", "", "", "", "", ""];
        price = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        $(".height_price").each(function() {
            height_prices.push([$(this).attr("id"), $(this).html()]);
        });
        $(".width_price").each(function() {
            width_prices.push([$(this).attr("id"), $(this).html()]);
        });
        $(".insulation_price").each(function() {
            insulation_prices.push([$(this).attr("id"), $(this).html()]);
        });

        console.log(height_prices);
        console.log(width_prices);
        console.log(insulation_prices);

        init();

    });

    $(".type-select").click(function() {

        $(this).siblings(".active").removeClass("active");
        $(this).addClass("active");

        var changedIndex;

        for(var i = 0 ; i < options.length ; i ++) {
            if($(this).parent().parent().parent().attr("id") === options[i]) {
                changedIndex = i;
            }
        }

        var changedName = $(this).find("p").first().html();
        var changedPrice = $(this).find("p").last().html();

        selected[changedIndex] = changedName;
        price[changedIndex] = changedPrice;

        console.log(price);
  
        $("#" + options[changedIndex] + "_result").html(changedName);
        $("#" + options[changedIndex] + "_submit").val($(this).attr("id"));
        $("#" + options[changedIndex] + "_submit_pay").val($(this).attr("id"));

        totalPriceCalculate();

    });

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

        console.log(price);
        console.log(dimension_price);

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

    function init() {

        for(var i = 0 ; i < options.length ; i ++) {

            if((i !== 6) && (i !== 7)) {

                var changedName = $("#" + options[i]).find("div.active").find("p").first().html();
                var changedPrice = $("#" + options[i]).find("div.active").find("p").last().html();
                var changedId = $("#" + options[i]).find("div.active").attr("id");

                selected[i] = changedName;
                price[i] = changedPrice;

                $("#" + options[i] + "_result").html(changedName);
                $("#" + options[i] + "_submit").val(changedId);
                $("#" + options[i] + "_submit_pay").val(changedId);

            }

        }

        for(var i = 0 ; i < dimension_options.length ; i ++) {

            var changedName = $("#" + dimension_options[i]).html();
            var changedId = $("#" + dimension_options[i] + "_default").html();

            dimensions[i] = changedName;
            
            $("#" + dimension_options[i] + "_result").html(changedName);
            $("#" + dimension_options[i] + "_submit").val(changedId);
            $("#" + dimension_options[i] + "_submit_pay").val(changedId);

            if(i == 0) {
                for(var j = 0 ; j < height_prices.length ; j ++) {
                    if(height_prices[j][0].trim() == changedName.trim()) {
                        dimension_price[0] = height_prices[j][1];
                    }
                }
            }
            if(i == 1) {
                for(var j = 0 ; j < width_prices.length ; j ++) {
                    if(width_prices[j][0].trim() == changedName.trim()) {
                        dimension_price[1] = width_prices[j][1];
                    }
                }
            }
            if(i == 2) {
                for(var j = 0 ; j < insulation_prices.length ; j ++) {
                    if(insulation_prices[j][0].trim() == changedName.trim()) {
                        dimension_price[2] = insulation_prices[j][1];
                    }
                }
            }

        }

        totalPriceCalculate();

    }

    $(function() {
        validateForm();
    })

    var selectProject = false;

    $("#new-project").keyup(function() {
        validateForm();
    });

    $("#new-project").focus(function() {

        $("#select-project").html("");
        $("#select-project-submit").val("");
        selectProject = false;

        validateForm();
        
    });

    function validateForm() {

        var newProject = $("#new-project").val();

        var button = $("button.enregister-button");
        
        if(selectProject || newProject.length != 0) {
            console.log("Yes");
            if(!button.hasClass("active")) {
                button.addClass("active");
                button.attr("type", "submit");
            }

        } else {
            console.log("No");
            if(button.hasClass("active")) {
                button.removeClass("active");
                button.attr("type", "button");
            }
        }
    }

    $(".select-button").click(function(event) {

        event.stopPropagation();

        $(this).next().toggle();
        if($(this).next().css("display") == "none") {
            $(this).find("svg.up-icon").hide();
            $(this).find("svg.down-icon").show();
        } else {
            $(this).find("svg.up-icon").show();
            $(this).find("svg.down-icon").hide();
        }

    });

    $(".project-item").click(function() {
        $(this).parent().hide();
        $(this).parent().prev().find("svg.up-icon").hide();
        $(this).parent().prev().find("svg.down-icon").show();
        $(this).parent().prev().find("span").html($(this).html());

        $("#select-project-submit").val($(this).attr("id"));

        $("#new-project").val("");

        selectProject = true;

        validateForm();
        
    });


    $(window).click(function() {

        $(".select-button").each(function() {
            $(this).next().hide();
            $(this).find("svg.up-icon").hide();
            $(this).find("svg.down-icon").show();
        });
    });

    $(".sel-item").click(function(event) {

        event.stopPropagation();

        $(this).parent().hide();
        $(this).parent().prev().find("svg.up-icon").hide();
        $(this).parent().prev().find("svg.down-icon").show();
        $(this).parent().prev().find("span").html($(this).html());

        var changedIndex;

        for(var i = 0 ; i < dimension_options.length ; i ++) {
            if($(this).parent().prev().find("span").attr("id") === dimension_options[i]) {
                changedIndex = i;
            }
        }

        var changedName = $(this).html();

        dimensions[changedIndex] = changedName;

        $("#" + dimension_options[changedIndex] + "_result_wrapper").show();
        $("#" + dimension_options[changedIndex] + "_result").html(changedName);
        $("#" + dimension_options[changedIndex] + "_result_finish").html(changedName);
        $("#" + dimension_options[changedIndex] + "_submit").val($(this).attr("id"));
        $("#" + dimension_options[changedIndex] + "_submit_pay").val($(this).attr("id"));

        if(changedIndex === 0) {
            for(var i = 0 ; i < height_prices.length ; i ++) {
                if(height_prices[i][0] == changedName) {
                    dimension_price[changedIndex] = height_prices[i][1];
                }
            }
        }
        if(changedIndex === 1) {
            for(var i = 0 ; i < width_prices.length ; i ++) {
                if(width_prices[i][0] == changedName) {
                    dimension_price[changedIndex] = width_prices[i][1];
                }
            }
        }
        if(changedIndex === 2) {
            for(var i = 0 ; i < insulation_prices.length ; i ++) {
                if(insulation_prices[i][0] == changedName) {
                    dimension_price[changedIndex] = insulation_prices[i][1];
                }
            }
        }

        totalPriceCalculate();

        console.log(dimension_price);

        if((dimensions[0] !== "" && dimensions[1] !== "") || dimensions[2] !== "") {
            next = true;
        }


    });

</script>
@endsection


@section('footer')
@include('layouts.footer')
@endsection
