@extends('Layouts.Main')
@section('plugins')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection
@section('content')
    <section class="">

        <div id="hero" class="mt-3">
            <a class="card" id="heroCard" href="">
                <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo
                        id
                        omnis aliquam animi eos ad! Natus minima quis laboriosam quia.</h5>
                </div>
            </a>
        </div>


        <div id="latestNews" class="my-5">

            <div id="" class="d-flex bg-primary-subtle rounded py-2 justify-content-center shadow-lg">
                <h4 class="fw-bold">Berita Terkini</h4>
            </div>

            <div id="latestNewsCardWrapper" class="swiper my-3">
                <div class="swiper-wrapper">
                    <a class="card swiper-slide" id="latestNewsCard" href="">
                        <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Explicabo
                                id omnis aliquam animi eos ad! Natus minima quis laboriosam quia.</h5>
                        </div>
                    </a>
                    <a class="card swiper-slide" id="latestNewsCard" href="">
                        <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Explicabo
                                id omnis aliquam animi eos ad! Natus minima quis laboriosam quia.</h5>
                        </div>
                    </a>
                    <a class="card swiper-slide" id="latestNewsCard" href="">
                        <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Explicabo
                                id omnis aliquam animi eos ad! Natus minima quis laboriosam quia.</h5>
                        </div>
                    </a>
                    <a class="card swiper-slide" id="latestNewsCard" href="">
                        <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Explicabo
                                id omnis aliquam animi eos ad! Natus minima quis laboriosam quia.</h5>
                        </div>
                    </a>
                    <a class="card swiper-slide" id="latestNewsCard" href="">
                        <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Explicabo
                                id omnis aliquam animi eos ad! Natus minima quis laboriosam quia.</h5>
                        </div>
                    </a>
                    <a class="card swiper-slide" id="latestNewsCard" href="">
                        <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Explicabo
                                id omnis aliquam animi eos ad! Natus minima quis laboriosam quia.</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="border mb-1 latestHeroSeparator"></div>

        <div class="row">
            <div class="col-lg-7 col-12">
                <div id="latestVideos">
                    <div class="d-flex mb-2 mt-5 ">
                        <h6>Video Terbaru</h6>
                        <div class="ms-auto">
                            <button class="badge btn btn-info">Selengkapnya</button>
                        </div>
                    </div>
                    <div class="container">
                        <a href="" class="text-decoration-none row rounded shadow-lg border w-full latestVideoCard"
                            id="latestVideoCard">
                            <div class="col-4 m-0 p-0">
                                <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}" class="img-fluid rounded-start"
                                    alt="">
                            </div>
                            <div class="col-8 my-4">
                                <div class="d-block latestVideoCardText mt-2">
                                    <h6 class="">Kategori</h6>
                                    <h5 class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo dicta
                                        atque iste
                                        nesciunt similique. Officiis.</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="border contentSeparator"></div>


                <div id="sosial" class="newsContentByCategory">
                    <div class="d-flex mb-2 mt-5 ">
                        <h6>Sosial</h6>
                        <div class="ms-auto">
                            <button class="badge btn btn-info">Selengkapnya</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <a href="" class="">
                                <div class="card postCategoryCard">
                                    <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body p-1 mt-1">
                                        <p class="card-text postCategoryCardText">Some quick example text to build on the
                                            card title and make up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <a href="" class="">
                                <div class="card postCategoryCard">
                                    <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body p-1 mt-1">
                                        <p class="card-text postCategoryCardText">Some quick example text to build on the
                                            card title and make up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <a href="" class="">
                                <div class="card postCategoryCard">
                                    <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body p-1 mt-1">
                                        <p class="card-text postCategoryCardText">Some quick example text to build on the
                                            card title and make up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <a href="" class="">
                                <div class="card postCategoryCard">
                                    <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body p-1 mt-1">
                                        <p class="card-text postCategoryCardText">Some quick example text to build on the
                                            card title and make up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <a href="" class="">
                                <div class="card postCategoryCard">
                                    <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body p-1 mt-1">
                                        <p class="card-text postCategoryCardText">Some quick example text to build on the
                                            card title and make up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <a href="" class="">
                                <div class="card postCategoryCard">
                                    <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <div class="card-body p-1 mt-1">
                                        <p class="card-text postCategoryCardText">Some quick example text to build on the
                                            card title and make up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>





            <div class="col-lg-5 mt-5">
                <div id="popularVideos">
                    <div class="d-flex mb-2">
                        <h6>Video Populer</h6>
                    </div>
                    <div class="container">
                        <a class="bg-body border shadow-lg rounded w-full p-2 row popularVideosCard d-flex align-items-center"
                            href="">
                            <div class="col-3">
                                <div
                                    class="rounded-circle bg-primary d-flex justify-content-center align-items-center cardNumberCircle">
                                    <h3 class="text-light fw-bold mt-2">1</h3>
                                </div>
                            </div>
                            <div class="col-9 popularVideosCardText text-dark">
                                <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, accusamus.</h5>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex mt-4">
                        <h6>Video Populer</h6>
                    </div>
                    <div class="container">
                        <a class="bg-body border shadow-lg rounded w-full p-2 row popularVideosCard d-flex align-items-center"
                            href="">
                            <div class="col-3">
                                <div
                                    class="rounded-circle bg-primary d-flex justify-content-center align-items-center cardNumberCircle">
                                    <h3 class="text-light fw-bold mt-2">1</h3>
                                </div>
                            </div>
                            <div class="col-9 popularVideosCardText text-dark">
                                <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, accusamus.</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@push('scripts')
    <script>
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            slidesPerView: 'auto',
            autoplay: {
                delay: 1000,
                pauseOnMouseEnter: true
            }
        });
    </script>
@endpush
