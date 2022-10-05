<x-guest-layout>
  <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="{{ route('login') }}" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    {{-- Logo Image --}}
                    <img width="40" height="40" src="{{ asset('assets/img/favicon/Untitled_design__20_-removebg-preview.png') }}" alt="Conaio">
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">Conaio</span>
                </a>
              </div>
              <!-- /Logo -->
              
              <p class="mb-4 text-center">Hi there👋 sign-in to your account</p>

               <!-- Session Status -->
              <x-auth-session-status class="mb-4" :status="session('status')" />

              <!-- Validation Errors -->
              <x-auth-validation-errors class="mb-4" :errors="$errors" />

              <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                  @csrf

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    :value="old('email')"
                    placeholder="Enter your email or username"
                    autofocus
                    required
                  />
                </div>


                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="{{ route('password.request') }}">
                      <small>Forgot Password?</small>
                    </a>
                  </div>

                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>


                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>


                <div class="mb-4">
                  <button class="btn btn-primary d-grid w-100" type="submit" style="background: #5F61E6">Sign in</button>
                </div>

                <div class="mb-3">
                  <a href="{{ route('redirectToGoogle') }}" class="btn btn-default p-2 shadow w-100" type="button" style="background: #ffffff">
                       <span><i class='bx bxl-google'></i></span> <span>Sign in with Google</span>
                  </a>
                </div>
              </form>

              <p class="text-center">
                <span>New on our platform?</span>
                <a href="{{ route('register') }}">
                  <span>Create an account</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>
</x-guest-layout>
