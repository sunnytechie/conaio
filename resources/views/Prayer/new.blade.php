<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            
        </div>
            <div class="row">
                    <div class="col-lg-8 offset-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Prayer Request </h5>
                                <div>
                                    <form action="{{ route('prayer.store') }}" method="POST">
                                        @csrf
                                        
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-phone">Your Phone No</label>
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
                                            <label class="form-label" for="basic-default-phone">Name your prayer request</label>
                                            <input
                                              type="text"
                                              id="basic-default-phone"
                                              class="form-control phone-mask"
                                              placeholder="Prayer of preservation"
                                              name="title"
                                              required
                                            />
                                          </div>
                                          <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Message</label>
                                            <textarea
                                              id="basic-default-message"
                                              class="form-control"
                                              name="prayer_request"
                                              placeholder="Write here..."
                                              required
                                            ></textarea>
                                          </div>
                                          <button type="submit" class="btn btn-primary" style="background: #5E60E4">Submit prayer</button>
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
