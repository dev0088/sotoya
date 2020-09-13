@extends('layouts.app')

@section('title')
<title>{{__('About Us')}}</title>
@endsection

@section('styles')
<style>

    .maxwidth-1310 {
        max-width: 1310px;
    }
    .maxwidth-608 {
        max-width: 608px;
    }

</style>

@endsection

@section('content')

<main id="main-content" class="bg-whitegreen px-8 pb-10 md:px-35 md:pb-30">

    <div class="">
        <div class="flex-none md:flex pt-9 pb-6 items-center">
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="/" class="text-base fontbold">Accueil</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <span class="text-base fontbold">Qui sommes-nous ?</span>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-4 row-gap-4 pt-6 mx-auto maxwidth-1310">
        <div class="">
            <p class="pt-4 pb-6 text-4xl fontbold">Qui sommes-nous ?</p>
            <p class="text-xl leading-normal pb-5 fontbold">Depuis 2016, Sotoya met son expérience et son savoir-faire unique au service des professionnels du bâtiment, promoteurs, artisans poseurs, et architectes. Spécialisée dans la menuiserie aluminium et PVC nous vous accompagnons de la conception de votre projet jusqu’à la pose. Notre bureau d’études est à votre disposition pour le conseil, la réalisation de votre projet.
            </p>
            <p class="text-xl leading-normal pb-5">Nous réalisons des produits sur mesure avec un choix de matières et de couleurs variés, et le meilleur rapport qualité/prix.
                Notre entreprise aubagnaise spécialisée dans la fabrication sur-mesure de portes, fenêtres, baies coulissantes, volets et grandes menuiseries, travaille en partenariat avec des installateurs reconnus.
            </p>
            <p class="text-xl leading-normal pb-6">Sotoya assemble dans son atelier de fabrication situé à Aubagne, la gamme Aluminium SAPA du groupe. Cela est fait selon les règles de l’art, le respect des normes et la réglementation en vigueur.
                    Sotoya vous donne la possibilité de commander en ligne vos produits sur mesure d’origine française dans des délais de fabrication moindres.
            </p>
            <p class="text-xl leading-normal text-right fontbold">
                Fondateur de Sotoya
            </p>
        </div>
        <div class="text-center">
            <img class="w-full float-left maxwidth-608" src="{{ asset('images/images about@2x.png') }}"/>
        </div>
    </div>

</main>

@endsection

@section('scripts')
@endsection


@section('footer')
@include('layouts.footer')
@endsection
