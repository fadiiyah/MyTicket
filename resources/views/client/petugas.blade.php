@extends('layouts.app')
@if (Auth::user()->level == "Admin")
  @section('title', 'Payment Verification')
  @section('heading', 'Payment Verification')
@elseif (Auth::user()->level == "Petugas")
  @section('title', 'Petugas')
@endif
@section('content')
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card shadow">
        <div class="card-body">
          <form method="POST" action="{{ route('petugas.kode') }}">
          @csrf
            <div class="row">
              <div class="col">
                <div class="form-group" style="margin-bottom: 0">
                  <input
                    type="text"
                    class="form-control"
                    id="kode"
                    name="kode"
                    placeholder="Booking Code"
                    required
                  />
                </div>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary px-4" style="font-size: 16px">
                  Search
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
