<div>
    @if (isset($sliders) ? count($sliders) > 0 : false)
    <section id="home-section" class="hero">
        <h3 class="vr">Welcome to @setting('site_name','Doctype Admin')</h3>
        <div class="home-slider js-fullheight owl-carousel">
            @foreach ($sliders as $slider)
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third order-md-last img js-fullheight"
                            style="background-image:url({{asset('storage/'.$slider->image)}});">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Welcome to the @setting('site_name','Doctype Admin')</span>
                                <h1 class="mb-4 mt-3">{{ $slider->name }}</span></h1>
                                <p>{{$slider->excerpt}}</p>

                                <p><a href="{{$slider->link}}" class="btn btn-primary px-5 py-3 mt-3">Get in touch</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endif
</div>