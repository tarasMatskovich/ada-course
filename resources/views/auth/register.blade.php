@extends('layouts.main')

@section('content')



<section class="login-form">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="title">Прежде чем начать курс, зарегистрируйтесь в системе</h3>
                <hr class="deliver">
                <div class="login-form-wrapp">
                    <div class="card">
                        <div class="card-header">
                            Регистрация в системе
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
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
                                    <label for="exampleInputName">Введите свое имя</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" value="{{old('name')}}" placeholder="Введите имя">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
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
                                <div class="form-group">
                                    <label for="exampleInputPassword3">Введите свой пароль повторно</label>
                                    <input type="password" name="password_confirmation" class="form-control" required id="exampleInputPassword3" placeholder="Введите пароль">
                                </div>
                                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
