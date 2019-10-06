@csrf

<div class="form-group row">
        <label form ="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

        <div class="col-md-6">
            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autofocus>

            @error('nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
</div>

<div class="form-group row">
        <label form ="kategori_galeri_id" class="col-md-4 col-form-label text-md-right">{{ __('Kategori Galeri') }}</label>

        <div class="col-md-6">
            {!! Form::select('kategori_galeri_id', $kategoriGaleri,null,["class"=>"form-control","required"]) !!}

            @error('kategori_galeri_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
</div>

<div class="form-group row">
        <label form ="keterangan" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>

        <div class="col-md-8">
            {!! Form::textarea('keterangan', null,['class'=>'form-control']); !!}

            @error('keterangan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
</div>

<input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::user()->id }}" required autofocus>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Simpan Data') }}
            </button>
            <a href="{!! route('kategori_galeri.index')!!}" class="btn btn-danger">
                {{ __('Batal') }}
            </a>
    </div>
</div>
