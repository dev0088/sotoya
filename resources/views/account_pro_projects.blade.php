@extends('layouts.app')

@section('title')
<title>{{__('Account|Pro|Projects')}}</title>
@endsection

@section('styles')

<style>

    select {
        font-size:15px;
        font-family: 'ManRegular'
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
    .enregister-button {
        background-color: #b0b0af;
    }
    .enregister-button:hover {
        background-color: #18A75A;
    }
    .enregister-button:focus {
        background-color: #18A75A;
    }
    .maxwidth-1280 {
        max-width: 1280px;
    }

</style>

@endsection

@section('content')

<main id="main-content" class="bg-whitegreen px-8 pb-10 md:px-35 md:pb-30">

    <div>
        <div class="flex-none md:flex pt-9 pb-6 items-center">
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="/" class="text-base fontbold">Accueil</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="/account_pro" class="text-base fontbold">Mon compte professionnel</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <span class="text-base fontbold">Mes  projets enregistrés</span>
        </div>
    </div>
    
    <div class="w-full pt-4 md:pt-10 pb-4 md:pb-15 px-4 md:px-15 mb-4 shadow-md bg-white mx-auto maxwidth-1280">
        <p class="text-4xl fontbold text-center pb-11">Mes projets enregistrés</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-10 row-gap-10">
            <div>
                <p class="text-lg fontbold pb-3">Sélectionner le projet</p>
                <div class="flex relative items-center">
                    <select class="block appearance-none w-full bg-white border border-gray-300 rounded-md px-4 py-5">
                        <option class="select-item" selected>Rénovation agence Bordeaux</option>
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
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                    </div>
                </div>
            </div>
            <div>
                <p class="text-lg fontbold pb-3">Créer un nouveau projet</p>
                <div class="flex-none md:flex relative text-center md:text-left items-center">
                    <input type="text" class="w-full appearance-none pl-4 py-4 mt-0 mb-4 md:mb-0 text-base" placeholder="Nom du projet"/>
                    <button class="px-16 py-5 text-lg fontbold enregister-button mt-0 md:absolute right-0">Enregistrer</button>
                </div>
            </div>
        </div>
    
    </div>
    
    <div class="w-full pt-4 md:pt-9 pb-4 md:pb-15 px-4 md:px-15 mb-4 shadow-md bg-white mx-auto maxwidth-1280">
        <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-10 row-gap-0">
            <div class="grid grid-cols-1">
                <div class="py-6 border-b border-underline flex items-center">
                    <p class="text-lg leading-normal">Nom du projet :</p>
                    <p class="fontbold pl-4">Rénovation agence Bordeaux</p>
                </div>
                <div class="py-6 border-b border-underline flex items-center">
                    <p class="text-lg leading-normal">Nom du client :</p>
                    <p class="fontbold pl-4">Inouï Agency</p>
                </div>
                
            </div>
            <div class="grid grid-cols-1">
                <div class="py-6 border-b border-underline flex justify-between">
                    <p class="text-lg">Total du projet :</p>
                    <p class="text-lg fontbold">502,40 € HT</p>
                </div>
                <div class="py-6 border-b border-underline flex justify-between">
                    <p class="text-lg">Total avec TVA (20%) :</p>
                    <p class="text-lg fontbold">602,88 € TTC</p>
                </div>
            </div>
        </div>
        <div class="mt-4 md:mt-9 w-full items-center grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 md:col-gap-4 md:row-gap-4 col-gap-0 row-gap-4">
            <div class="lg:pr-3">
                <button class="w-full text-lg py-4 fontbold text-white bg-green">Tout commander</button>
            </div>
            <div class="lg:pl-1 lg:pr-2">
                <button class="w-full text-lg py-4 fontbold text-white bg-darkgray">Ajouter un nouveau produit</button>
            </div>
            <div class="lg:pl-2 lg:pr-1">
                <button class="w-full text-lg py-4 fontbold text-white bg-darkgray">Télécharger un devis</button>
            </div>
            <div class="lg:pl-3">
                <button class="w-full text-lg py-4 fontbold text-white bg-lightgray">Supprimer le dossier</button>
            </div>
        </div>
    
    </div>
    
    <div class="w-full grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 col-gap-4 row-gap-4 mx-auto maxwidth-1280">
        <div class="relative bg-white shadow-md">
            <svg class="absolute right-6 top-6" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20.001 19.998">
                <path id="xmark" d="M9.743,27.5a1.131,1.131,0,0,0,0,1.589,1.158,1.158,0,0,0,1.6,0l8.072-8.072,8.072,8.072a1.128,1.128,0,0,0,1.6-1.589L21.007,19.42l8.085-8.072a1.128,1.128,0,0,0-1.6-1.589l-8.072,8.072L11.345,9.759a1.123,1.123,0,0,0-1.6,0,1.142,1.142,0,0,0,0,1.589l8.072,8.072Z" transform="translate(-9.417 -9.423)" fill="#020000"/>
            </svg>
            <p class="text-2xl fontbold text-center pt-8">Enregistrement</p><br/>
            <p class="text-2xl fontbold text-center pb-6">du 19 juin 2020</p>
            <div class="flex justify-between items-center bg-whitepink h-15">
                <p class="text-lg fontbold absolute left-3 md:left-8">Prix :</p>
                <p class="text-4xl fontbold absolute right-3 md:right-8">110€</p>
            </div>
            <div class="px-3 pb-3 md:px-8 md:pb-8">
                <p class="text-base py-4">Type de menuiserie :<span class="fontbold mr-4">Fenêtre</span></p>
                <p></p>
                <hr class="w-full bg-border">
                <p class="text-base py-4">Matériau :<span class="fontbold mr-4">Aluminium</span></p>
                <hr class="w-full bg-border">
                <p class="text-base py-4">Gamme :<span class="fontbold mr-4">Gamme 70</span></p>
                <hr class="w-full bg-border">
                <p class="text-base py-4">Type d’ouverture :<span class="fontbold mr-4">Abattant</span></p>
                <hr class="w-full bg-border">
                <p class="text-base py-4">Nombre de vantaux :<span class="fontbold mr-4">1 vantail</span></p>
    
                <button class="w-full mt-6 text-lg text-white fontbold py-4 bg-darkgray">Modifier</button>
                <button class="w-full mt-4 text-lg text-white fontbold py-4 bg-green">Commander</button>
            </div>
        </div>
        <div class="relative bg-white shadow-md">
            <svg class="absolute right-6 top-6" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20.001 19.998">
                <path id="xmark" d="M9.743,27.5a1.131,1.131,0,0,0,0,1.589,1.158,1.158,0,0,0,1.6,0l8.072-8.072,8.072,8.072a1.128,1.128,0,0,0,1.6-1.589L21.007,19.42l8.085-8.072a1.128,1.128,0,0,0-1.6-1.589l-8.072,8.072L11.345,9.759a1.123,1.123,0,0,0-1.6,0,1.142,1.142,0,0,0,0,1.589l8.072,8.072Z" transform="translate(-9.417 -9.423)" fill="#020000"/>
            </svg>
            <p class="text-2xl fontbold text-center pt-8">Enregistrement</p><br/>
            <p class="text-2xl fontbold text-center pb-6">du 16 juin 2020</p>
            <div class="flex justify-between items-center bg-whitepink h-15">
                <p class="text-lg fontbold absolute left-3 md:left-8">Prix :</p>
                <p class="text-4xl fontbold absolute right-3 md:right-8">90€</p>
            </div>
            <div class="px-3 pb-3 md:px-8 md:pb-8">
                <p class="text-base py-4">Type de menuiserie :<span class="fontbold mr-4">Fenêtre</span></p>
                <hr class="w-full bg-border">
                <p class="text-base py-4">Matériau :<span class="fontbold mr-4">Aluminium</span></p>
                <hr class="w-full bg-border">
                <p class="text-base py-4">Gamme :<span class="fontbold mr-4">Gamme 70</span></p>
                <hr class="w-full bg-border">
                <p class="text-base py-4">Type d’ouverture :<span class="fontbold mr-4">Abattant</span></p>
                <hr class="w-full bg-border">
                <p class="text-base py-4">Nombre de vantaux :<span class="fontbold mr-4">1 vantail</span></p>
    
                <button class="w-full mt-6 text-lg text-white fontbold py-4 bg-darkgray">Modifier</button>
                <button class="w-full mt-4 text-lg text-white fontbold py-4 bg-green">Commander</button>
            </div>
        </div>
        <div class="relative bg-white shadow-md">
            <svg class="absolute right-6 top-6" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20.001 19.998">
                <path id="xmark" d="M9.743,27.5a1.131,1.131,0,0,0,0,1.589,1.158,1.158,0,0,0,1.6,0l8.072-8.072,8.072,8.072a1.128,1.128,0,0,0,1.6-1.589L21.007,19.42l8.085-8.072a1.128,1.128,0,0,0-1.6-1.589l-8.072,8.072L11.345,9.759a1.123,1.123,0,0,0-1.6,0,1.142,1.142,0,0,0,0,1.589l8.072,8.072Z" transform="translate(-9.417 -9.423)" fill="#020000"/>
            </svg>
            <p class="text-2xl fontbold text-center pt-8">Enregistrement</p><br/>
            <p class="text-2xl fontbold text-center pb-6">du 12 juin 2020</p>
            <div class="flex justify-between items-center bg-whitepink h-15">
                <p class="text-lg fontbold absolute left-3 md:left-8">Prix :</p>
                <p class="text-4xl fontbold absolute right-3 md:right-8">240€</p>
            </div>
            <div class="px-3 pb-3 md:px-8 md:pb-8">
                <p class="text-base py-4">Type de menuiserie :<span class="fontbold mr-4">Fenêtre</span></p>
                <hr class="w-full bg-border">
                <p class="text-base py-4">Matériau :<span class="fontbold mr-4">Aluminium</span></p>
                <hr class="w-full bg-border">
                <p class="text-base py-4">Gamme :<span class="fontbold mr-4">Gamme 70</span></p>
                <hr class="w-full bg-border">
                <p class="text-base py-4">Type d’ouverture :<span class="fontbold mr-4">Abattant</span></p>
                <hr class="w-full bg-border">
                <p class="text-base py-4">Nombre de vantaux :<span class="fontbold mr-4">1 vantail</span></p>
    
                <button class="w-full mt-6 text-lg text-white fontbold py-4 bg-darkgray">Modifier</button>
                <button class="w-full mt-4 text-lg text-white fontbold py-4 bg-green">Commander</button>
            </div>
        </div>
    
    </div>

</main>

@endsection

@section('scripts')
@endsection


@section('footer')
@include('layouts.footer')
@endsection
