<x-frontend.css />
<div class="auth-page-content">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
      <div class="card mt-4">
        <div class="card-body p-4">
          <div class="text-center mt-2">
            <img src="{{ asset('assets/images/logos/footer-digi-logo.jpg') }}" alt="" height="80">
            <h5 class="text-primary">Welcome Back !</h5>
            <p class="text-muted">Sign in to continue to Digi Softron Technology.</p>
          </div>
          <div class="p-2 mt-4">
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="mb-3">
                <label for="username" class="form-label">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="mb-3">
                <div class="float-end">
                  <a href="auth-pass-reset-basic.html" class="text-muted">Forgot password?</a>
                </div>
                <label class="form-label" for="password-input">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>


              </div>
              <div class="mt-4">
                <button class="btn btn-success w-100" type="submit">Sign In</button>
              </div>
            </form>
          </div>
        </div>
        <!-- end card body -->
      </div>
    </div>
  </div>
</div>
<x-frontend.js />