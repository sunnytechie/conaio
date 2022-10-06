<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Make a Donation.</h5>
                        <form id="makePaymentForm">
                          @csrf
                            <div class="mb-3">
                              <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="bx bx-user"></i
                                ></span>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="name"
                                  value="{{ Auth::user()->name }}"
                                  aria-label="{{ Auth::user()->name }}"
                                  name="name"
                                  aria-describedby="basic-icon-default-fullname2"
                                />
                              </div>
                            </div>
                            
                            <div class="mb-3">
                              <label class="form-label" for="basic-icon-default-email">Email</label>
                              <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input
                                  type="email"
                                  id="email"
                                  class="form-control"
                                  name="email"
                                  value="{{ Auth::user()->email }}"
                                  aria-label="{{ Auth::user()->email }}"
                                  aria-describedby="basic-icon-default-email2"
                                />
                                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                              </div>
                              <div class="form-text">You can use letters, numbers & periods</div>
                            </div>

                            <div class="mb-3">
                              <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"
                                  ><i class="bx bx-phone"></i
                                ></span>
                                <input
                                  type="text"
                                  id="phone_number"
                                  class="form-control phone-mask"
                                  placeholder="658 799 8941"
                                  aria-label="658 799 8941"
                                  name="phone"
                                  aria-describedby="basic-icon-default-phone2"
                                />
                              </div>
                            </div>

                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Donation Type</label>
                                <select id="type" name="type" class="form-select" style="border-radius: 0; border: 0.1rem solid rgb(105, 104, 104)">
                                    <option disabled selected>Select Option</option>
                                    <option>CoN Mission Support</option>
                                    <option>CoN Project Support</option>
                                    <option>CoN Mission Partners</option>
                                    <option>Others</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Currency</label>
                                <select id="currency" name="currency" class="form-select" style="border-radius: 0; border: 0.1rem solid rgb(105, 104, 104)">
                                    <option disabled selected>Select option</option>
                                    <option>NGN</option>
                                    <option>USD</option>
                                    <option>GBP</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Amount</label>
                                <div class="input-group input-group-merge">
                                  <span id="basic-icon-default-numner" class="input-group-text"
                                    ><i class="bx bx-dollar"></i
                                  ></span>
                                  <input
                                    type="number"
                                    class="form-control"
                                    id="amount"
                                    placeholder="0000"
                                    aria-label="0000"
                                    name="amount"
                                    aria-describedby="basic-icon-default-numner"
                                  />
                                </div>
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
                              
                            <button type="submit" class="btn btn-primary">Make Payment</button>
                        </form> 
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  <!-- </div>
  <div class="row"> -->







    <!-- Modal -->
    <div class="modal fade" id="showModalOnPageLoad" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="showModalOnPageLoadTitle"><span class="text-center">STATEMENT OF NEED
                A Divine Call to Freely Give</span></h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">

              <p>
                We express our gratitude for your commitment to God and His Church through giving and rich generosity. In this “Decade of the Reign of God” (2020-2030), the primary vision of the Church of Nigeria (CON) Anglican Communion shall remain MISSIONS AND DISCIPLESHIP.
              </p>
              <p>
                The major implementation strategies required to actualize this visions are massive fund raising, resource mobilization and project execution. We call for your gracious support through giving, to meet with the huge budget required for this mission. Detailed mission report is found within the App under the feature titled; Primate Monthly. "Lift up your eyes, and look on the field, for they are white already to harvest..." May the Lord of harvest move our hearts unto going and groaning and move your hands unto giving in Jesus Christ Name.
              </p>

              <p>Henry Abuja</p>

              <p>Primate of All Nigeria</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
</x-app-layout>
