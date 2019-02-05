@extends('layout.index')
@section('content')
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Gracias por Reservar Vuelos en Agencia Guanacos</h3>
						<p>Te Proporcionaremos los mejores vuelos.</p>
					</div>
				</div>
				<div class="row row-bottom-padded-md">
					<div class="col-md-12 animate-box">
						<h2 class="heading-title">Vuelos Disponibles Para {{ $buscar->cpais }}</h2>
					</div>
					<!-- dispo -->



					<div class="col-md-12 animate-box">
					     <a href="#" class="flight-book">
							<div >
								<h2 class="p-flight">{{ $buscar->cpais }}</h2>
								<h2>{{ $dvuelos->fecha }}</h2>
								<h2>{{ $dvuelos->hora }}</h2>
							</div>
						</a>

						<a href="#" class="flight-book">
							<div class="plane-name">
								<span class="p-flight">United States Airways</span>
							</div>
							<div class="desc">
								<div class="left">
									<h4>HK-MNL</h4>
									<span>Dec 20 - Dec29</span>
								</div>
								<div class="right">
									<span class="price">
										<i class="icon-arrow-down22"></i>
										$1000
									</span>
								</div>
							</div>
						</a>
						<a href="#" class="flight-book">
							<div class="plane-name">
								<span class="p-flight">Qatar Airways</span>
							</div>
							<div class="desc">
								<div class="left">
									<h4>HK-MNL</h4>
									<span>Dec 20 - Dec29</span>
								</div>
								<div class="right">
									<span class="price">
										<i class="icon-arrow-down22"></i>
										$790
									</span>
								</div>
							</div>
						</a>
						<a href="#" class="flight-book">
							<div class="plane-name">
								<span class="p-flight">Philippine Airline</span>
							</div>
							<div class="desc">
								<div class="left">
									<h4>MNL-HK</h4>
									<span>Dec 20 - Dec29</span>
								</div>
								<div class="right">
									<span class="price">
										<i class="icon-arrow-down22"></i>
										$500
									</span>
								</div>
							</div>
						</a>
						<a href="#" class="flight-book">
							<div class="plane-name">
								<span class="p-flight">China Airways</span>
							</div>
							<div class="desc">
								<div class="left">
									<h4>HK-LAS</h4>
									<span>Dec 20 - Dec29</span>
								</div>
								<div class="right">
									<span class="price">
										<i class="icon-arrow-down22"></i>
										$900
									</span>
								</div>
							</div>
						</a>
					</div>
					<!-- text -->
						<!-- <div class="col-md-6 animate-box">
						<div class="row">
							<div class="col-md-12">
								<h4>Better Deals, More Abilities</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
							<div class="col-md-12">
								<h4>Keep up with the news of your airline</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
							<div class="col-md-12">
								<h4>In-Flight Experience</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
											</div> -->
				</div>
			</div>
		</div>


			
		 <div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="1" style="background-image: url(http://www.viajeslemans.com/web/wp-content/uploads/2017/05/chequeo.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<!-- <a href="index.html" id="main-logo">Travel</a> -->
		

								
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<p>HandCrafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></p>
									<h2>Exclusive Limited Time Offer</h2>
									<h3>Fly to Hong Kong via Los Angeles, USA</h3>
									<span class="price">$599</span>
									<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

@endsection