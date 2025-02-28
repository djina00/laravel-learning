@extends('app')
@section('contents')
    <section>
       <div class="row justify-content-center">
        <div class="col-md-6">
            {{-- $erros - we can access only in blade files, it is prebuild variable in laravel --}}
           
            <div class="card mt-5 mb-5">
                <div class="card-body">
                    <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                       
                        {{-- <input type="hidden" name="__token" value="{{ csrf_token() }}" /> --}}
                        @csrf
                        <div class="mb-3">
                          <label for="">File</label>
                          <input type="file" class="form-control" id="" name="file" />
                            @error('file')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                   </div>
                </div>
            </div>
           </div>
           <table>
            <tbody>
                {{-- we pass $files like parameter from FileUploadController
                
                asset() give us dynamic path of main public folder
                
                
                --}}
                @foreach ($files as $file)
                <td><img src="{{ asset($file->file_path) }}" alt="">
                </td>
                @endforeach
                
            </tbody>
           </table>
            <hr>
           <table>
            <tbody>
                {{-- When we want to access files from public folder inside storage folder --}}
                {{-- @foreach ($files as $file) --}}
                <td>
                    <a href="{{ route('file.download') }}">Download file</a>
                </td>
                {{-- @endforeach --}}
                
            </tbody>
           </table>
       </div>
    </section>
@endsection