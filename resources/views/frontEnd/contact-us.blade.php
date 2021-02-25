@extends('frontEnd.layouts.main')

@section("title", __("general.page-contact-us"))

@section("keywords", "contact-us")
@section("description", "contact-us")

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
                    <h1 class="font-weight-bold">{{__("general.page-contact-us")}}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter">{{__("general.content-contact-us-title")}}</h2>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">{{__("general.content-contact-us-description")}}</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-12 mb-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                            <div class="icon-box icon-box-style-1">
                                <div class="icon-box-icon">
                                    <i class="lnr lnr-apartment text-color-primary"></i>
                                </div>
                                <div class="icon-box-info mt-1">
                                    <div class="icon-box-info-title">
                                        <h3 class="font-weight-bold text-4 mb-0">{{__("general.address")}}</h3>
                                    </div>
                                    <p>{{settings("address")}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-12 mb-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                            <div class="icon-box icon-box-style-1">
                                <div class="icon-box-icon icon-box-icon-no-top">
                                    <i class="lnr lnr-envelope text-color-primary"></i>
                                </div>
                                <div class="icon-box-info mt-1">
                                    <div class="icon-box-info-title">
                                        <h3 class="font-weight-bold text-4 mb-0">{{__("general.email-address")}}</h3>
                                    </div>
                                    <p>{{settings("email-address")}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-12 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                            <div class="icon-box icon-box-style-1">
                                <div class="icon-box-icon">
                                    <i class="lnr lnr-phone-handset text-color-primary"></i>
                                </div>
                                <div class="icon-box-info mt-1">
                                    <div class="icon-box-info-title">
                                        <h3 class="font-weight-bold text-4 mb-0">{{__("general.phone-number")}}</h3>
                                    </div>
                                    <p><a href="tel:+1234567890">{{settings("phone-number")}}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 appear-animation" data-appear-animation="fadeInRightShorter">
                    <form class="contact-form form-style-2" action="php/contact-form.php" method="POST">
                        <div class="contact-form-success alert alert-success d-none">
                            <strong>{{__("general.success")}}!</strong> {{__("general.contact-success-massage")}}
                        </div>
                        <div class="contact-form-error alert alert-danger d-none">
                            <strong>{{__("general.error")}}!</strong> {{__("general.contact-error-massage")}}
                            <span class="mail-error-message d-block"></span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" value="" data-msg-required="{{__("general.contact-full-name-msg-required")}}" maxlength="100" class="form-control" name="name" id="name" placeholder="{{__("general.contact-us-full-name")}}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" value="" data-msg-required="{{__("general.contact-email-msg-required")}}" data-msg-email="{{__("general.contact-email-msg-email")}}" maxlength="100" class="form-control" name="email" id="email" placeholder="{{__("general.contact-us-email")}}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="text" value="" data-msg-required="{{__("general.contact-subject-msg-required")}}" maxlength="100" class="form-control" name="subject" id="subject" placeholder="{{__("general.contact-us-subject")}}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <textarea maxlength="5000" data-msg-required="{{__("general.contact-message-msg-required")}}" rows="5" class="form-control" name="message" id="message" placeholder="{{__("general.contact-us-message")}}" required></textarea>
                            </div>
                        </div>
                        <div class="form-row mt-2">
                            <div class="col">
                                <input type="submit" value="{{__("general.contact-us-button")}}" class="btn btn-primary btn-rounded btn-4 font-weight-semibold text-0" data-loading-text="{{__("general.loading")}}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{asset("js/view.contact.js")}}"></script>
@endsection
