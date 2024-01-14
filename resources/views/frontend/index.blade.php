@extends('frontend.main-master')
@section('main')

        <!-- Banner Area + Banner Form -->
        @include('frontend.home.banner')
        <!-- Banner Area + Banner Form End -->

        <!-- Room Area 1 + Room Area 2 -->
        @include('frontend.home.room-area')
        <!-- Room Area 1 + Room Area 2 End -->

        <!-- FAQ Area -->
        @include('frontend.home.faq')
        <!-- FAQ Area End -->

@endsection
