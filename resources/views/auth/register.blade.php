@extends('index')
@section('content')

		<!-- Intro Section -->
		<!-- Login Section -->
		<div id="login" style="margin-top:100px;" class="padding ptb-xs-40 page-signin">
			<div class="container">
				<div class="row">
                <div class="col-md-12"> 
					<div class="main-body">
						<div class="body-inner">
							<div class="card bg-white">
								<div class="card-content">
									<section class="logo text-center">
										<h2>Créer un compte</h2>
                                    </section>
                                    <x-jet-validation-errors class="mb-4" />

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
									<form class="form-horizontal ng-pristine ng-valid"method="POST" action="{{ route('register') }}">
                                        @csrf
										<fieldset>
											<div class="form-group">
												<div class="ui-input-group">
													<input type="text" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control">
													<span class="input-bar"></span>
													<label>Votre Nom</label>
												</div>
											</div>
											<div class="form-group">
												<div class="ui-input-group">
													<input class="form-control"type="email" name="email" :value="old('email')" required>
													<span class="input-bar"></span>
													<label>Votre email</label>
												</div>
                                            </div>
                                            <div class="form-group">
												<div class="ui-input-group">
													<input class="form-control" id="telephone" type="text" name="telephone" :value="old('telephone')" required>
													<span class="input-bar"></span>
													<label>Votre Telephone</label>
												</div>
											</div>
											<div class="form-group">
												<div class="ui-input-group">
													<input class="form-control" type="password" id="password" name="password" required autocomplete="new-password">
													<span class="input-bar"></span>
													<label>Votre Mot De Passe </label>
												</div>
											</div>
											<div class="form-group">
												<div class="ui-input-group">
													<input id="password_confirmation"type="password" name="password_confirmation" required autocomplete="new-password" class="form-control">
													<span class="input-bar"></span>
													<label>Confirmer Votre Mot De Passe </label>
												</div>
											</div>
											
                                        </fieldset>
                                        <div class="card-action no-border text-right">
								 <input type="submit" value="Enregistrer" class="btn btn-link">

								</div>
									</form>
								</div>
								
                            </div>
                            <div class="additional-info">
									<a href="{{ route('login') }}">Avez Vous Un compte?</a>
								</div>
						</div>
					</div>
                </div>
                </div>
			</div>
		</div>
        <!-- End Login Section -->
        @endsection