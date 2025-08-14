@extends('front.layout.main-layout')
@section('page-title')
@endsection
@section('content')

    <section class="page-title" style="background-image:url(images/background/4.jpg);">
        <div class="auto-container">
            <h1>{{$service->name}}</h1>
        </div>
    </section>
    
    <div class="page-info">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb pull-left">
                    <li><a href="index.html">Home</a></li>
                    <li>{{$service->name}}</li>
                </ul>
                <div class="text pull-right">Certified Company ISO 9001-2008</div>
            </div>
        </div>
    </div>
    
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                	<div class="services-single">
						<div class="inner-box">
							<div class="gallery-image">
                            	<div class="row clearfix">
                                	<div class="image-column col-md-7 col-sm-7 col-xs-12">
                                    	<div class="image">
                                        	<img src="images/resource/service-14.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="image-column col-md-5 col-sm-5 col-xs-12">
                                    	<div class="image">
                                        	<img src="images/resource/service-15.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2>{{$service->name}}</h2>
                            <div class="text">
                                <p>{!! html_entity_decode($service->description) !!} </p>

                                <div class="two-column">
                                	<div class="row clearfix">
                                    	<div class="image-column col-md-6 col-sm-6 col-xs-12">
                                        	<div class="image">
                                            	<img src="images/resource/service-13.jpg" alt="" />
                                            </div>
                                        </div>
                                    	<div class="content-column col-md-6 col-sm-6 col-xs-12">
                                        	<div class="inner-column left-padd">
                                                <h3>Benefit of Service</h3>
                                                <p>Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself.</p>
                                                <ul class="list-style-four">
                                                    <li>Those who do not know how to pursue</li>
                                                    <li>Pleasure rationally encounter</li>
                                                    <li>Consequences that are extremely painful.</li>
                                                    <li>Nor again is there anyone who loves or pursues</li>
                                                </ul>
                                            </div>
                                        </div>
                                    	
                                    </div>
                                </div>
                            </div>
                            <div class="featured-blocks">
                            	<div class="clearfix">
                                	
                                    <!--Featured Block-->
                                    <div class="featured-block col-md-6 col-sm-6 col-xs-12">
                                    	<div class="featured-inner">
                                        	<div class="content">
                                            	<div class="icon-box">
                                                	<span class="icon flaticon-worker"></span>
                                                </div>
                                                <h3><a href="#">Professional Team</a></h3>
                                                <div class="featured-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches.</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--Featured Block-->
                                    <div class="featured-block col-md-6 col-sm-6 col-xs-12">
                                    	<div class="featured-inner">
                                        	<div class="content">
                                            	<div class="icon-box">
                                                	<span class="icon flaticon-clock-1"></span>
                                                </div>
                                                <h3><a href="#">Delivery on Time</a></h3>
                                                <div class="featured-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches.</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--Featured Block-->
                                    <div class="featured-block col-md-6 col-sm-6 col-xs-12">
                                    	<div class="featured-inner">
                                        	<div class="content">
                                            	<div class="icon-box">
                                                	<span class="icon flaticon-medal"></span>
                                                </div>
                                                <h3><a href="#">Quality Products</a></h3>
                                                <div class="featured-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches.</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--Featured Block-->
                                    <div class="featured-block col-md-6 col-sm-6 col-xs-12">
                                    	<div class="featured-inner">
                                        	<div class="content">
                                            	<div class="icon-box">
                                                	<span class="icon flaticon-gear"></span>
                                                </div>
                                                <h3><a href="#">#1 Manufacturing Unit</a></h3>
                                                <div class="featured-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches.</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <!--Accordian Boxed-->
                            <div class="accordian-boxed">
                            	<h3>More information</h3>
                            	<!--Accordian Box-->
                                <ul class="accordion-box style-three">
                                    
                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Capitalize on low hanging fruit to identify a ballpark value added activity.</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids. actual teachings of the great explorer of the truth, the master-builder of human actual teachings of the great explorer of the truth, the master-builder of human.</div>
                                            </div>
                                        </div>
                                    </li>
            
                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Digital divide with additional clickthroughs from DevOps. </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids. actual teachings of the great explorer of the truth, the master-builder of human actual teachings of the great explorer of the truth, the master-builder of human.</div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!--Block-->
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Nanotechnology immersion along the information highway will close the loop.</div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids. actual teachings of the great explorer of the truth, the master-builder of human actual teachings of the great explorer of the truth, the master-builder of human.</div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!--Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Organically grow the holistic world view of disruptive innovation via workplace.</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids. actual teachings of the great explorer of the truth, the master-builder of human actual teachings of the great explorer of the truth, the master-builder of human.</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
				
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar">
						
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <ul class="blog-cat">
                                <li><a href="mechanical-engineering.html">Mechanical Engineering</a></li>
                                <li class="active"><a href="agricultural-processing.html">{{$service->name}}</a></li>
                                <li><a href="petrolium.html">Petrolium & Gas</a></li>
                                <li><a href="material-engineering.html">Material Engineering</a></li>
                                <li><a href="chemical-engineering.html">Chemical Engineering</a></li>
                                <li><a href="power-energy.html">Power & Energy</a></li>
                            </ul>
                        </div>
                        
                        <!--Brochure-->
                    	<div class="sidebar-widget brochure-widget">
							
                        	<div class="brochure-box">
                            	<div class="inner">
                                	<span class="icon fa fa-file-pdf-o"></span>
                                	<div class="text">PDF. Download</div>
                                </div>
                                <a href="#" class="overlay-link"></a>
                            </div>
                            
                            <div class="brochure-box">
                            	<div class="inner">
                                	<span class="icon flaticon-file"></span>
                                	<div class="text">DOC.  Download</div>
                                </div>
                                <a href="#" class="overlay-link"></a>
                            </div>
                            
                        </div>

						<!--Contact Widhet-->
                    	<div class="sidebar-widget contact-info-widget">
                        	<div class="sidebar-title style-two">
                                <h2>Our Brochures</h2>
                            </div>
                        	<div class="inner-box">
                            	<ul>
                                	<li><span class="icon fa fa-phone"></span>1800 456 7890</li>
                                    <li><span class="icon fa fa-send"></span>info@nortech.co.in</li>
                                </ul>
                            </div>
                        </div>
                        
                    </aside>
                </div>
                
            </div>
        </div>
    </div>
    
@endsection