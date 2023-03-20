@extends('user.layouts.master')
@section('title', 'Siparişler | ')

@section('subheader')
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Siparişler</h1>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">

        </div>
    </div>
@endsection

@section('content')

    <h1 class="text-center">Çok Yakında...</h1>
    <div class="bgi-no-repeat bgi-position-x-center bgi-size-contain min-h-200px min-h-lg-600px" style="background-image: url('{{ asset('assets/media/illustrations/sketchy-1/17.png') }}')"></div>

@endsection

@section('customStyles')
    @include('user.modules.order.index.components.style')
@endsection

@section('customScripts')
    @include('user.modules.order.index.components.script')
@endsection
