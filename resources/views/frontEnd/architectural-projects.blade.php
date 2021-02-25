@extends('frontEnd.layouts.main')

@section("title", __("general.page-architectural-projects-title"))

@section("keywords", __("general.page-architectural-projects-keywords"))
@section("description", __("general.page-architectural-projects-description"))

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
                    <h1 class="font-weight-bold">@yield("title")</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid px-0">
        <div class="row">
            @foreach($projects as $project)
                <div class="col-sm-6 col-md-3 col-lg-2 p-0">
                    <div class="portfolio-item m-0">
                        <a href="project/{{ $project->slug }}">
                        <span class="image-frame overlay overlay-color-dark image-frame-style-5 image-frame-effect-1 box-shadow-none">
                            <span class="image-frame-wrapper">
                                <img src="{{asset("uploads/".$project->cover) }}" class="img-fluid" alt="">
                                <span class="image-frame-inner-border"></span>
                                <span class="image-frame-info flex-column align-items-center">
                                    <h2 class="text-color-light font-weight-semibold line-height-2 text-2 mb-0">{{ $project->title }}</h2>
                                </span>
                            </span>
                        </span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('js')

@endsection
