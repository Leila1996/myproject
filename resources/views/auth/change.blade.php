@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">please upload your photo</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" id="file" name="photo">

                               
                            </div>
                        </div>






                          <div class="form-group row">
                            <label for="profession" class="col-md-4 col-form-label text-md-right">profession</label>

                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" id="basic-url"  name="profession">
                               
                            </div>
                        </div>


                          


                       


                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">telephone</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="basic-url"  name="tel" value="+231" >

                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">Civiliter</label>

                            <div class="col-md-6"><table width="100%">

                               <tr><td>
                                 <input type="radio" class="form-control" id="basic-url" name="civilite" value="M" checked><label>M.</label></td>
                                 <td><input type="radio" class="form-control" id="basic-url" name="civilite" value="Mme"><label>Mme.</label></td>
                                  <td><input type="radio" class="form-control" id="basic-url" name="civilite" value="Mlle"><label>Mlle.</label></td>
                               </tr>
                               </table>
                            </div>
                        </div>
                           

                           <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">niveau</label>

                            <div class="col-md-6"><table width="100%">

                               <tr><td>
                             <select class="form-control" id="basic-url" name="niveau">
                                 <option  class="form-control" id="basic-url" value="Licence">Licence</option>
                                 <option class="form-control" id="basic-url" value="Master">Master</option>
                                 <option class="form-control" id="basic-url" value="Doctorat" selected>Doctorat</option>
                             </select>
                               </td>

                               </tr>
                               </table>
                            </div>
                        </div>







                               






                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
