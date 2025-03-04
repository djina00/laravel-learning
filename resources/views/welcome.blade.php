{{-- @extends('app')

@section('contents')

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
        @if (false)     
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        @endif
        </p>
      </div>
    </div>
  </section>

  {{-- Observer --}}
  {{-- <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <button type="submit">Save</button>
  </form>

  @include('gallery')

@endsection --}} 

{{-- @push('scripts')
<script>
    $(document).ready(function(){

        alert("This is for Dashboard page!");
    })
  </script>
@endpush --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>{{ __('frontend.welcome') }}</h1>

  <p>{{ __('frontend.welcome.description') }}</p>
</body>
</html>