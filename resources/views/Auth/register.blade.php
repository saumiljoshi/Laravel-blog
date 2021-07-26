<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
    
                    <div class="card-body">
                        <form method="POST" action="/register">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>
                                <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" required autocomplete="name" autofocus>
                                
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                           @enderror    
                        </div>
                           <div class="form-group">
                                <label for="email" class="col-form-label text-md-right">{{ __('email') }}</label>
                                <input type="text" name="email"  class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" required autocomplete="email" autofocus>
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                
                            @enderror
                        </div>      
                            <div class="form-group">
                                <label for="password" class="col-form-label text-md-right">{{ __('password') }}</label>
                                <input type="password" name="password"  class="form-control @error('email') is-invalid @enderror" value="{{old('password')}}" required autocomplete="password" autofocus>
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>            
                            <div class="form-group">
                                <label for="phone_no" class="col-form-label text-md-right">{{ __('phone_no') }}</label>
                                <input type="number" name="phone_no"  class="form-control @error('phone_no') is-invalid @enderror" value="{{old('phone_no')}}" required autocomplete="phone_no" autofocus>
                                
                                @error('phone_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-form-label text-md-right">{{ __('address') }}</label>
                                <input type="text" name="address"  class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}" required autocomplete="address" autofocus>
                                
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>  
                            <div class="form-group">
                                <label for="city" class=" col-form-label text-md-right">{{ __('city') }}</label>
                                <input type="text" name="city"  class="form-control @error('city') is-invalid @enderror" value="{{old('city')}}" required autocomplete="city" autofocus>
                                
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>   
                            <div class="form-group">
                                <label for="state" class=" col-form-label text-md-right">{{ __('state') }}</label>
                                <input type="text" name="state"  class="form-control @error('state') is-invalid @enderror" value="{{old('state')}}" required autocomplete="state" autofocus>
                                
                                @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div> 
                            <div class="form-group">
                                <label for="Zip" class="col-form-label text-md-right">Zip</label>
                                <input type="text" name="Zip"  class="form-control @error('Zip') is-invalid @enderror" value="{{old('Zip')}}" required autocomplete="Zip" autofocus>
                                
                                @error('Zip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="submit" />
                        </div>                     
                        <div>
                            <a href="/login" class="text-xs text-gray-500 mt-7 font-bold cursor-pointer place-self-center">already registered,login here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>