<div>
    <form
        wire:submit="handleSubmit">
        <div class="mb-3 mb-md-5">
            <label for="contact_name" class="form-label">
                Your Name (required)
            </label>
            <input type="text" class="form-control" id="contact_name" name="name" required
                   wire:model="form.name">
        </div>
        <div class="mb-3 mb-md-5">
            <label for="contact_email" class="form-label">
                Your Email (required)
            </label>
            <input type="email" class="form-control" id="contact_email" name="email" required
                   wire:model="form.email">
        </div>
        <div class="mb-3 mb-md-5">
            <label for="contact_subject" class="form-label">
                Subject
            </label>
            <input type="text" class="form-control" id="contact_subject" name="subject"
                   wire:model="form.subject">
        </div>
        <div class="mb-3 mb-md-5">
            <label for="contact_message" class="form-label">
                Your Message
            </label>
            <textarea class="form-control" id="contact_message" rows="3"
                      wire:model="form.message"></textarea>
        </div>
        <div class="mb-3 mb-md-5">
            <button type="submit" class="btn font:gotham-rounded fw-bold text-color:green fs-5"
                    wire:loading.remove>
                Send
            </button>
            <button disabled class="btn font:gotham-rounded fw-bold text-color:green fs-5 disabled"
                    wire:loading>
                Sending...
            </button>
        </div>
    </form>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oh no!</strong> {{ session('danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
