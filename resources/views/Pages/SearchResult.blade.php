@extends('Layouts.Main')
@section('plugins')
    <link rel="stylesheet" href="{{ asset('assets/Root/css/post.css') }}">
@endsection
@section('content')
    <div class="mt-4">
        <div id="searchQuery" class="d-flex justify-content-center">
            <h5>Hasil Pencarian : <span class="fw-bold">"qw"</span></h5>
        </div>

        <div class="border mb-0"></div>

        <div id="searchResult" class="row mt-4">

            <a href="" class="row relatedVideosCard mt-3 col-lg-6">
                <div class="col-3 p-0">
                    <img src="{{ asset('assets/Static/Images/ktphaha.jpg') }}"
                        class="relatedVideosCardImage img-fluid rounded" loading="lazy" alt="">
                </div>
                <div class="col-9 relatedVideosCardText d-inline-flex align-items-center">
                    <div class="d-block align-items-center">
                        <h6 class="fw-semibold text-dark mb-0">Lorem, ipsum.</h6>
                        <p class="text-dark relatedVideosCardExcerpt">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Molestiae labore est natus esse dolore a voluptate nisi eius quo ullam.</p>
                        <p class="text-dark">d m y</p>
                    </div>
                </div>
            </a>


        </div>
    </div>
@endsection
