@extends('frontEnd.layouts.main')

@section("title", __("general.page-about-us"))

@section("keywords", "about-us")
@section("description", "about-us")

@section('css')

@endsection

@section('content')

    <section class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index">{{__("general.breadcrumb-home")}}</a></li>
                        <li class="active">{{__("general.breadcrumb-pages")}}</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">{{__("general.page-about-us")}}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container pb-5">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean venenatis, ante ut
                maximus tempus, eros diam placerat arcu, quis fringilla justo nulla non risus. Nunc
                nec ornare justo. Mauris vestibulum non arcu tempor mattis. Sed velit turpis,
                viverra a pretium nec, aliquam vel ligula. </p>
            <p>
                Sed nulla sem, dignissim eu bibendum ut, mattis a nunc. Phasellus velit est,
                ultrices et magna in, molestie iaculis mauris.</p>
        </div>
    </section>
@endsection

@section('js')

@endsection
