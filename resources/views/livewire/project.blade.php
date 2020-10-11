<div>
    @if (isset($projects))
    <section class="ftco-section ftco-project bg-light" id="projects-section">
        <div class="container px-md-5">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Accomplishments</span>
                    <h2 class="mb-4">Our Projects</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 testimonial">
                    <div class="carousel-project owl-carousel">
                        @foreach ($projects as $project)
                        <div class="item">
                            <div class="project">
                                <div class="img">
                                    <img src="{{verticalLazyLoadImg()}}"
                                        data-src="{{asset($project->thumbnail('image','small'))}}"
                                        class="lazy img-fluid" alt="{{$project->name}}">
                                    <div class="text px-4">
                                        <h3><a href="#">{{$project->name}}</a></h3>
                                        <span>{{$project->excerpt}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>