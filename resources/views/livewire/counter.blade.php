@if (isset($counters))
<div>
    {<section class="ftco-section-2 img"
        style="background-image: url(@setting('counter_background','https://p0.pikist.com/photos/635/524/leaf-horizontal-green-nature-color-background.jpg'));">
        <div class="container">
            <div class="row d-md-flex justify-content-end">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            @foreach ($counters as $counter)
                            <a href="#" class="services-wrap ftco-animate">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="ion-ios-arrow-back"></span>
                                    <span class="ion-ios-arrow-forward"></span>
                                </div>
                                <p>
                                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                                        <div class="text p-4 bg-primary">
                                            <p class="mb-0">
                                                <span class="number" data-number="20"><b>{{$counter->count}}</b></span>
                                                <span>{{$counter->counter_name}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </p>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endif