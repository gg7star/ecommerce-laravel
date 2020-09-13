@extends('layouts.app')

@section('title')
<title>{{__('Sign In')}}</title>
@endsection

@section('styles')
<style>

    button.connection-submit-button.active {
        background-color: #18A75A;
    }
    button.connection-submit-button {
        background-color:#b0b0af;
    }
    .maxwidth-508 {
        max-width: 508px;
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
            <span class="text-base fontbold">S’inscrire</span>
        </div>
    </div>
    
    <form class="w-full bg-white px-4 md:px-8 py-6 md:py-10 mx-auto shadow-md maxwidth-508" method="post" action="/signin">
        @csrf
        <p class="text-4xl text-center pb-10 fontbold">Se connecter</p>
        <p class="text-xl pt-0 pb-3 fontbold">E-mail*</p>
        <input id="email" type="email" class="w-full p-4 focus:outline-none bg-input" placeholder="E-mail" required/>
        <p class="text-xl pt-6 pb-3 fontbold">Mot de passe*</p>
        <div class="input-group m-0 p-0">
            <input id="password" type="password" class="form-control bg-input" placeholder="Mot de passe" required/>
            <div class="form-control-after cursor-pointer">
                <svg id="eye_fill" xmlns="http://www.w3.org/2000/svg" class="" width="25.515" height="16" viewBox="0 0 25.515 16">
                    <path d="M12.762,27.286c7.539,0,12.753-6.1,12.753-8s-5.224-8-12.753-8C5.28,11.286,0,17.376,0,19.286S5.318,27.286,12.762,27.286Zm0-2.758a5.274,5.274,0,0,1-5.271-5.242,5.266,5.266,0,0,1,10.532,0A5.266,5.266,0,0,1,12.762,24.529Zm0-3.351a1.9,1.9,0,1,0-1.92-1.892A1.914,1.914,0,0,0,12.762,21.178Z" transform="translate(0 -11.286)" fill="#3b3b3a" opacity="0.596"/>
                </svg>
                <svg class="hidden" id="eye_slash_fill" xmlns="http://www.w3.org/2000/svg" width="25.52" height="16.939" viewBox="0 0 25.52 16.939">
                    <path d="M20.028,27.346a.715.715,0,0,0,1.224-.5.724.724,0,0,0-.213-.51L5.52,10.824a.715.715,0,0,0-.51-.2.738.738,0,0,0-.714.7.685.685,0,0,0,.2.51Zm.872-2.625c2.913-1.883,4.62-4.332,4.62-5.418,0-1.883-5.148-7.885-12.755-7.885a14.059,14.059,0,0,0-4.406.714l2.421,2.412a5,5,0,0,1,1.985-.408A5.143,5.143,0,0,1,17.95,19.3a4.532,4.532,0,0,1-.436,1.976Zm-8.136,2.468a14.306,14.306,0,0,0,4.74-.807l-2.458-2.458a4.933,4.933,0,0,1-2.282.547A5.192,5.192,0,0,1,7.57,19.3a5.116,5.116,0,0,1,.547-2.319L4.889,13.737C1.828,15.62,0,18.19,0,19.3,0,21.177,5.241,27.188,12.765,27.188Zm2.95-8.08a2.938,2.938,0,0,0-2.95-2.941c-.121,0-.241.009-.352.019L15.7,19.47C15.705,19.359,15.715,19.229,15.715,19.108ZM9.805,19.09a2.967,2.967,0,0,0,2.969,2.95c.13,0,.25-.009.38-.019l-3.33-3.33C9.815,18.821,9.805,18.96,9.805,19.09Z" transform="translate(0 -10.62)" fill="#3b3b3a" opacity="0.596"/>
                </svg>               
            </div>
        </div>
        <p class="text-base py-8 text-green cursor-pointer">Mot de passe oublié ?</p>
        <div class="w-full text-center md:text-left">
            <button type="submit" class="px-15 py-4 text-white connection-submit-button fontbold">Se connecter</button> 
        </div>
    </form>
    
    <div class="pt-8 text-center" style="">
        <span class="text-lg pr-3">Pas encore de compte ?</span>
        <a href="/signup"><span class="text-lg fontbold cursor-pointer fontbold text-green border-b-2 border-green">S’inscrire</span></a>
    </div>

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

    $(function() {
        validateForm();
    })

    $("#email").keyup(function() {
        validateForm();
    });
    
    $("#password").keyup(function() {
        validateForm();
    });

    function validateForm() {

        var email = $("#email").val();
        var submit = $("button:submit");

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

        if(valid && $("#password").val().length != 0) {
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
    }

</script>
@endsection


@section('footer')
@include('layouts.footer')
@endsection