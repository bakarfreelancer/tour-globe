@extends('layouts.admin.dashboard')

@section('dashboard.content')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<div class="card mt-4">
    <div class="card-header">
        <h2>Add Trip Location</h2>
      {{-- Add details --}}
    </div>
    <div class="card-body">
        <form id="locationAddForm" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="col-md-8">
              <div class="mb-3">
                <label for="title" class="form-label">Place Name</label>
                <input type="text" class="form-control" id="title" name="title" value="Mark" required>
                <div class="invalid-feedback">
                  Title is required.
                </div>
              </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" name="country" id="country" required>
                        <option value="Pakistan" selected>Select country</option>
                        @foreach ($countries as $country)
                            <option value="{{$country}}">{{$country}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Select country.
                    </div>
                </div>
                <div>
                    <label for="featuredImage" class="form-label">Featured Image</label>
                    <div class="input-group has-validation">
                        <input type="file" name="featuredImage" accept="image/*" class="form-control featuredImage" id="featuredImage" required>
                        <div class="invalid-feedback">
                            Please add featured image.
                        </div>
                    </div>
              </div>
            </div>
            <div class="col-md-4 align-self-center">
                <img 
                class="w-100 rounded"
                id="featuredImageDisplay"
                src="/images/featured-placeholder.png" 
                alt="Featured Image">
            </div>
            <div class="col-12">
              <label for="validationCustom04" class="form-label">Description</label>
              {{-- <input class="form-control" type="text" name="description" id="description"> --}}
              <textarea id="description" name="description"></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Publish</button>
            </div>
          </form>
    </div>
  </div>

  <script>

    (function(){
      const featuredPlaceholder = document.getElementById('featuredImageDisplay');
        document.getElementById('featuredImage').addEventListener('change',function(e){
        const file = e.target.files[0];
        if(file){//If image is selected then show that image
          const reader = new FileReader();
          reader.onload = function(e){
          featuredPlaceholder.src = e.target.result;
          }
          reader.readAsDataURL(file);
        }else{//else show default placeholder.
          featuredPlaceholder.src = '/images/featured-placeholder.png';
        }
      }) 
    }());
  </script>
  
  <script>
    CKEDITOR.replace( 'description' ,{
      height: '300px'
    });
</script>
<script>
  (function(){
    document.getElementById('locationAddForma').addEventListener('submit', function(e){
      e.preventDefault();
      const formData = new FormData(e.target);
      const token = formData.get('_token');
      const data = {
        title : formData.get('title'),
        country : formData.get('country'),
        featuredImage : formData.get('featuredImage'),
        description : CKEDITOR.instances.description.getData(),
      }
      
      fetch('{{route("location.store")}}', {
                method: 'POST',
                headers: {
                  'Accept': 'application/json',
                  "Content-Type": "application/json",
                  'X-CSRF-TOKEN': token
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    })
  }())
</script>
  
@endsection