@extends('user.layouts.auth')
@section('title', 'Giriş Yap | ')

@section('content')

    <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
        <a href="#" class="mb-12">
            <img alt="Logo" src="{{ asset('assets/media/logos/bien.png') }}" class="h-40px" />
        </a>
        <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <div class="form w-100">
                <div class="text-center mb-10">
                    <div class="text-gray-400 fw-bold fs-4">Henüz Hesabınız Yok mu?
                        <a href="{{ route('web.user.authentication.register') }}" class="link-primary fw-bolder">Kayıt Olun</a>
                    </div>
                </div>
                <div class="fv-row mb-10">
                    <label for="email" class="form-label fs-6 fw-bolder text-dark">E-posta Adresiniz</label>
                    <input id="email" type="email" class="form-control form-control-lg form-control-solid" autocomplete="off" />
                </div>
                <div class="fv-row mb-10">
                    <div class="d-flex flex-stack mb-2">
                        <label for="password" class="form-label fw-bolder text-dark fs-6 mb-0">Şifreniz</label>
                        <a href="{{ route('web.user.authentication.forgotPassword') }}" class="link-primary fs-6 fw-bolder" tabindex="-1">Şifremi Unuttum</a>
                    </div>
                    <input id="password" type="password" class="form-control form-control-lg form-control-solid" autocomplete="off" />
                </div>
                <div class="text-center">
                    <button type="button" id="LoginButton" class="btn btn-lg btn-primary w-100 mb-5">Giriş Yap</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('customStyles')
    @include('user.modules.auth.login.components.style')
@endsection

@section('customScripts')
    @include('user.modules.auth.login.components.script')
@endsection
