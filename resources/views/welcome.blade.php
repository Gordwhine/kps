<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @include('_layouts._partials.links')
    </head>
    <body class="antialiased">
        @include('_layouts._partials.header')
        
    <!-- END nav -->
    
        <section class="home-slider owl-carousel">
            <div class="slider-item" style="background-image:url(frontend/images/bg_1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h1 class="mb-4">Kids Are The Best <span>Explorers In The World</span></h1>
                    <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
                </div>
                </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url(frontend/images/bg_2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h1 class="mb-4">Perfect Learned<span> For Your Child</span></h1>
                    <p><a href="{{ route('about') }}" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
                </div>
                </div>
                </div>
            </div>
        </section>

        <section class="ftco-services ftco-no-pb">
			<div class="container-wrap">
				<div class="row no-gutters">
                    <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
                        <div class="media block-6 d-block text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-teacher"></span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">Certified Teachers</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                            </div>
                        </div>      
                    </div>
                    <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
                        <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-reading"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Special Education</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                        </div>    
                    </div>
                    <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
                        <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-books"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Book &amp; Library</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                        </div>      
                    </div>
                    <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
                        <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-diploma"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Certification</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                        </div>      
                    </div>
                </div>
			</div>
		</section>
        
        @include('_layouts._partials.footer')
    
        @include('_layouts._partials.scripts')
    </body>
</html>
