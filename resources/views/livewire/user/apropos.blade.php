@extends('index')
@section('content') 
<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="About"><span>A PROPOS NOUS</span></h1>
						<div class="page-breadcrumb">
							<a href="{{url('/')}}">ACCEUIL</a>&nbsp;&nbsp;>>&nbsp;&nbsp; <span>A PROPOS NOUS</span>
						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- Intro Section End-->

		<!-- About Section -->
		<div id="about-section" class="padding pt-xs-40">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-8">
						<div class="block-title v-line">
							<h2><span>Notre</span> MISSION</h2>
							<p class="italic">
								Bienvenue  au Allo Tapis ElJadida
							</p>
						</div>
						<div class="text-content">
							<p>
                            Allo Tapis ElJadida est une société de Multiservice au maroc , Allo Tapis est spécialisée dans le nettoyage général.

L’entretien , la sécurité et l’hygiène de vos produits. Notre société est au service des entreprises, commerçants, syndics et particuliers dans le cadre de prestations ponctuelles ou régulières.
<ul>
    <li>Nous offrons nos services en semaine, week-end et jours fériés.
</li>
    <li>Nous répondons à vos demandes dans les plus brefs délais.
</li>
    <li>Le personnel est formé afin d’effectuer des prestations de qualité tout en respectant l’environnement.
</li>
    <li>Nous établissons un suivi qualitatif journalier à l’aide du cahier de liaison, où toutes les remarques faites par nos clients ou l’intervenant sont réglées au cas par cas dans les plus brefs délais.
</li>
</ul>

                            </p>
						</div>
						<hr class="divider">
						<div class="post-content">
							<div class="post-img">
								<img class="img-responsive" src="assets/images/blog.jpg" alt="Photo">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="dark-bg our-vision light-color padding-40">
							<div class="block-title">
								<h2 class="italic"><span>Notre</span> VISION</h2>
								<p class="italic">
								Mieux répondre aux exigences de terrain des clients, nécessite un équipe bien expérimenté
                                En ce basons sur un échange continu avec nos clients (mises au point fréquentes, comptes rendus de réunion systématiques, traçabilité de contrôle de qualité,…) en vous proposant un service de qualité.

Aux demandes et éventuelles réclamations de nos clients.notre rédaction soit toujours immédiate et réactivité
                             
                            </p>
							</div>
							<p>
				
   </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- About Section End-->
		<!-- Story Section -->
	
		<!-- Mission Section -->
		
		<!-- Partner Section -->
		<div id="partner-section" class="ptb ptb-xs-60">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="block-title v-line mb-35 ">
							<h2><span>Nos</span> Partenaires</h2>
							<p class="italic">
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 ">
						<ul class="logo-group">
							@foreach($partner as $ls)
							<li class="partner-logo border-b">
								<img src="{{ asset('/'.$ls->image) }}" alt="">
							</li>
							@endforeach	
						</ul>
					</div>
				</div>
			</div>
		</div>
		 
@endsection