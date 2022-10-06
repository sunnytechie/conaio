<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            
        </div>
            <div class="row">
                    <div class="col-lg-8 offset-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Membership Registeration </h5>
                                <div>
                                    <form action="{{ route('member.store') }}" method="POST">
                                        @csrf

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-text">Your Fullname</label>
                                            <input
                                              type="text"
                                              id="basic-default-text"
                                              class="form-control"
                                              placeholder="Firstname Lastname"
                                              name="fullname"
                                              required
                                            />
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label" for="basic-default-email">Your Email</label>
                                            <input
                                              type="email"
                                              id="basic-default-email"
                                              class="form-control"
                                              value="{{ Auth::user()->email }}"
                                              name="email"
                                              required
                                            />
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label" for="basic-default-email">Member Email</label>
                                            <input
                                              type="email"
                                              id="basic-default-email"
                                              class="form-control"
                                              placeholder="E-mail Address"
                                              name="email2"
                                              required
                                            />
                                          </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-phone">Phone No</label>
                                            <input
                                              type="tel"
                                              id="basic-default-phone"
                                              class="form-control phone-mask"
                                              placeholder="+1 (159) 809-4493"
                                              name="phone"
                                              required
                                            />
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label" for="basic-default-date">Birthdate</label>
                                            <input
                                              type="date"
                                              id="basic-default-date"
                                              class="form-control"
                                              name="date_of_birth"
                                              required
                                            />
                                          </div>

                                          <div class="mb-3">
                                            <label for="defaultSelect" class="form-label">Province</label>
                                            <select id="province_id" name="province" class="form-select" style="border-radius: 0; border: 0.1rem solid rgb(105, 104, 104)">
                                              <option disabled selected>Select Option</option>
                                              @foreach ($provinces as $province)
                                                <option value="{{ $province->id }}">{{ $province->name }} {{ $province->state_name }}</option>
                                                @endforeach
                                            </select>
                                          </div>

                                          <div class="mb-3">
                                            <label for="defaultSelect" class="form-label">Diocese</label>
                                            <select id="diocese" name="diocese" class="form-select" style="border-radius: 0; border: 0.1rem solid rgb(105, 104, 104)"> </select>
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label" for="basic-default-text">LGA</label>
                                            <input
                                              type="text"
                                              id="basic-default-text"
                                              class="form-control"
                                              placeholder="Local Government Area"
                                              name="local_church_address"
                                              required
                                            />
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label" for="basic-default-text">Street</label>
                                            <input
                                              type="text"
                                              id="basic-default-text"
                                              class="form-control"
                                              placeholder="Street Address"
                                              name="street"
                                              required
                                            />
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label" for="basic-default-text">City</label>
                                            <input
                                              type="text"
                                              id="basic-default-text"
                                              class="form-control"
                                              placeholder="City"
                                              name="city"
                                              required
                                            />
                                          </div>

                                          <div class="mb-3">
                                            <label class="form-label" for="basic-default-text">State</label>
                                            <input
                                              type="text"
                                              id="basic-default-text"
                                              class="form-control"
                                              placeholder="State"
                                              name="state"
                                              required
                                            />
                                          </div>


                                          <button type="submit" class="btn btn-primary" style="background: #5E60E4">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
              
              
            </div>
    </div>
  <!-- </div>
  <div class="row"> -->

</x-app-layout>
