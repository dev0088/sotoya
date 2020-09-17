@extends('layouts.app')

@section('title')
<title>{{__('Account|Pro|Info')}}</title>
@endsection

@section('styles')
<style>

    .maxwidth-1032 {
        max-width: 1032px;
    }

    .check-item {
        cursor: pointer;
    }
    .check-item > label {
        cursor: no-drop;
    }

    .check-item.active > label > div > svg.checked {
        display: block;
    }

    .check-item.active > label > div >svg.unchecked {
        display: none;
    }

    .check-item > label > div > svg.checked {
        display: none;
    }

    .check-item > label > div > svg.unchecked {
        display: block;
    }

    button.register-submit-button.active {
        background-color: #18A75A;
    }
    button.register-submit-button {
        background-color:#b0b0af;
    }

</style>

@endsection

@section('content')

<main id="main-content" class="bg-whitegreen px-8 pb-10 md:px-35 md:pb-562">

    <div>
        <div class="flex-none md:flex items-center" style="padding-top:39px; padding-bottom:26px;">
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
            <span class="text-base fontbold">Mes informations personnelles</span>
        </div>
    </div>
    
    <form class="w-full px-4 md:px-15 py-4 md:py-10 mb-4 shadow-md bg-white mx-auto maxwidth-1032" method="post" action="{{ route('modifyinfo_pro') }}">
        @csrf

        <input type="hidden" name="id" value="@if(isset($user["id"])){{$user["id"]}}@endif"/>

        <p class="text-4xl fontbold text-center pb-11">Mes informations personnelles</p>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-6 row-gap-20">
            <div class="">
                <p class="text-xl pb-7 fontbold">Civilité*</p>
                <div class="flex pb-8">
                    <div class="check-item mr-4 md:mr-9 @if(isset($user["gender"]) && $user["gender"] == 1) active @endif">
                        <label class="text-base flex items-center">
                            <div class="mr-4">
                                <svg class="checked" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
     	                        <g id="radio-button-on">
                                    <path style="fill:#18A75A" d="M255,127.5c-71.4,0-127.5,56.1-127.5,127.5c0,71.4,56.1,127.5,127.5,127.5c71.4,0,127.5-56.1,127.5-127.5 C382.5,183.6,326.4,127.5,255,127.5z M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204S367.2,459,255,459z"/>
                                </g>
                                </svg>
                                <svg class="unchecked hidden" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	width="24px" height="24px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#a3a3a3;" d="M255.832,48.032c114.859,0.096,207.896,93.277,207.8,208.137s-93.277,207.896-208.137,207.8	C140.7,463.872,47.695,370.795,47.695,256C47.871,141.149,140.981,48.112,255.832,48.032 M255.832,0 C114.443,0.096-0.096,114.779,0,256.168S114.779,512.096,256.168,512C397.485,511.904,512,397.317,512,256	C511.952,114.571,397.261-0.048,255.832,0z"/>
                                </svg>
                            </div>
                            <input type="radio" class="absolute left-0 opacity-0" id="male" name="gender" value="1" @if(isset($user["gender"]) && $user["gender"] == 1) checked @endif />
                            Monsieur
                        </label>
                    </div>
                    <div class="check-item mr-9 @if(isset($user["gender"]) && $user["gender"] == 0) active @endif">
                        <label  class="text-base flex items-center">
                            <div class="mr-4">
                                <svg class="checked" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
     	                        <g id="radio-button-on">
                                    <path style="fill:#18A75A" d="M255,127.5c-71.4,0-127.5,56.1-127.5,127.5c0,71.4,56.1,127.5,127.5,127.5c71.4,0,127.5-56.1,127.5-127.5 C382.5,183.6,326.4,127.5,255,127.5z M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204S367.2,459,255,459z"/>
                                </g>
                                </svg>
                                <svg class="unchecked hidden" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	width="24px" height="24px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#a3a3a3;" d="M255.832,48.032c114.859,0.096,207.896,93.277,207.8,208.137s-93.277,207.896-208.137,207.8	C140.7,463.872,47.695,370.795,47.695,256C47.871,141.149,140.981,48.112,255.832,48.032 M255.832,0 C114.443,0.096-0.096,114.779,0,256.168S114.779,512.096,256.168,512C397.485,511.904,512,397.317,512,256	C511.952,114.571,397.261-0.048,255.832,0z"/>
                                </svg>
                            </div>
                            <input type="radio" class="absolute left-0 opacity-0" id="female" name="gender" value="0" @if(isset($user["gender"]) && $user["gender"] == 0) checked @endif />
                            Madame
                        </label>
                    </div>
                </div>
                <p class="text-xl pb-3 fontbold">Prénom*</p>
                <input id="firstname" name="firstname" type="text" class="w-full p-4 mb-6 bg-input" placeholder="Prénom" value="@if(isset($user["firstname"])){{$user["firstname"]}}@endif" required/>
                <p class="text-xl pb-3 fontbold">Nom*</p>
                <input id="lastname" name="lastname" type="text pb-9" class="w-full p-4 mb-6 bg-input" placeholder="Nom" value="@if(isset($user["lastname"])){{$user["lastname"]}}@endif" required/>
                <p class="text-xl pb-3 fontbold">E-mail*</p>
                <input id="email" name="email" type="text pb-9" class="w-full p-4 mb-6 bg-input" placeholder="E-mail" value="@if(isset($user["email"])){{$user["email"]}}@endif" required/>
                <p class="text-xl pb-3 fontbold">Mot de passe*</p>
    
                <div class="input-group">
                    <input id="password" name="password" type="password" class="form-control bg-input" placeholder="Mot de passe" value="" disabled/>
                    <div class="form-control-after" class="cursor-pointer">
                        <svg id="eye_fill" class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" class="" width="25.515" height="16" viewBox="0 0 25.515 16">
                            <path d="M12.762,27.286c7.539,0,12.753-6.1,12.753-8s-5.224-8-12.753-8C5.28,11.286,0,17.376,0,19.286S5.318,27.286,12.762,27.286Zm0-2.758a5.274,5.274,0,0,1-5.271-5.242,5.266,5.266,0,0,1,10.532,0A5.266,5.266,0,0,1,12.762,24.529Zm0-3.351a1.9,1.9,0,1,0-1.92-1.892A1.914,1.914,0,0,0,12.762,21.178Z" transform="translate(0 -11.286)" fill="#3b3b3a" opacity="0.596"/>
                        </svg>
                        <svg id="eye_slash_fill" class="cursor-pointer hidden" xmlns="http://www.w3.org/2000/svg" width="25.52" height="16.939" viewBox="0 0 25.52 16.939">
                            <path d="M20.028,27.346a.715.715,0,0,0,1.224-.5.724.724,0,0,0-.213-.51L5.52,10.824a.715.715,0,0,0-.51-.2.738.738,0,0,0-.714.7.685.685,0,0,0,.2.51Zm.872-2.625c2.913-1.883,4.62-4.332,4.62-5.418,0-1.883-5.148-7.885-12.755-7.885a14.059,14.059,0,0,0-4.406.714l2.421,2.412a5,5,0,0,1,1.985-.408A5.143,5.143,0,0,1,17.95,19.3a4.532,4.532,0,0,1-.436,1.976Zm-8.136,2.468a14.306,14.306,0,0,0,4.74-.807l-2.458-2.458a4.933,4.933,0,0,1-2.282.547A5.192,5.192,0,0,1,7.57,19.3a5.116,5.116,0,0,1,.547-2.319L4.889,13.737C1.828,15.62,0,18.19,0,19.3,0,21.177,5.241,27.188,12.765,27.188Zm2.95-8.08a2.938,2.938,0,0,0-2.95-2.941c-.121,0-.241.009-.352.019L15.7,19.47C15.705,19.359,15.715,19.229,15.715,19.108ZM9.805,19.09a2.967,2.967,0,0,0,2.969,2.95c.13,0,.25-.009.38-.019l-3.33-3.33C9.815,18.821,9.805,18.96,9.805,19.09Z" transform="translate(0 -10.62)" fill="#3b3b3a" opacity="0.596"/>
                        </svg>          
                    </div>
                </div>
    
            </div>
            <div class="">
                <p class="text-xl pb-7 fontbold">Je suis un*</p>
                <div class="flex pb-8">
                    <div class="check-item mr-4 md:mr-9 @if(isset($user["mode"]) && $user["mode"] == 1) active @endif">
                        <label class="text-base flex items-center">
                            <div class="mr-4">
                                <svg class="checked" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
     	                        <g id="radio-button-on">
                                    <path style="fill:#18A75A" d="M255,127.5c-71.4,0-127.5,56.1-127.5,127.5c0,71.4,56.1,127.5,127.5,127.5c71.4,0,127.5-56.1,127.5-127.5 C382.5,183.6,326.4,127.5,255,127.5z M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204S367.2,459,255,459z"/>
                                </g>
                                </svg>
                                <svg class="unchecked hidden" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	width="24px" height="24px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#a3a3a3;" d="M255.832,48.032c114.859,0.096,207.896,93.277,207.8,208.137s-93.277,207.896-208.137,207.8	C140.7,463.872,47.695,370.795,47.695,256C47.871,141.149,140.981,48.112,255.832,48.032 M255.832,0 C114.443,0.096-0.096,114.779,0,256.168S114.779,512.096,256.168,512C397.485,511.904,512,397.317,512,256	C511.952,114.571,397.261-0.048,255.832,0z"/>
                                </svg>
                            </div>
                            Professionnel
                        </label>
                    </div>
                    <div class="check-item mr-9 @if(isset($user["mode"]) && $user["mode"] == 0) active @endif">
                        <label class="text-base flex items-center">
                            <div class="mr-4">
                                <svg class="checked" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
     	                        <g id="radio-button-on">
                                    <path style="fill:#18A75A" d="M255,127.5c-71.4,0-127.5,56.1-127.5,127.5c0,71.4,56.1,127.5,127.5,127.5c71.4,0,127.5-56.1,127.5-127.5 C382.5,183.6,326.4,127.5,255,127.5z M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204S367.2,459,255,459z"/>
                                </g>
                                </svg>
                                <svg class="unchecked hidden" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	width="24px" height="24px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#a3a3a3;" d="M255.832,48.032c114.859,0.096,207.896,93.277,207.8,208.137s-93.277,207.896-208.137,207.8	C140.7,463.872,47.695,370.795,47.695,256C47.871,141.149,140.981,48.112,255.832,48.032 M255.832,0 C114.443,0.096-0.096,114.779,0,256.168S114.779,512.096,256.168,512C397.485,511.904,512,397.317,512,256	C511.952,114.571,397.261-0.048,255.832,0z"/>
                                </svg>  
                            </div>
                            Particulier
                        </label>
                    </div>
                </div>
                <p class="text-xl pb-3 fontbold">Si professionnel, nom de la société</p>
                <input type="text" class="w-full p-4 mb-6 bg-input" placeholder="Nom de la société" value="@if(isset($user["company"])){{$user["company"]}}@endif"/>
                <p class="text-xl pb-3 fontbold">Adresse*</p>
                <input id="address" name="address" type="text" class="w-full p-4 mb-6 bg-input" placeholder="Adresse" value="@if(isset($user["address"])){{$user["address"]}}@endif" required/>
                <div class="w-full flex-none md:flex">
                    <div class="w-full md:w-5/12">
                        <p class="text-xl pt-0 pb-3 fontbold">Code Postal*</p>
                        <input id="postcode" name="postcode" type="text" class="w-full p-4 mb-6 bg-input" placeholder="Code Postal" value="@if(isset($user["postcode"])){{$user["postcode"]}}@endif" required/>
                    </div>
                    <div class="w-full md:w-7/12 md:pl-6 mb-6 md:mb-0">
                        <p class="text-xl pt-0 pb-3 fontbold">Ville*</p>
                        <input id="city" name="city" type="text pb-9" class="w-full p-4 bg-input" placeholder="Ville" value="@if(isset($user["city"])){{$user["city"]}}@endif" required/>
                    </div>
                </div>
                <p class="text-xl pt-0 pb-3 fontbold">Numéro de téléphone</p>
                <input type="text" name="telephone" class="w-full p-4 bg-input" placeholder="Téléphone" value="@if(isset($user["telephone"])){{$user["telephone"]}}@endif"/>
              
            </div>
        </div>
    
        <p class="text-base py-8">*Champ obligatoire</p>
        <div class="w-full text-center lg:text-left">
            <button id="submit" type="submit" class="text-lg fontbold text-white px-16 py-4 register-submit-button">Enregister</button>
        </div>
    </form>

</main>

@endsection

@section('scripts')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>

    $("#eye_fill").click(function() {
        $(this).hide();
        $("#eye_slash_fill").show();
        $("#password").attr("type", "text");
    });
    $("#eye_slash_fill").click(function() {
        $(this).hide();
        $("#eye_fill").show();
        $("#password").attr("type", "password");
    });
    $("input:radio").click(function() {

        console.log($("#pro").is(":checked"));

        if($("#pro").is(":checked")) {
            $("#company").prop("disabled", false);
        } else {
            $("#company").prop("disabled", true);
        }

        if(!$(this).parent().parent().hasClass("active")) {

            $(this).parent().parent().toggleClass("active");
            $(this).parent().parent().siblings().toggleClass("active");

        }

    });

    $(function() {
        validateForm();
    })
    $("#firstname").keyup(function() {
        validateForm();
    });
    $("#lastname").keyup(function() {
        validateForm();
    });
    $("#email").keyup(function() {
        validateForm();
    });
    $("#address").keyup(function() {
        validateForm();
    });
    $("#postcode").keyup(function() {
        validateForm();
    });
    $("#city").keyup(function() {
        validateForm();
    });

    function validateForm() {

        var email = $("#email").val();
        var submit = $("button#submit");
        var valid = true;

        if (email.indexOf('@') == -1) {
            valid = false;
        } else {
            var parts = email.split('@');
            var domain = parts[1];

            if (domain.indexOf('.') == -1) {
                valid = false;
            } else {
                var domainParts = domain.split('.');
                var ext = domainParts[1];

                if (ext.length > 4 || ext.length < 2) {
                    valid = false;
                }
            }

        }

        if(valid && $("#firstname").val().length != 0 && $("#lastname").val().length != 0 && $("#address").val().length != 0&& $("#postcode").val().length != 0&& $("#city").val().length != 0) {
            console.log("Yes");
            if(!submit.hasClass("active")) {
                submit.addClass("active");
                submit.attr("type", "submit");
            }

        } else {
            console.log("No");
            if(submit.hasClass("active")) {
                submit.removeClass("active");
                submit.attr("type", "button");
            }
        }

    }

</script>
@endsection


@section('footer')
@include('layouts.footer')
@endsection
