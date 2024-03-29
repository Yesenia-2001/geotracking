@extends('layouts.app', [
'class' => '',
'elementActive' => ''
])



@section('content')
<div class="content col-md-12 ml-auto mr-auto">
    <div class="header py-5 pb-7 pt-lg-9">
        <div class="container col-md-10">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 pt-5">
                        <h1 class="@if(Auth::guest()) text-white @endif"></h1>
                        @if(Auth::guest())
                        <a href="/login" class="btn btn-warning btn-lg">Ingresar</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();
    });
</script>
@endpush
@section('content')
    <div class="content">
        <div id="map" style="height:500px; width: 1300px; background:white" class="my-3"></div>
    </div>
@endsection