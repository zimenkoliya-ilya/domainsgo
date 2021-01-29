@extends('include.master')
@section('title','account')
@section('content')


<div class="main-content-wrapper">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" style="margin-top:90px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{$message}}</strong> 
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{$message}}</strong>
        </div>
    @endif
    @if(auth()->user())
        @if(auth()->user()->address)
        @else
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <a href="{{ route('account.profile')}}"><strong style="color:#721c24;">You have to complete your profile.</strong></a> 
        </div>
        @endif
    @else
    @endif
	<section class="crumina-stunning-header stunning-header-bg7 pb60">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 m-auto align-center">
					<h1 class="page-title text-white">FIND A GREAT .GO DOMAIN</h1>
					<p class="page-text text-white">We Are The Only .GO Domain Registar</p>
					<form class="mt-5 mb-4" action="{{ route('search')}}" method="get">
						<div class="input-btn--inline">
							<input class="input--white" type="text" placeholder="Choose your new .GO Domain" name="domain">
							<button type="submit" class="crumina-button button--dark button--l">Check It</button>
						</div>
					</form>
					<div style="font-size:26px;" class="fw-medium fs-14 c-yellow">Get Your Piece Of The Altnet Today</div>
				</div>
			</div>
		</div>
	</section>

	<div class="crumina-breadcrumbs breadcrumbs--lime-themes">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ul class="breadcrumbs">
						<li class="breadcrumbs-item">
							<a href="{{route('home')}}">Home</a>
						</li>
						<li class="breadcrumbs-item active">
							<span>Domains</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<section class="large-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ml-auto mr-auto mb-5 align-center">
					<h2>3 TIPS TO FIND THE IDEAL DOMAIN NAME</h2>
					<p class="fs-18 fw-medium">Currently The Sky Is The Limit</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-md-0">
					<div class="crumina-module crumina-info-box info-box--with-number">

						<div class="info-box-title">1</div>

						<div class="info-box-content">
							<p class="info-box-text">Decide What Service You Offer</p>
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-md-0">
					<div class="crumina-module crumina-info-box info-box--with-number">

						<div class="info-box-title">2</div>

						<div class="info-box-content">
							<p class="info-box-text">Try To Keep It Short & Easy To Remember</p>
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-md-0">
					<div class="crumina-module crumina-info-box info-box--with-number">

						<div class="info-box-title">3</div>

						<div class="info-box-content">
							<p class="info-box-text">Be Creative Yet Direct & Keep It Simple</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="large-section-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">


					<img loading="lazy" src="altnet.png" alt="domain">

				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
					<h2>WHY REGISTER A DOMAIN WITH Domains.Go</h2>
					<div class="row mt-5">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
							<div class="crumina-module crumina-info-box info-box--standard">

								<div class="info-box-thumb">


									<img loading="lazy" src="img/demo-content/icons/info-icon21.png" alt="icon">

								</div>

								<div class="info-box-content">
									<a href="12_knowledge_base_domain_articles.html" class="h5 info-box-title">.Go Domains</a></a>
									<p class="info-box-text">Where Created By Altnet For The Sole Purpose Of Freedom Of Expression</p>
								</div>

							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="crumina-module crumina-info-box info-box--standard">

								<div class="info-box-thumb">


									<img loading="lazy" src="img/demo-content/icons/info-icon22.png" alt="icon">

								</div>

								<div class="info-box-content">
									<a href="12_knowledge_base_domain_articles.html" class="h5 info-box-title">.Go Domains</a>
									<p class="info-box-text">Open A World Of Freedom From The Powers That Be</p>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="large-section-padding bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 align-center ml-auto mr-auto mb-5">
					<h2>FREQUENTLY ASKED QUESTIONS</h2>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-faqs-block crumina-faqs-block--without-border">
						<h5>What is a .GO domain name?</h5>
						<p>.Go Domains Are Domains Only Available On Altnet. We Have Seen Whats Been Happing In America And We Don't Like It .Go Domains Are Available For Owners To Create There Dreams And Not Have To Wory About The Cancel Culture</p>
						<h5>How do .GO domains names work?</h5>
						<p>Alnet Has Created There Own Bind Server That Allows Our Domin Extensions In Your Browser And In Our Custom Browser's</p>
						<ol>
							<li>
								<a href="#">Step 1 Purchase Your Domain</a>
							</li>
							<li>
								<a href="#">Step 2 Setup Your Domain On Your Server Or Ours</a>
							</li>
							<li>
								<a href="#">Step 3 Install The Altnet Software</a>
							</li>
							<li>
								<a href="#">Step 4 Open Your Browser And Type In Yourdomain.go/</a>
							</li>
						</ol>
						<h5>That Simple</h5>
						<p>When You Purchase Your Domain Choose Private Or Public This Will Determine If Your Domain Will Be Searchable In Altnet Search Engines</p>
						<h5>Altnet Search Engine</h5>
						<p>Altnet Search Engines Work Similar To All Other Search Engines.</p>
						<ul>
							<li>
								<a href="#">
									Title Tags Are Important.
								</a>
							</li>
							<li>
								Keywords Will Be Reconized As Long As That Match the Content.
							</li>
							<li>
								H1 Tags Should Match The Title Tags.
							</li>
							<li>
								SEO Friendly Urls Are Key As Well AS Naming Image Alt Tags
							</li>
						</ul>
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
							<img loading="lazy" src="img/demo-content/icons/info-icon23.png" alt="guarantee">
						</div>
						<div class="info-box-content">
							<h4 class="info-box-title text-white">All .GO Domains Have Auto SSL</h4>
							<p class="info-box-text">No Need To Purchase A SSL Certifficate</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection
