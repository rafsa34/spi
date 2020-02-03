@extends('layouts.master')

@section('content-top')
    <h1>
        Add <small>Data Satuan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Master</li>
        <li class="active"><a href="{{ route('lhp') }}">Satuan</a></li>
    </ol>
@endsection

@section('content')
    <form action="{{ route('lhp.store') }}" method="post">
        @csrf
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Satuan</h3>
            </div>
            <div class="box-body">
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group @error('nama_bagian') has-error @enderror">
                            <label>Nama Bagian</label>
                            <input tabindex="1" name="nama_bagian" value="{{ old('nama_bagian') }}" type="text" class="form-control @error('email') is-invalid @enderror uppercase" required />
                        </div>
                        <div class="form-group @error('bagian_id') has-error @enderror">
                            <label>Satuan</label>
                            <div class="input-group">
                                <input type="hidden" name="bagian_id" value="{{ old('bagian_id') }}" />
                                <input type="text" name="nama_bagian" class="form-control" value="{{ old('nama_bagian') }} " readonly />
                                <span class="input-group-btn">
                                    <a class="btn btn-default" data-toggle="modal" data-target="#modal_bagian"><i class="fa fa-search"></i></a>
                                </span>
                            </div>
                        </div>

                        <!-- /.form-group -->
                        <div class="form-group @error('no_lhp') has-error @enderror">
                            <label>No LHP</label>
                            <input tabindex="2" name="no_lhp" value="{{ old('no_lhp') }}" type="text" class="form-control invalid" required />
                        </div>
                    </div>
 
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group @error('tgl_pemeriksaan') has-error @enderror">
                            <label>Tanggal Pemeriksaan</label>
                            <input tabindex="1" name="tgl_pemeriksaan" value="{{ old('tgl_pemeriksaan') }}" type="text" class="form-control @error('tgl_pemeriksaan') is-invalid @enderror uppercase" required />
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group @error('no_surat_direksi') has-error @enderror">
                            <label>No Surat Direksi</label>
                            <input tabindex="2" name="no_surat_direksi" value="{{ old('no_surat_direksi') }}" type="text" class="form-control invalid" required />
                        </div>
                    </div>
 
                </div>                
            </div>
            <div class="box-footer">
                <a href="{{ route('lhp') }}" class="btn btn-primary"><i class="fa fa-backward"></i> Back</a>  
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
            </div>
        </div>
    </form>

<!-- /awal dari .modal-dialog -->
    <div class="modal fade" id="modal_bagian">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Data Satuan</h4>
                </div>
                <div class="modal-body">
                    <div class="clearfix">
                    </div>
                    <div class="overlay-wrapper">
                        <table class="table table-striped table-bordered table_part" style="margin-top:15px;">
                            <thead>
                            <tr>
                                <th>Bagian</th>
                                <th>kode</th>
                                <th style="width: 100px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data_bagian as $item)
                                <tr data-id="{{ $item->id }}">
                                    <td>{{ $item->nama_bagian }}</td>
                                    <td>{{ $item->kode }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-default btn-sm add_item"><i class="fa fa-check"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    {{--   @include('shared/overlay')

                    --}}  
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>    
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/select2/select2.min.css') }}" />
@endpush

@push('scripts')
    <script type="text/javascript">
        $(function(){
            $('body').on('click', '.add_item', function(){
                var row = $(this).parents('tr');

                var itemID = row.data('id');
                var var_namaBrg = row.find('td:eq(0)').text();

                $('input[name=bagian_id]').val(itemID);
                $('input[name=nama_bagian]').val(var_namaBrg);

                $('[data-dismiss="modal"]').trigger('click');
            });

            //search part
        });
    </script>
@endpush