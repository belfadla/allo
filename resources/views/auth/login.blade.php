@extends('index')
@section('content')
<!-- Intro Section -->

        <!-- Intro Section -->
      

    <!-- Login Section -->
    <div id="login" style="margin-top:100px;"class="padding ptb-xs-40 page-signin">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-body">
							<div class="body-inner">
								<div class="card bg-white">
									<div class="card-content">
										<section class="logo text-center">
											<h2>Se connecter</h2>
                                        </section>
                                        <x-jet-validation-errors class="mb-4" />

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
										<form class="form-horizontal ng-pristine ng-valid"method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <fieldset>
                                               
												<div class="form-group">
													<div class="ui-input-group">
														<input type="text"  class="form-control"id="email" type="email" name="email" :value="old('email')" required autofocus/>
														<span class="input-bar"></span>
														<label for="email" value="{{ __('Email') }}">Email</label>
													</div>
												</div>
												<div class="form-group">
													<div class="ui-input-group">
														<input type="password" id="password"  type="password" name="password" required autocomplete="current-password"class="form-control"/>
														<span class="input-bar"></span>
														<label for="password" value="{{ __('Mot De Passe') }}">Mot De Passe</label>
													</div>
												</div>
                                            </fieldset>
                                            <div class="card-action no-border text-right">
                                           <input type="submit" value="Se connecter" class="btn btn-link">
                                       
									         </div>
										</form>
									</div>
									
								</div>
								<div class="additional-info">
									<a href="{{ route('register') }}">Créer un compte</a><span class="divider-h"></span><a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- End Login Section -->
        @endsection