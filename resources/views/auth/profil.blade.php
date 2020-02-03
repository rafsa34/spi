<!-- <script type="text/javascript">
    window.location.href='/login'
</script> -->

@extends('layouts.master')

@section('content2')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profil') }}</div>

                <div class="card-body">
                      

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus disabled>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" disabled>

                               
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" disabled>

                                
                            </div>
                        </div> -->


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="/akun/{{$user->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
                            </div>
                        </div>
                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
