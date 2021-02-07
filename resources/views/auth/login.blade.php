@extends('layouts.auth')

@section('content')

    <div class="login-box-body">

        <form action="{{ route('login') }}" method="post">

            @csrf

            <div class="form-group @error('email') has-error @enderror has-feedback">

                <input id="email"
                       type="email"
                       class="form-control"
                       name="email"
                       value="{{ old('email') }}"
                       required
                       autocomplete="email"
                       placeholder="{{ __('E-mail') }}"
                       autofocus>

                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @error('email')
                <div class="help-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group @error('password') has-error @enderror has-feedback">

                <input id="password"
                       type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       name="password"
                       required
                       placeholder="{{ __('Password') }}"
                       autocomplete="current-password">

                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @error('password')
                <div class="help-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}
                        </label>
                    </div>
                </div>

                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
                </div>
            </div>
        </form>

    </div>

@endsection

@section('js')
    <script>
        $(function () {
            $('#remember').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
@endsection
