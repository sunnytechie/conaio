<x-guest-layout>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner">
            <!-- Register Card -->
            <div class="card">
              <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                  <a href="{{ route('login') }}" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo">
                      <img width="40" height="40" src="{{ asset('assets/img/favicon/Untitled_design__20_-removebg-preview.png') }}" alt="Conaio">
                    </span>
                    <span class="app-brand-text demo text-body fw-bolder">Conaio</span>
                  </a>
                </div>
                <!-- /Logo -->
                <p class="mb-4">Reset your password for Conaio!</p>

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
  
                <form id="formAuthentication" class="mb-3" action="{{ route('password.update') }}" method="POST">
                    @csrf

                    <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                 <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <x-text-input 
                    type="email" 
                    class="form-control shadow-none rounded-0" 
                    id="email" 
                    type="email" 
                    name="email" :value="old('email', $request->email)" 
                    required 
                    />
                  </div>

                  <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        placeholder="New Password"
                        aria-describedby="password"
                        required
                      />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  </div>

                  <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Confirm Password</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password_confirmation" 
                        required
                        placeholder="Repeat Password"
                        aria-describedby="password"
                      />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  </div>
  
                  
                  <button type="submit" class="btn btn-primary d-grid w-100" style="background: #5F61E6">Reset Password</button>
                </form>
  
                <p class="text-center">
                  <span>Already have an account?</span>
                  <a href="{{ route('login') }}">
                    <span>Sign in instead</span>
                  </a>
                </p>
              </div>
            </div>
            <!-- Register Card -->
          </div>
        </div>
      </div>
</x-guest-layout>
