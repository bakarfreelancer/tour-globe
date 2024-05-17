@extends('layouts.admin.dashboard')

@section('dashboard.content')
<div class="card mt-4">
    <div class="card-header">
        <h2>Add Trip Location</h2>
      {{-- Add details --}}
    </div>
    <div class="card-body">
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-12">
              <label for="validationCustom01" class="form-label">Place Name</label>
              <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" name="country" id="country">
                        <option value="">Select country</option>
                        @foreach ($countries as $country)
                            <option value="{{country}}">{{country}}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div>
                    <label for="validationCustomUsername" class="form-label">Featured Image</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please add featured image.
                        </div>
                    </div>
              </div>
            </div>
            <div class="col-md-4">
                <h2>Image</h2>
            </div>
            <div class="col-md-3">
              <label for="validationCustom04" class="form-label">State</label>
              <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Add</button>
            </div>
          </form>
    </div>
  </div>
@endsection