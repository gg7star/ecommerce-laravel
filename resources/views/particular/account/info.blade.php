@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
<style>

    .maxwidth-1032 {
        max-width: 1032px;
    }
    .check-item > label {
        cursor: pointer;
    }
    .check-item.item-mode > label {
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

    #password {
        cursor:no-drop;
    }

</style>

@endsection

@section('content')

<main id="main-content" class="bg-whitegreen px-8 pb-10 md:px-35 md:pb-562">
    
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
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="/account_part" class="text-base fontbold">Mon compte particulier</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <span class="text-base fontbold">Mes informations personnelles</span>
        </div>
    </div>
    
    <form class="w-full px-4 md:px-15 pt-4 pb-4 md:pt-50 md:pb-10 mb-4 shadow-md bg-white mx-auto maxwidth-1032" method="post" action="{{ route('modifyinfo_part') }}">
        @csrf

        <input type="hidden" name="id" value="@if(isset($user["id"])){{$user["id"]}}@endif"/>

        <p class="text-4xl fontbold text-center pb-12 leading-normal md:leading-none">Mes informations personnelles</p>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-6 row-gap-20">
            <div class="">
                <p class="text-lg fontbold" style="padding-bottom:22px;">Civilité*</p>
                <div class="flex pb-9">
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
                            <input type="radio" class="absolute left-0 opacity-0" id="female" name="gender" value="0" @if(isset($user["gender"]) && $user["gender"] == 0) checked @endif />
                            Madame
                        </label>
                    </div>
                </div>
                <p class="text-lg fontbold" style="padding-bottom:13px;">Prénom*</p>
                <input id="firstname" name="firstname" type="text" class="w-full px-4 mb-7 bg-input text-base h-input" style="padding-top:19px; padding-bottom:18px;" placeholder="Prénom" value="@if(isset($user["firstname"])){{$user["firstname"]}}@endif"/>
                <p class="text-lg fontbold" style="padding-bottom:13px;">Nom*</p>
                <input id="lastname" name="lastname" type="text" class="w-full px-4 mb-7 bg-input text-base h-input" style="padding-top:19px; padding-bottom:18px;" placeholder="Nom" value="@if(isset($user["lastname"])){{$user["lastname"]}}@endif"/>
                <p class="text-lg fontbold" style="padding-bottom:13px;">E-mail*</p>
                <input id="email" name="email" type="text" class="w-full px-4 mb-7 bg-input text-base h-input" style="padding-top:19px; padding-bottom:18px;" placeholder="E-mail" value="@if(isset($user["email"])){{$user["email"]}}@endif"/>
                <p class="text-lg fontbold" style="padding-bottom:13px;">Mot de passe*</p>
                <input id="password" name="password" type="password" class="w-full px-4 bg-input text-base h-input" style="padding-top:19px; padding-bottom:18px;" placeholder="Mot de passe" value="" disabled/>
            </div>
            <div class="">
                <p class="text-lg fontbold" style="padding-bottom:22px;">Je suis un*</p>
                <div class="flex pb-9">
                    <div class="check-item item-mode mr-4 md:mr-9 @if(isset($user["mode"]) && $user["mode"] == 1) active @endif">
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
                    <div class="check-item item-mode mr-4 md:mr-9 @if(isset($user["mode"]) && $user["mode"] == 0) active @endif">
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
                            Particulier
                        </label>
                    </div>
                </div>
                <p class="text-lg fontbold" style="padding-bottom:13px;">Si professionnel, nom de la société</p>
                <input type="text" id="company" name="company" class="w-full px-4 mb-7 bg-input text-base h-input" style="padding-top:19px; padding-bottom:18px;" placeholder="Nom de la société" value="@if(isset($user["company"])){{$user["company"]}}@endif" disabled/>
                <p class="text-lg fontbold" style="padding-bottom:13px;">Adresse*</p>
                <input id="address" name="address" type="text" class="w-full px-4 mb-7 bg-input text-base h-input" style="padding-top:19px; padding-bottom:18px;" placeholder="Adresse" value="@if(isset($user["address"])){{$user["address"]}}@endif"/>
                <div class="w-full flex-none md:flex">
                    <div class="w-full md:w-5/12">
                        <p class="text-lg fontbold" style="padding-bottom:13px;">Code Postal*</p>
                        <input id="postcode" name="postcode" type="text" class="w-full px-4 mb-7 bg-input text-base h-input" style="padding-top:19px; padding-bottom:18px;" placeholder="Code Postal" value="@if(isset($user["postcode"])){{$user["postcode"]}}@endif"/>
                    </div>
                    <div class="w-full md:w-7/12 md:pl-6 mb-6 md:mb-0">
                        <p class="text-lg fontbold" style="padding-bottom:13px;">Ville*</p>
                        <input id="city" name="city" type="text pb-9" class="w-full px-4 mb-7 bg-input text-base h-input" style="padding-top:19px; padding-bottom:18px;" placeholder="Ville" value="@if(isset($user["city"])){{$user["city"]}}@endif"/>
                    </div>
                </div>
                <p class="text-lg fontbold" style="padding-bottom:13px;">Numéro de téléphone</p>
                <input type="text" name="telephone" class="w-full px-4 bg-input text-base h-input" style="padding-top:19px; padding-bottom:18px;" placeholder="Téléphone" value="@if(isset($user["telephone"])){{$user["telephone"]}}@endif"/>
              
            </div>
        </div>
    
        <p class="text-base pt-9" style="padding-bottom:34px;">*Champ obligatoire</p>
        <div class="w-full text-center lg:text-left">
            <button id="submit" type="submit" class="text-lg fontbold text-white px-16 register-submit-button h-input" style="padding-top:19px; padding-bottom:15px;">Enregister</button>
        </div>
    </form>

</main>

@endsection

@section('scripts')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>

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
