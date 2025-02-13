@extends('layouts.app')
@section('title', 'Home')
@section('styles')
  <link href="{{ asset('vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
  <style>
    .select2-container .select2-selection--single {
      display: block;
      width: 100%;
      height: calc(1.5em + .75rem + 2px);
      padding: .375rem .75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 2;
      color: #6e707e;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #d1d3e2;
      border-radius: .35rem;
      transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
      color: #6e707e;
      line-height: 28px;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
      display: block;
      padding-left: 0;
      padding-right: 0;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      margin-top: -2px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
      height: calc(1.5em + .75rem + 2px);
      position: absolute;
      top: 1px;
      right: 1px;
      width: 20px;
    }
  </style>
@endsection
@section('content')
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card shadow">
        <div class="card-body">
          <form method="POST" action="{{ route('store') }}" class="user">
          @csrf
            <div class="form-group">
              <label for="category">Category</label><br>
              <select
                class="select2 form-control"
                id="category"
                name="category"
                required
              >
                <option value="" disabled selected>-- Select Category --</option>
                @foreach ($category as $val)
                  <option value="{{ $val->id }}">{{ $val->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="start">Form</label><br>
              <select
                class="select2 form-control"
                id="start"
                name="start"
                required
              >
                <option value="" disabled selected>-- from where --</option>
                @foreach ($data['start'] as $val)
                  <option value="{{ $val }}">{{ $val }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="end">To</label><br>
              <select
                class="select2 form-control"
                id="end"
                name="end"
                required
              >
                <option value="" disabled selected>-- where are you going --</option>
                @foreach ($data['end'] as $val)
                  <option value="{{ $val }}">{{ $val }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="waktu">Departure Time</label>
              <input
                type="date"
                class="form-control"
                id="waktu"
                name="waktu"
                required
              />
            </div>
            <button type="submit" class="btn btn-warning btn-user btn-block mt-4" style="font-size: 16px">
              Ticket Search
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script src="{{ asset('vendor/select2/dist/js/select2.full.min.js') }}"></script>
  <script>
    if(jQuery().select2) {
      $(".select2").select2();
    }
  </script>
@endsection
