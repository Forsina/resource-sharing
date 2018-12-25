@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Потврди ја твојата Е-Маил Адреса') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Испратен е линк за потврда на вашата Е-Маил Адреса.') }}
                        </div>
                    @endif

                    {{ __('Пред да продолжите, Ве молиме проверете ја вашата Е-Маил Адреса за потврдувачки линк.') }}
                    {{ __('Ако не сте добиле Е-Маил') }}, <a href="{{ route('verification.resend') }}">{{ __('кликнете тука за да Ви испратиме нов.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
