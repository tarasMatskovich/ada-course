@extends('layouts.main')

@section('content')

<section class="login-form">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="title">Прежде чем начать курс, войдите в систему или зарегистрируйтесь</h3>
                <hr class="deliver">
                <div class="login-form-wrapp">
                    <div class="card">
                        <div class="card-header">
                            Вход в систему
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Введите свой email адресс</label>
                                    <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail1" value="{{old('email')}}" required autofocus placeholder="Введите email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Введите свой пароль</label>
                                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required id="exampleInputPassword1" placeholder="Введите пароль">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" name="remember"  class="form-check-input" id="exampleCheck1" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
                                </div>
                                <button type="submit" class="btn btn-primary login-button">Войти</button>
                                <a href="" class="slick-link">У меня ещё нет акаунта</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
