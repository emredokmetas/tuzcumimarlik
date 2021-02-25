@extends('backEnd.layouts.main')

@section("navbar", "Proje Ekle")


@section('content')

    <section class="input-validation">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Proje Bilgileri</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form method="post" action="" class="form-horizontal" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>TİP</label>
                                            <div class="controls">
                                                <select name="type" class="form-control" id="basicSelect" data-validation-required-message="Bu alan gerekli" >
                                                    <option value="1">Mimari Proje</option>
                                                    <option value="2">İç Mimari Proje</option>
                                                    <option value="3">Uygulama Projeleri</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Başlık</label>
                                            <div class="controls">
                                                @foreach(config("app.languages") as $language)
                                                    <fieldset>
                                                        <div class="input-group mb-1">
                                                            <input type="text" name="{{$language}}[title]" class="form-control" data-validation-required-message="This field is required">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">{{$language}}</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Anahtar Kelime</label>
                                            <div class="controls">
                                                @foreach(config("app.languages") as $language)
                                                    <fieldset>
                                                        <div class="input-group mb-1">
                                                            <input type="text" name="{{$language}}[keywords]" class="form-control" data-validation-required-message="This field is required">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">{{$language}}</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Kısa Açıklama</label>
                                            <div class="controls">
                                                @foreach(config("app.languages") as $language)
                                                    <fieldset>
                                                        <div class="input-group mb-1">
                                                            <textarea name="{{$language}}[description]" id="" class="form-control"></textarea>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">{{$language}}</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>İçerik Kapak</label>
                                            <div class="controls">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Dosya seçin</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Ana Sayfa Kapak</label>
                                            <div class="controls">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Dosya seçin</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="d-block">Gender</label>
                                            <div class="custom-control-inline">
                                                <div class="radio mr-1">
                                                    <input type="radio" name="bsradio1" id="radio5" checked="">
                                                    <label for="radio5">Male</label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio" name="bsradio1" id="radio888" checked="">
                                                    <label for="radio888">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Açıklama</label>
                                            <div class="controls">
                                                @foreach(config("app.languages") as $language)

                                                    <fieldset>
                                                        <div class="input-group mb-1">
                                                            <textarea name="{{$language}}[content]" id="" class="form-control editor"></textarea>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">{{$language}}</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('css')
@endsection

@section('js')

    <script src="{{asset("tinymce/tinymce.min.js")}}"></script>
@endsection
