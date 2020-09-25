@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
<style>

    .maxwidth-676 {
        max-width:676px;
    }
    .email-send {
        background-color: #b0b0af
    }
    .email-send.active {
        background-color: #18A75A;
    }

</style>

@endsection

@section('content')

<main id="main-content" class="bg-whitegreen px-8 pb-10 md:px-35 md:pb-30">

    <div>
        <div class="flex-none md:flex items-center pt-39 pb-26">
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="/" class="text-base fontbold">Accueil</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <span class="text-base fontbold">Contact</span>
        </div>
    </div>
    
    <form class="w-full mx-auto maxwidth-676" method="post" action="/mailsend">
        @csrf
        <p class="text-4xl fontbold pt-4 md:pt-10 pb-8 md:pb-15">Contactez-nous</p>
        <div class="p-4 md:p-8 bg-white shadow-md" style="padding-top:37px;">
            <p class="text-lg fontbold pb-3">Sujet</p>
            <input id="subject" name="subject" type="text" class="w-full appearance-none text-base px-4 bg-input h-input" style="padding-top:19px; padding-bottom:18px;" placeholder="Sujet de votre demande" required/>
            <p class="text-lg fontbold pt-7 pb-3">E-mail</p>
            <input id="email" name="email" type="email" class="w-full appearance-none text-base px-4 bg-input h-input" style="padding-top:19px; padding-bottom:18px;" placeholder="Adresse e-mail" required/>
            <p class="text-lg fontbold pt-7 pb-3">Message</p>
            <textarea id="comment" name="message" class="w-full appearance-none text-base p-4 bg-input" style="height:156px;" placeholder="Comment peut-on vous aider ?" required></textarea>
    
            <p id="beforetext" class="text-base pt-9" style="padding-bottom:34px;">Veuillez remplir tous les champs du formulaire</p>
            <p id="aftertext" class="hidden text-base pt-9 pb-20">Merci pour votre message, nous y répondrons dans les plus brefs délais.</p>

            <div class="w-full text-center md:text-left">
                <button type="submit" class="px-20 py-4 text-white text-lg fontbold bg-lightlightgray email-send h-input" style="padding-top:19px; padding-bottom:15px;">Envoyer</button>
            </div>
        </div>
    </form>

</main>

@endsection

@section('scripts')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>

    $(function() {
        validateForm();
    })

    $("#subject").keyup(function() {
        validateForm();
    });

    $("#email").keyup(function() {
        validateForm();
    });
    
    $("#comment").keyup(function() {
        validateForm();
        
    });

    function validateForm() {

        var email = $("#email").val();
        var submit = $("button.email-send");

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
        console.log($("#comment").val());

        if(valid && $("#subject").val().length != 0 && $("#comment").val() != "") {
            console.log("Yes");
            if(!submit.hasClass("active")) {
                submit.addClass("active");
            }

        } else {
            console.log("No");
            if(submit.hasClass("active")) {
                submit.removeClass("active");
            }
        }

        if($("#comment").val() != "") {
            $("#comment").addClass("border-b border-gray-400");
        } else {
            $("#comment").removeClass("border-b border-gray-400");
        }
    }
    $("button.email-send").click(function() {

        if($(this).hasClass("active")) {

            $(this).hide();

            $("#beforetext").hide();
            $("#aftertext").show();

        } else {
            alert();
        }

    });
</script>

@endsection


@section('footer')
@include('layouts.footer')
@endsection
