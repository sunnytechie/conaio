<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <button
                          type="button"
                          class="btn btn-primary mb-3"
                          data-bs-toggle="modal"
                          data-bs-target="#modalCenter"
                          style="background: #5E60E4">
                          Share a testimony
                        </button>
            </div>
        </div>
            <div class="row">
                @foreach ($testimonies as $testimony)
                    <div class="col-lg-8 offset-md-2 mb-4">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title text-primary">{{ $testimony->title }} </h5>
                            <p class="mb-4">
                                {{ $testimony->body }}
                            </p>
                            </div>
        
                            <div class="card-footer d-flex justify-content-end">
                                <span>{{ $testimony->fullname }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
              
              
            </div>
    </div>
  <!-- </div>
  <div class="row"> -->

    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <form action="{{ route('testimony.store') }}" method="POST">
                @csrf

                <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                    <label for="nameWithTitle" class="form-label">Title</label>
                    <input
                        type="text"
                        id="nameWithTitle"
                        class="form-control"
                        name="title"
                        placeholder="Enter Title of your testimony"
                        required
                    />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-0">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Message</label>
                            <textarea
                            id="basic-default-message"
                            class="form-control"
                            name="body"
                            placeholder="Write your testimony..."
                            required
                            ></textarea>
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary" style="background: #5E60E4">Share now!</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
