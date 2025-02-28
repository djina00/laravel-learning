@extends('app');
@section('contents')
    <section>
       <div class="row justify-content-center">
        <div class="col-md-6">
            {{-- $erros - we can access only in blade files, it is prebuild variable in laravel --}}
            @if ($errors->any())
                @foreach ($errors->all() as $error)
               <div class="mt-4">
                <div class="alert alert-danger">
                    {{ $error }}

                </div>
               </div>
                @endforeach
            @endif
            <div class="card mt-5 mb-5">
                <div class="card-body">
                    <form action="{{ route('contact.submit') }}" method="POST">
                       
                        {{-- <input type="hidden" name="__token" value="{{ csrf_token() }}" /> --}}
                        @csrf
                        <div class="form-group">
                          <label for="">Name</label>
                          <input type="text" class="form-control" id="" name="name" value="{{ old('name') }}"/>
                         
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="" name="email" value="{{ old('email') }}"/>
                           
                          </div>
                          <div class="form-group">
                            <label for="">Subject</label>
                            <input type="text" class="form-control" id="" name="subject" value="{{ old('subject') }}"/>
                           
                          </div>
                          <div class="form-group">
                            <label for="">Message</label>
                           <textarea class="form-control" id="" cols="30" rows="10" name="message">{{ old('message') }}</textarea>
                           
                          </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                   </div>
                </div>
            </div>
           </div>
       </div>
    </section>
@endsection