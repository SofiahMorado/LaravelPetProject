<div class="container">
    <div class="card">

        <div class="card-header">
            <div class="row">
                <div class="col">
                <h1><a href="/" wire:navigate>Add Client</a></h1>
                </div>
                <div class="col">
                <a href="/client" wire:navigate class="btn btn-primary float-end">Client List</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form wire:submit="newClient">
                <div class="form-group">
                    <label for="firstName">First name</label>
                    <input type="text" wire:model="firstname" class="form-control" id="firstname" name="firstname" placeholder="Enter first name">
                    @error('firstname')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group"> 
                    <label for="lastName">Middle name</label>
                    <input type="text" wire:model="middlename" class="form-control" id="middlename" name="middlename" placeholder="Enter middle name">
                    @error('middlename')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lastName">Last name</label>
                    <input type="text" wire:model="lastname" class="form-control" id="lastname" name="lastname" placeholder="Enter last name">
                    @error('lastname')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" wire:model="contact" class="form-control" id="contact" name="contact" placeholder="Enter contact number">
                    @error('contact')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text"  wire:model="address" class="form-control" id="address" name="address" placeholder="Enter address">
                    @error('address')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" wire:model="gender" id="gender" name="gender">
                        <option selected>Choose...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('gender')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="client_status">Client Status</label>
                    <select class="form-control" wire:model="client_status" id="client_status" name="client_status">
                        <option selected>Choose...</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @error('client_status')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success mt-2">Submit</button>
            </form>
        </div>
        </div>
    </div>
</div>