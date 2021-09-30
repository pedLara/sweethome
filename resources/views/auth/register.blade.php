@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Register') }}
                    </div>
                    <div class="card-body">
                        <form 
                            method="POST" 
                            action="{{ route('register') }}">
                                @csrf
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label 
                                        for="name" 
                                        class="col-md-6 col-form-label">
                                        {{ __('Given Name') }}
                                    </label>
                                    <input 
                                        id="name" 
                                        type="text" 
                                        class="form-control @error('given_name') is-invalid @enderror" 
                                        name="given_name" 
                                        value="{{ old('name') }}" 
                                        required 
                                        autocomplete="given_name" 
                                        autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label 
                                        for="name" 
                                        class="col-md-6 col-form-label">
                                        {{ __('Last Name') }}
                                    </label>
                                    <input 
                                        id="lastname" 
                                        type="text" 
                                        class="form-control @error('last_name') is-invalid @enderror" 
                                        name="last_name" 
                                        value="{{ old('lastname') }}" 
                                        required 
                                        autocomplete="last_name" 
                                        autofocus>
                                    @error('lastname')
                                        <span 
                                            class="invalid-feedback" 
                                            role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label 
                                        for="email" 
                                        class="col-md-6 col-form-label">
                                        {{ __('E-Mail Address') }}
                                    </label>
                                    <input 
                                        id="email" 
                                        type="email" 
                                        class="form-control @error('email') is-invalid @enderror" 
                                        name="email" 
                                        value="{{ old('email') }}" 
                                        required 
                                        autocomplete="email">
                                    @error('email')
                                        <span 
                                            class="invalid-feedback" 
                                            role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label 
                                        for="password" 
                                        class="col-md-6 col-form-label">
                                        {{ __('Password') }}
                                    </label>
                                    <input 
                                        id="password" 
                                        type="password" 
                                        class="form-control @error('password') is-invalid @enderror" 
                                        name="password" 
                                        required 
                                        autocomplete="new-password">
                                    @error('password')
                                        <span 
                                            class="invalid-feedback" 
                                            role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label 
                                        for="password-confirm" 
                                        class="col-md-6 col-form-label">
                                        {{ __('Confirm Password') }}
                                    </label>
                                    <input 
                                        id="password-confirm" 
                                        type="password" 
                                        class="form-control" 
                                        name="password_confirmation" 
                                        required 
                                        autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 col-form-label">
                                    <input 
                                        type="checkbox" 
                                        name="agent" 
                                        class="filled-in" 
                                        id="isChecked"/>
                                    <span>
                                        {{ __('Register as Agent') }}
                                    </span>
                                </label>
                            </div>
                            <div id="appear">
                                <p class="col-md-left text-danger">
                                    For verification:
                                </p>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label 
                                            for="broker" 
                                            class="col-md-6 col-form-label">
                                            {{ __('Broker License No.') }}
                                        </label>
                                        <input 
                                            id="broker" 
                                            type="text" 
                                            class="form-control @error('license_no') is-invalid @enderror" 
                                            name="agent_verification" 
                                            autocomplete="license_no">
                                        @error('broker')
                                            <span 
                                                class="invalid-feedback" 
                                                role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button 
                                        type="submit" 
                                        class="btn btn-primary">
                                        {{ __('Register') }}
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



