<div>
    <form class="row" wire:submit.prevent='submit'>

        <div>
            @if (session()->has('message'))
                <div class="alert alert-success my-sucess-alert">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="col-md-6">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Name"
               wire:model='settings.name'/>
        </div>
        @error('settings.name')
        <span class="text-danger">{{ $message }}</span>

        @enderror
        <div class="col-md-6">
            <label  class="form-label">Email</label>
            <input type="text" class="form-control" placeholder="Email"
            wire:model='settings.email' />
        </div>
        @error('settings.email')
        <span class="text-danger">{{ $message }}</span>

        @enderror
        <div class="col-md-6 mt-2">
            <label  class="form-label">Address</label>
            <input type="text" class="form-control" placeholder="Address"
            wire:model='settings.address' />
        </div>

        @error('settings.address')
        <span class="text-danger">{{ $message }}</span>

        @enderror
        <div class="col-md-6 mt-2">
            <label  class="form-label">phone</label>
            <input type="text" class="form-control" placeholder="Phone"
            wire:model='settings.phone' />
        </div>
        @error('settings.phone')
        <span class="text-danger">{{ $message }}</span>

        @enderror
        <div class="col-md-6 mt-2">
            <label  class="form-label">Facebook</label>
            <input type="text" class="form-control" placeholder="Facebook"
            wire:model='settings.facebook'/>
        </div>
        @error('settings.facebook')
        <span class="text-danger">{{ $message }}</span>

        @enderror
        <div class="col-md-6 mt-2">
            <label  class="form-label">Twitter</label>
            <input type="text" class="form-control" placeholder="Twitter"
            wire:model='settings.twitter'/>
        </div>
        @error('settings.twitter')
        <span class="text-danger">{{ $message }}</span>

        @enderror
        <div class="col-md-6 mt-2">
            <label  class="form-label">Instagram</label>
            <input type="text" class="form-control" placeholder="Instagram"
            wire:model='settings.instagram'/>
        </div>
        @error('settings.instagram')
        <span class="text-danger">{{ $message }}</span>

        @enderror
        <div class="col-md-6 mt-2">
            <label  class="form-label">LinkedIn</label>
            <input type="text" class="form-control" placeholder="LinkedIn"
            wire:model='settings.linkedin' />
        </div>
        @error('settings.linkedin')
        <span class="text-danger">{{ $message }}</span>

        @enderror
        <div class="col-md-12 mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

</div>
