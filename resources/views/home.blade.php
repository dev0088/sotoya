@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
<style>

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
        max-width: 570px;
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

    .maxwidth-1280 {
        max-width:1280px;
    }
    .maxwidth-1310 {
        max-width:1310px;
    }
    .maxwidth-760 {
        max-width:760px;
    }
    .maxwidth-260 {
        max-width:260px;
    }
    .maxwidth-680 {
        max-width:608px;
    }
    .maxwidth-1441 {
        max-width:1441px;
    }

</style>

@endsection

@section('content')

<main id="main-content" class="bg-white pb-10 md:pb-30 maxwidth-1441 mx-auto">

    <div class="bg-whitegreen">
        <div class="flex-none xl:flex relative justify-start lg:justify-between">
            
            <div class="absolute inset-y-0 xl:relative pl-8 pr-4 xl:pl-35 pt-8 md:pt-12 lg:pt-16 xl:pt-105 transform translate-y-3/10 xl:transform-none">
                <p class="tracking-normal leading-none text-black xl:leading-snug pb-8 sm:pb-12 md:pb-16 lg:pb-20 xl:pb-8 xl:mb-6 fontbold text-3xl sm:text-4xl md:text-44">
                    Nous fournissons et
                    <br class="hidden xl:block"/>fabriquons des menuiseries
                    <br class="hidden xl:block"/>pour les professionnels
                    <br class="hidden xl:block"/>et les particuliers
                </p>
                @if(Auth::user())
                    <a @if(Auth::user()->mode == 1)href="/pro"@else href="/part"@endif class="text-white text-lg fontbold px-10 bg-green" style="height:52px; padding-top:19px; padding-bottom:15px;">Voir le configurateur</a>
                @else
                <button id="modal-trigger-button" class="text-white text-lg fontbold px-10 bg-green" style="height:52px; padding-top:19px; padding-bottom:15px;">Voir le configurateur</button>
                @endif
            </div>
    
            <div class="flex-shrink-0 w-screen xl:w-max-content top-0 right-0">
                <img class="w-full xl:w-full mx-auto" src="{{ asset('images/baie coulissante 2@2x.png') }}"/>
            </div>
        </div>
    </div>
    
    <div class="w-full px-8 md:px-20 relative" style="">
        <div class="w-full relative bg-white py-8 md:pt-70 md:pb-15 shadow-md mx-auto maxwidth-1280 top-4 md:top-minus80" style="z-index: 20">
            <p class="text-4xl pb-6 text-center fontbold">Le configurateur</p>
        
            <p class="w-8/10 text-lg px-6 text-left md:text-center leading-relaxed mb-15 mx-auto">
                Chez Sotoya Constructions, nous développons des partenariats avec de nombreuses entreprises 
                <br class="hidden md:block"/>leaders sur leur marché. Ces collaborations renforcent notre expertise dans le domaine de la
                <br class="hidden md:block"/> menuiserie. Le configurateur vous guidera dans vos recherches.
            </p>
        
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 px-12 row-gap-8 md:row-gap-15 col-gap-4 md:col-gap-10">
                @if(isset($joinery) && count($joinery) > 0)
                    @foreach($joinery as $key => $item)
                        <div class="mx-auto">
                        <img class="w-full maxwidth-260" src="{{ asset('images') }}/{{$item['image']}}"/>
                            <p class="text-lg pt-4 pb-2 fontbold">{{$item['name']}}</p>
                            <a href="/part/{{$item['name']}}" class="fontbold text-green border-b-2 border-green">Configurateur</a>
                        </div>
                    @endforeach
                @endif
            
            </div>
        </div>
        <div class="w-full absolute bottom-0 left-0 bg-whitegreen py-0 md:py-20" style="z-index: 10"></div>
    </div>
    
    <div class="bg-whitegreen px-8 md:px-15 lg:px-0 pb-10 md:pb-24" style="padding-top:23px;">
        <div class="lg:w-1004 xl:w-1232 flex-none lg:flex pt-6 mx-auto" style="">
            <div class="lg:w-474 lg:pl-19 lg:pr-13 xl:w-600 xl:pl-6 xl:pr-4" style="">
                <p class="pt-4 pb-8 lg:pb-4 xl:pb-8 text-4xl fontbold">Qui sommes-nous ?</p>
                <p class="text-lg tracking-tight leading-relaxed lg:leading-tight xl:leading-relaxed pb-6 lg:pb-3 xl:pb-6 fontbold">
                    Depuis 2016, Sotoya met son expérience et son savoir-faire unique au service des professionnels du bâtiment, promoteurs, artisans poseurs, et architectes. Spécialisée dans la menuiserie aluminium et PVC nous vous accompagnons de la conception de votre projet jusqu’à la pose. Notre bureau d’études est à votre disposition pour le conseil, la réalisation de votre projet.
                </p>
                <p class="text-lg leading-relaxed lg:leading-tight xl:leading-relaxed pb-6 lg:pb-2 xl:pb-6" style="letter-spacing: -0.03em">Nous réalisons des produits sur mesure avec un choix de matières et de couleurs variés, et le meilleur rapport qualité/prix.<br/>
                    Notre entreprise aubagnaise spécialisée dans la fabrication sur-mesure de portes, fenêtres, baies coulissantes, volets et grandes menuiseries, travaille en partenariat avec des installateurs reconnus.<br/><br/>
                </p>
                <p class="text-lg leading-relaxed lg:leading-tight xl:leading-relaxed pb-8 lg:pb-4 xl:pb-8" style="letter-spacing: -0.03em">Sotoya assemble dans son atelier de fabrication situé à Aubagne, la gamme Aluminium SAPA du groupe. Cela est fait selon les règles de l’art, le respect des normes et la réglementation en vigueur.<br/>
                        Sotoya vous donne la possibilité de commander en ligne vos produits sur mesure d’origine française dans des délais de fabrication moindres.
                </p>
                <p class="text-lg leading-relaxed lg:leading-tight xl:leading-relaxed text-right fontbold">
                    Fondateur de Sotoya
                </p>
            </div>
            <div class="hidden lg:block relative lg:w-495 lg:py-15 lg:px-20px xl:w-608 xl:py-29 px-6 lg:h-690 xl:h-739" style="">

                <img class="absolute left-0 top-0" src="{{asset('images/homeimage-01.png')}}"/>
                <img class="absolute right-0 bottom-0" src="{{asset('images/homeimage-02.png')}}"/>

                <div class="relative w-full h-full hidden xl:block">
                    <img class="absolute top-0 left-0" src="{{asset('images/homeimage-1.png')}}"/>
                    <img class="absolute top-0 right-0" src="{{asset('images/homeimage-2.png')}}"/>
                    <img class="absolute bottom-0 left-0" src="{{asset('images/homeimage-3.png')}}"/>
                    <img class="absolute bottom-0 right-0" src="{{asset('images/homeimage-4.png')}}"/>
                </div>

                <div class="xl:hidden w-full h-full grid grid-cols-2 lg:col-gap-10 xl:col-gap-0">
                    <div class="relative">
                        <img class="w-full absolute top-0" src="{{asset('images/homeimage-1.png')}}"/>
                        <img class="w-full absolute bottom-0" src="{{asset('images/homeimage-2.png')}}"/>
                    </div>
                    <div class="relative">
                        <img class="w-full absolute top-0" src="{{asset('images/homeimage-3.png')}}"/>
                        <img class="w-full absolute bottom-0" src="{{asset('images/homeimage-4.png')}}"/>
                    </div>
                </div>

            </div>

            <div class="block lg:hidden bg-whitegreen">
                <img class="w-full float-right maxwidth-608 pb-24" src="{{ asset('images/images about@2x.png') }}"/>
            </div>

        </div>
    </div>
    
    <div class="bg-white" class="py-30">
        <p class="text-4xl text-center pt-30 pb-6 fontbold">Nos partenaires</p>
        <p class="w-full text-lg tracking-tight text-center leading-normal mx-auto maxwidth-760">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue, vel lacinia eros. Mauris ultrices, mi eget.</p>
        <img class="mx-auto mt-8 md:mt-15" src="{{ asset('images/partenaire 2 sapa@2x.png') }}"/>
    </div>
    
    <div id="voir-modal" class="modal mx-auto z-50">
    
        <div class="modal-content relative px-8 py-8 md:px-15 md:pt-70 md:pb-15">
    
            <span class="absolute top-4 md:top-8 right-4 md:right-8 text-4xl close">
                <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.998" viewBox="0 0 20.001 19.998">
                    <path id="xmark" d="M9.743,27.5a1.131,1.131,0,0,0,0,1.589,1.158,1.158,0,0,0,1.6,0l8.072-8.072,8.072,8.072a1.128,1.128,0,0,0,1.6-1.589L21.007,19.42l8.085-8.072a1.128,1.128,0,0,0-1.6-1.589l-8.072,8.072L11.345,9.759a1.123,1.123,0,0,0-1.6,0,1.142,1.142,0,0,0,0,1.589l8.072,8.072Z" transform="translate(-9.417 -9.423)" fill="#020000"/>
                </svg>              
            </span>
    
            <p class="text-4xl text-black fontbold text-center">Je suis un :</p>
    
            <div class="grid grid-cols-1 md:grid-cols-2 col-gap-5 row-gap-4 pt-4 md:pt-10">
                <a href="/pro" class="pt-4 md:pt-9 cursor-pointer border border-lightergray rounded-lg">
                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="74.757" height="80" viewBox="0 0 74.757 80">
                        <g id="Groupe_70" data-name="Groupe 70" transform="translate(-4.969 -0.929)">
                          <path id="Tracé_1395" data-name="Tracé 1395" d="M6.852,80.929h64.6a8.076,8.076,0,0,0,6.155-2.36,8.539,8.539,0,0,0,2.117-5.933V34.243a1.884,1.884,0,0,0-1.883-1.883H62.679V19.841A1.884,1.884,0,0,0,60.8,17.958h-3.53V15.822c.417-2.79-.692-8.41-7.526-11.715V2.812a1.883,1.883,0,0,0-3.766,0V5.33a1.884,1.884,0,0,0,1.174,1.744c7.142,2.9,6.414,8.06,6.383,8.257a1.927,1.927,0,0,0-.031.337v4.91a1.715,1.715,0,0,0,0,.192v2.85a2.037,2.037,0,0,1-1.459-1.95V17.876a1.927,1.927,0,0,0-1.933-1.883,1.883,1.883,0,0,0-1.883,1.878l-.017,8.2a.771.771,0,0,1-.77.771.885.885,0,0,1-.795-.588,1.883,1.883,0,0,0-3.766,0v.009l0,1.415a.76.76,0,0,1-.7.353,1.111,1.111,0,0,1-.665-.334V26.414a1.883,1.883,0,0,0-3.766,0,.683.683,0,1,1-1.365,0v-.638a1.883,1.883,0,0,0-3.763-.1c0,.018,0,.036,0,.054a2.359,2.359,0,0,1-.682.081.682.682,0,0,1-.682-.682q0-.046,0-.092l-.127-2.6V12.023a4.969,4.969,0,0,1,2.019-4.01A1.884,1.884,0,0,0,33.9,6.506V2.812a1.883,1.883,0,0,0-3.766,0V5.629a8.683,8.683,0,0,0-2.774,6.393v5.937H23.892a1.884,1.884,0,0,0-1.883,1.883V32.361H6.852a1.884,1.884,0,0,0-1.883,1.883v44.8A1.882,1.882,0,0,0,6.852,80.929Zm36.806-44.8V47.245H41.031V36.126ZM39.111,60.454V51.01h6.468v9.444Zm1.92,3.765h2.627V77.164H41.031ZM75.959,72.8a4.937,4.937,0,0,1-1.1,3.191,4.5,4.5,0,0,1-3.412,1.175H47.424V63.96a3.177,3.177,0,0,0,1.921-2.913V58.054H67.79a11.154,11.154,0,0,0,8.166-3.3V72.682Q75.955,72.74,75.959,72.8Zm0-28.5c0,4.831-2.146,9.995-8.166,9.995H49.344V50.416A3.178,3.178,0,0,0,47.423,47.5V36.126H75.954v8.168ZM25.777,21.724h1.584v.765q0,.046,0,.092l.127,2.605a4.452,4.452,0,0,0,4.447,4.394,6.058,6.058,0,0,0,1.78-.244,4.441,4.441,0,0,0,5.258,1.1,4.554,4.554,0,0,0,6.683-.2,4.516,4.516,0,0,0,6.214-3.2,5.776,5.776,0,0,0,2.209.436h1.3a1.9,1.9,0,0,0,1.895-1.756,1.782,1.782,0,0,0-.013-.374V21.724h1.647V32.36H25.777ZM8.734,36.126H37.265V47.5a3.178,3.178,0,0,0-1.921,2.913v3.872H16.839c-5.976,0-8.1-5.123-8.1-9.916V36.126Zm8.1,21.928H35.345v2.993a3.177,3.177,0,0,0,1.921,2.913v13.2H8.734V54.793A11.1,11.1,0,0,0,16.839,58.054Z" transform="translate(0 0)" fill="#0c2417"/>
                          <path id="Tracé_1396" data-name="Tracé 1396" d="M15.843,79.835h16.6a1.886,1.886,0,0,0,0-3.772H17.729V69.012a1.886,1.886,0,1,0-3.772,0v8.937A1.886,1.886,0,0,0,15.843,79.835Z" transform="translate(-0.893 -6.705)"/>
                        </g>
                    </svg>
                    <p class="text-lg text-black text-center fontbold pt-4 md:pt-6 pb-4 md:pb-7">Professionnel</p>
                </a>
                <a href="/part" class="pt-4 md:pt-9 cursor-pointer border border-lightergray rounded-lg">
                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="78.685" height="80" viewBox="0 0 78.685 80">
                        <g id="Groupe_72" data-name="Groupe 72" transform="translate(-1.068)">
                          <path id="Tracé_1391" data-name="Tracé 1391" d="M83.865,7.763c-.229-.477-1.1-2.543.05-4.14A2.076,2.076,0,0,0,83.789.837c-1.845-1.8-6.235,1.14-8.037,2.489-3.293,2.465-13.365,11.553-6.1,25.691l-.05,44.191a6.832,6.832,0,0,0,6.821,6.825h.005a6.837,6.837,0,0,0,6.828-6.811L83.3,38.438c0-.016,0-.029,0-.045s0-.031,0-.045l.009-9C86.9,25.489,91,16.816,83.865,7.763ZM73.342,30.425l6.278.007-.007,6.119-6.278-.005ZM72.39,12.652a20.153,20.153,0,0,1,7.263-7.527A9.219,9.219,0,0,0,80.7,9.667a1.759,1.759,0,0,0,.166.247c6.475,8.079,1.469,14.942-.2,16.839l-8.037-.009C70.218,21.713,70.134,16.978,72.39,12.652Zm4.043,63.7a3.144,3.144,0,0,1-3.14-3.139l.038-32.986,6.28.005-.036,32.986A3.149,3.149,0,0,1,76.432,76.352Z" transform="translate(-8.033 -0.032)" fill="#0c2417"/>
                          <path id="Tracé_1392" data-name="Tracé 1392" d="M24.521,64.98V18.513a1.835,1.835,0,0,0-.922-1.585L14.56,1.211A1.845,1.845,0,0,0,12.975.286a1.912,1.912,0,0,0-1.6.9l-9.3,15.695a1.834,1.834,0,0,0-1,1.629v52a9.52,9.52,0,0,0,9.53,9.514l4.392,0h0a9.523,9.523,0,0,0,9.53-9.516V65a.075.075,0,0,0,0-.009S24.521,64.984,24.521,64.98ZM4.755,20.353h16.08v42.8l-16.08,0ZM12.939,5.781,19.2,16.673H6.482Zm6.185,68.864a5.816,5.816,0,0,1-4.132,1.709l-4.393,0a5.835,5.835,0,0,1-5.842-5.832V66.836l16.08-.005v3.689A5.8,5.8,0,0,1,19.124,74.645Z" transform="translate(0 -0.034)" fill="#0c2417"/>
                          <path id="Tracé_1393" data-name="Tracé 1393" d="M14.137,32.919a1.844,1.844,0,0,0-1.844,1.844V58.837a1.844,1.844,0,1,0,3.687,0V34.763A1.845,1.845,0,0,0,14.137,32.919Z" transform="translate(-1.342 -4.015)" fill="#0c2417"/>
                          <path id="Tracé_1394" data-name="Tracé 1394" d="M57.58,0H37.018a1.843,1.843,0,0,0-1.844,1.84v75.95a1.843,1.843,0,0,0,1.844,1.84H57.58a1.843,1.843,0,0,0,1.844-1.84V1.84A1.843,1.843,0,0,0,57.58,0ZM55.736,75.95H38.86V70.5h8.714a1.84,1.84,0,1,0,0-3.681H38.86v-4.58h4.976a1.84,1.84,0,1,0,0-3.681H38.86v-4.58h8.714a1.84,1.84,0,1,0,0-3.681H38.86v-4.58h4.976a1.84,1.84,0,1,0,0-3.681H38.86V37.457h8.714a1.84,1.84,0,1,0,0-3.681H38.86V29.195h4.976a1.84,1.84,0,1,0,0-3.681H38.86V20.936h8.714a1.84,1.84,0,1,0,0-3.681H38.86V12.674h4.976a1.84,1.84,0,1,0,0-3.681H38.86V3.676H55.736Z" transform="translate(-4.155)" fill="#0c2417"/>
                        </g>
                    </svg>  
                    <p class="text-lg text-black text-center fontbold pt-4 md:pt-6 pb-4 md:pb-7">Particulier</p>
                </a>
            </div>
        </div>
    
    </div>

</main>

@endsection

@section('scripts')
<script>

    var modal = document.getElementById("voir-modal");
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

</script>
@endsection


@section('footer')
@include('layouts.footer')
@endsection
