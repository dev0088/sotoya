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
        max-width: 692px;
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


</style>

@endsection

@section('content')

<main id="main-content" class="bg-whitegreen w-full px-8 pb-10 md:px-20 md:pb-30">

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
        <div class="mt-4 md:mt-9 w-full items-center grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 md:col-gap-4 xl:col-gap-0 md:row-gap-4 col-gap-0 row-gap-4">
            <div class="xl:pr-3">
                <button class="w-full text-lg py-4 fontbold text-white bg-green tracking-tighter">Tout commander</button>
            </div>
            <div class="xl:pl-1 xl:pr-2">
                <button class="w-full text-lg py-4 fontbold text-white bg-darkgray tracking-tighter">Ajouter un nouveau produit</button>
            </div>
            <div class="xl:pl-2 xl:pr-1">
                <button class="w-full text-lg py-4 fontbold text-white bg-darkgray tracking-tighter">Télécharger un devis</button>
            </div>
            <div class="xl:pl-3">
                <button id="delete-trigger-button" class="w-full text-lg py-4 fontbold text-white bg-darkgray tracking-tighter">Supprimer le dossier</button>
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

    <div id="delete-modal" class="modal mx-auto z-50">
    
        <div class="modal-content relative p-8 md:p-15">
    
            <span class="absolute top-4 md:top-8 right-4 md:right-8 text-4xl close">
                <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.998" viewBox="0 0 20.001 19.998">
                    <path id="xmark" d="M9.743,27.5a1.131,1.131,0,0,0,0,1.589,1.158,1.158,0,0,0,1.6,0l8.072-8.072,8.072,8.072a1.128,1.128,0,0,0,1.6-1.589L21.007,19.42l8.085-8.072a1.128,1.128,0,0,0-1.6-1.589l-8.072,8.072L11.345,9.759a1.123,1.123,0,0,0-1.6,0,1.142,1.142,0,0,0,0,1.589l8.072,8.072Z" transform="translate(-9.417 -9.423)" fill="#020000"/>
                </svg>              
            </span>
    
            <p class="text-4xl text-black fontbold text-center pt-2">Supprimer le projet</p>

            <p class="text-lg text-center pt-8">Vous ne pourrez pas le récupérer.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 col-gap-4 pt-4 md:pt-10">
                <a class="w-full bg-darkgray text-white text-center" style="padding-top:19px; padding-bottom:15px">Annuler</a>
                <a class="w-full bg-green text-white text-center" style="padding-top:19px; padding-bottom:15px">Supprimer</a>
            </div>
    
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 col-gap-5 row-gap-4 pt-4 md:pt-10">
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
            </div> --}}
        </div>
    
    </div>

</main>

@endsection

@section('scripts')
<script>

    var modal = document.getElementById("delete-modal");
    var btn = document.getElementById("delete-trigger-button");
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
