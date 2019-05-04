@extends('layout.base')
@section('title','Home')
@push('js')
    <script src="{{asset('/js/index.js')}}?v={{now()}}"></script>
@endpush
@section('content')

    <div id="out" class="mx-auto text-center">
        <div id="timer_text">10:00</div>
        <div id="timer_btn"><i class="fas fa-play"></i></div>
    </div>


@endsection