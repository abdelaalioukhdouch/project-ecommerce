<x-guest-layout>
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">Accueil</a></li>
            <li class="item-link"><span>Mon compte/Creation</span></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
            <div class=" main-content-area">
                <div class="wrap-login-item ">
                    <div class="register-form form-item ">
                         <x-jet-validation-errors class="mb-4" />
                        <form class="form-stl" action="{{ route('register') }}" name="frm-login" method="POST" >
                            @csrf
                            <fieldset class="wrap-title">
                                <h3 class="form-title">Créer un compte</h3>
                                <h4 class="form-subtitle">Informations personnelles</h4>
                            </fieldset>									
                            <fieldset class="wrap-input">
                                <label for="frm-reg-lname">Nom*</label>
                                <input type="text" id="frm-reg-lname" name="name" placeholder="votre nom*":value="name" required autofocus autocomplete="nom">
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-reg-email">Email*</label>
                                <input type="email" id="frm-reg-email" name="email" placeholder="Email address":value="email">
                            </fieldset>

                            <fieldset class="wrap-title">
                                <h3 class="form-title">Informations de connexion</h3>
                            </fieldset>
                            <fieldset class="wrap-input item-width-in-half left-item ">
                                <label for="frm-reg-pass">Mot de passe *</label>
                                <input type="password" id="frm-reg-pass" name="password" placeholder="Mot de passe" required autocomplete="new-password">
                            </fieldset>
                            <fieldset class="wrap-input item-width-in-half ">
                                <label for="frm-reg-cfpass">Entrez le mot de passe à nouveau *</label>
                                <input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="Confirmation de mot de passe" required autocomplete="new-password">
                            </fieldset>
                            <input type="submit" class="btn btn-sign" value="Créer mon compte" name="Register">
                        </form>
                    </div>											
                </div>
            </div><!--end main products area-->		
        </div>
    </div><!--end row-->

</div><!--end container-->

</main>
</x-guest-layout>

