<div>
    @if (isset($services))
    <section class="ftco-section ftco-no-pb ftco-no-pt ftco-services bg-light" id="services-section">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 ftco-animate py-5 nav-link-wrap">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        @foreach ($services as $service)
                        <a class="nav-link px-4 {{$loop->first ? 'active': ''}}" id="v-pills-{{$service->id}}-tab"
                            data-toggle="pill" href="#v-pills-{{$service->id}}" role="tab"
                            aria-controls="v-pills-{{$service->id}}"
                            aria-selected="{{$loop->first ? 'true': 'false'}}"><i
                                class="{{$service->service_icon ?? 'fa fa-concierge-bell'}}"
                                style="font-size: 1em; color:white"></i>
                            {{$service->service_name ?? ''}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">

                    <div class="tab-content pl-md-5" id="v-pills-tabContent">

                        @foreach ($services as $service)
                        <div class="tab-pane fade show {{$loop->first ? 'active': ''}} py-5"
                            id="v-pills-{{$service->id}}" role="tabpanel"
                            aria-labelledby="v-pills-{{$service->id}}-tab">
                            <span class="icon mb-3 d-block"><i
                                    class="{{$service->service_icon ?? 'fa fa-concierge-bell'}}"></i></span>
                            <h2 class="mb-4">{{$service->service_name ?? ''}}</h2>
                            <p>
                                @if (isset($service->service_excerpt))
                                {!! $service->service_excerpt !!}
                                @endif
                            </p>
                            <p><a href="{{$service->service_redirect_link ?? '#'}}"
                                    class="btn btn-primary px-4 py-3">Learn
                                    More</a></p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>