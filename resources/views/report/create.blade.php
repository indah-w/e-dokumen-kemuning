@extends('adminlte.layouts.app')

@section('title', 'Create Report')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Create Report</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('report.store') }}" method="POST">
		    		@csrf
                    <div class="form-group row">
                        <label for="jumlah_rumah_tetap" class="col-md-3 col-form-label text-md-right">{{ __('Jumlah Rumah Tetap') }}</label>

                        <div class="col-md-7">
                            <input id="jumlah_rumah_tetap" type="text" class="form-control @error('jumlah_rumah_tetap') is-invalid @enderror" name="jumlah_rumah_tetap" value="{{ old('jumlah_rumah_tetap') }}" required autocomplete="jumlah_rumah_tetap" autofocus>

                            @error('jumlah_rumah_tetap')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jumlah_rumah_kontrak" class="col-md-3 col-form-label text-md-right">{{ __('Jumlah Rumah Kontrak') }}</label>

                        <div class="col-md-7">
                            <input id="jumlah_rumah_kontrak" type="text" class="form-control @error('jumlah_rumah_kontrak') is-invalid @enderror" name="jumlah_rumah_kontrak" value="{{ old('jumlah_rumah_kontrak') }}" required autocomplete="jumlah_rumah_kontrak" autofocus>

                            @error('jumlah_rumah_kontrak')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jumlah_anak" class="col-md-3 col-form-label text-md-right">{{ __('Jumlah Anak-Anak') }}</label>

                        <div class="col-md-7">
                            <input id="jumlah_anak" type="text" class="form-control @error('jumlah_anak') is-invalid @enderror" name="jumlah_anak" value="{{ old('jumlah_anak') }}" required autocomplete="jumlah_anak" autofocus>

                            @error('jumlah_anak')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jumlah_tempat_sampah" class="col-md-3 col-form-label text-md-right">{{ __('Jumlah Tempat Sampah') }}</label>

                        <div class="col-md-7">
                            <input id="jumlah_tempat_sampah" type="text" class="form-control @error('jumlah_tempat_sampah') is-invalid @enderror" name="jumlah_tempat_sampah" value="{{ old('jumlah_tempat_sampah') }}" required autocomplete="jumlah_tempat_sampah" autofocus>

                            @error('jumlah_tempat_sampah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jumlah_biopori" class="col-md-3 col-form-label text-md-right">{{ __('Jumlah Biopori') }}</label>

                        <div class="col-md-7">
                            <input id="jumlah_biopori" type="text" class="form-control @error('jumlah_biopori') is-invalid @enderror" name="jumlah_biopori" value="{{ old('jumlah_biopori') }}" required autocomplete="jumlah_biopori" autofocus>

                            @error('jumlah_biopori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jumlah_anggota_bs" class="col-md-3 col-form-label text-md-right">{{ __('Jumlah Anggota Bank Sampah') }}</label>

                        <div class="col-md-7">
                            <input id="jumlah_anggota_bs" type="text" class="form-control @error('jumlah_anggota_bs') is-invalid @enderror" name="jumlah_anggota_bs" value="{{ old('jumlah_anggota_bs') }}" required autocomplete="jumlah_anggota_bs" autofocus>

                            @error('jumlah_anggota_bs')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4 ">
                            <button type="submit" class="btn btn-primary float-right">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
		    	</form>
		    </div>
		</div>
	</div>
</div>
@endsection
@push('js')
@endpush