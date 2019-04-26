@extends('layouts.appadmin')
@section('style')

@endsection
@section('nav_title')
  Data Kategori
@endsection
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Kategori
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('kategori-option-admin.update', $kategori_option_admins->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Nama Kategori:</label>
              <input type="text" class="form-control" name="name" value="{{$kategori_option_admins->name}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection

@section('script')

@endsection
