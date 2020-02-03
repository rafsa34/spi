@extends('layouts.master')
@section('content2')
<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
        <div class="panel-heading"><h3 class="panel-title">Rubah Kata Sandi</h3></div>
        <br>
        {!! Form::open(['route' => 'password.change', 'method' => 'patch']) !!}
        <div class="form-group">
            <label>Kata Sandi Lama</label>
            <div class="form-control">
                {!! Form::password('old_password', ['label'=> __('auth.old_password')]) !!}
            </div>
        </div>
        <div class="form-group">
            <label>Kata Sandi Baru</label>
            <div class="form-control">
                {!! Form::password('password', ['label' => __('auth.new_password')]) !!}
            </div>
        </div>
        <div class="form-group">
            <label>Konfirmasi Kata Sandi</label>
            <div class="form-control">
                {!! Form::password('password_confirmation', ['label' => __('auth.new_password_confirmation')]) !!}
            </div>
        </div>

    </div>
    <div class="panel-footer">
        {!! Form::submit(__('Save'), ['class' => 'btn btn-primary']) !!}
        {!! link_to_route('home', __('cancel'), [], ['class' => 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
</div>
</div>

@endsection