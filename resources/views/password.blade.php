@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Change Password</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('password/change') }}">
                        {!! csrf_field() !!}

                        <div class="form-group row">
                            <label for="old_password" class="col-sm-4 col-form-label text-md-right">Old password</label>

                            <div class="col-md-6">
                                <input id="old_password" type="password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" name="old_password" value="{{ old('old_password') }}" required autofocus>

                                @if ($errors->has('old_password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="new_password" class="col-md-4 col-form-label text-md-right">New password</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control{{ $errors->has('new_password') ? ' is-invalid' : '' }}" name="new_password" required>

                                @if ($errors->has('new_password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="new_password" class="col-md-4 col-form-label text-md-right">New password confirmation</label>

                            <div class="col-md-6">
                                <input id="new_password_confirmation" type="password" class="form-control{{ $errors->has('new_password_confirmation') ? ' is-invalid' : '' }}" name="new_password_confirmation" required>

                                @if ($errors->has('new_password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('new_password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Change password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
