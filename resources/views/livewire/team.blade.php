<div>
    @if (isset($teams))
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-6 heading-section text-center ftco-animate">
                    <span class="subheading">About Us</span>
                    <h2 class="mb-4">Our Staff</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                @if (isset($teams))
                @foreach ($teams as $team)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url({{asset('storage/'.$team->image)}});">
                            </div>
                        </div>
                        <div class="text d-flex align-items-center pt-3 text-center">
                            <div>
                                <h3 class="mb-2">{{$team->name ?? ''}}</h3>
                                <span class="position mb-4">{{$team->designation ?? ''}}</span>
                                <div class="faded">
                                    <ul class="ftco-social text-center">
                                        @if ($team->social_media)
                                        @foreach ($team->social_media as $social)
                                        <li class="ftco-animate"><a href="{{$social['url']}}"><i
                                                    class="{{$social['icon']}}"></i></a></li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
    @endif
</div>