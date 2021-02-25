@extends('backEnd.layouts.main')

@section("navbar", "Admin Listesi")


@section('content')

    {{request()->route()->getPrefix()}}

@endsection


@section('css')

@endsection

@section('js')

@endsection
