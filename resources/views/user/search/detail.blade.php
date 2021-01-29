@extends('include.master')
@section('title','search detail')
@section('content')


	<section class="large-section-padding bg-grey">
		<div class="container">
			<div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<h2 class="align-center">{{$domain_info->domain}}</h2>
					<div class="card">
                        <div class="card-header">
                            <i class="material-icons" style="font-size:37px;">language</i>
                            <span style="font-size:30px;"><b>Domain Information</b></span>
                        </div>
                        
                            <table class="table--style3" style="position: relative;">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Domain:</td>
                                    <td>{{$domain_info->domain}}</td>
                                </tr>
                                <tr>
                                    <td>Registered On:</td>
                                    <td>{{$domain_info->creation_date}}</td>
                                </tr>
                                <tr>
                                    <td>Expires On:</td>
                                    <td>{{$domain_info->experation_date}}</td>
                                </tr>
                                <tr>
                                    <td>Status:</td>
                                    <td>{{$domain_info->status}}</td>
                                </tr>
                                </tbody>
                            </table>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <i class="material-icons" style="font-size:37px;">contacts</i>
                            <span style="font-size:30px;"><b>Registrant Contact</b></span>
                        </div>
                        
                            <table class="table--style3" style="position: relative;">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td>{{$domain_info->name}}</td>
                                </tr>
                                <tr>
                                    <td>City:</td>
                                    <td>{{$domain_info->city}}</td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td>{{$domain_info->address}}</td>
                                </tr>
                                <tr>
                                    <td>State:</td>
                                    <td>{{$domain_info->state}}</td>
                                </tr>
                                <tr>
                                    <td>Zip Code:</td>
                                    <td>{{$domain_info->zip}}</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>{{$domain_info->email}}</td>
                                </tr>
                                </tbody>
                            </table>
                    </div>
                    
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                    <h2 class="align-center">Relative Domains</h2>
					<table class="table--style3 mt-5">
						<thead>
						<tr>
							<th></th>
							<th></th>
						</tr>
						</thead>
						<tbody>
						    
						    @foreach($project as $temp)
    						<tr>
    							<td>{{$temp->domain}}</td>
    							<td>
    							 @if($temp->name)
    							    <a href="{{route('register_info', [$temp->id, $domain])}}" class="crumina-button button--lime button--xs button--bordered w-100" style="color:deeppink;">Who Is?</a>
    							    @else
    							    <a href="#" class="crumina-button button--lime button--xs button--bordered w-100">Order Now</a>
    							    @endif
    							</td>
    						</tr>
    						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>

	<section class="large-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ml-auto mr-auto mb-5 align-center">
					<h2>3 TIPS TO FIND THE IDEAL DOMAIN NAME</h2>
					<p class="fs-18 fw-medium">Volutpat est velit egestas dui id ornare arcu odio ut. Gravida in fermentum et sollicitudin ac orci. Massa ultricies mi quis hendrerit.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="crumina-module crumina-info-box info-box--with-number">

						<div class="info-box-title">1</div>

						<div class="info-box-content">
							<p class="info-box-text">Sollicitudin ac orci phasellus egestas. Urna nunc id cursus metus aliquam eleifend. Neque vitae tempus quam pellentesque volutpat.</p>
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="crumina-module crumina-info-box info-box--with-number">

						<div class="info-box-title">2</div>

						<div class="info-box-content">
							<p class="info-box-text">Sollicitudin ac orci phasellus egestas. Urna nunc id cursus metus aliquam eleifend. Neque vitae tempus quam pellentesque volutpat.</p>
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="crumina-module crumina-info-box info-box--with-number">

						<div class="info-box-title">3</div>

						<div class="info-box-content">
							<p class="info-box-text">Sollicitudin ac orci phasellus egestas. Urna nunc id cursus metus aliquam eleifend. Neque vitae tempus quam pellentesque volutpat.</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="large-section-padding section-bg3">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 align-center ml-auto mr-auto">


						<img class="mb-4 "  loading="lazy" src="img/demo-content/icons/info-icon20.png" alt="domain">

					<h2>DOMAIN TRANSFERS MADE EASY</h2>
					<p class="fs-18 fw-medium text-white">Purus gravida quis blandit turpis cursus in hac. Sollicitudin aliquam ultrices sagittis orci a scelerisque. Quisque egestas diam in arcu cursus euismod.</p>
					<a href="13_knowledge_base_domain_article_details.html" class="crumina-button button--dark button--l mt-4">TRANSFER YOUR DOMAIN RIGHT NOW!</a>
				</div>
			</div>
		</div>
	</section>

	<section class="large-section-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">


						<img   loading="lazy" src="img/demo-content/images/image11.png" alt="domain">

				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
					<h2>WHY REGISTER A DOMAIN WITH HOSTSIGHT</h2>
					<div class="row mt-5">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
							<div class="crumina-module crumina-info-box info-box--standard">

								<div class="info-box-thumb">


										<img   loading="lazy" src="img/demo-content/icons/info-icon21.png" alt="icon">

								</div>

								<div class="info-box-content">
									<a href="12_knowledge_base_domain_articles.html" class="h5 info-box-title">Domain Renewal</a>
									<p class="info-box-text">Urna nunc id cursus metus aliquam eleifend. Neque vitae tempus quam pellentesque. Volutpat odio facilisis mauris sit amet massa vitae.</p>
								</div>

							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="crumina-module crumina-info-box info-box--standard">

								<div class="info-box-thumb">


										<img   loading="lazy" src="img/demo-content/icons/info-icon22.png" alt="icon">

								</div>

								<div class="info-box-content">
									<a href="12_knowledge_base_domain_articles.html" class="h5 info-box-title">Domain Locking</a>
									<p class="info-box-text">Egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla condimentum lacinia quis vel eros donec ac odio.</p>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="small-section-padding section-bg5">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 m-auto">
					<div class="crumina-module crumina-info-box info-box--inline">
						<div class="info-box-thumb">


								<img   loading="lazy" src="img/demo-content/icons/info-icon23.png" alt="icon">

						</div>
						<div class="info-box-content">
							<h4 class="info-box-title text-white">Domain Privacy Protection</h4>
							<p class="info-box-text">Quisque egestas diam in arcu cursus euismod. Lectus urna duis convallis convallis tellus. Sagittis orci a scelerisque purus.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection