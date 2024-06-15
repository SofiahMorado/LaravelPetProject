<div class="container">
    <div class="card">

        <div class="card-header">
            <div class="row">
                <div class="col">
                <h1><a href="/" wire:navigate>Edit Pet</a></h1>
                </div>
                <div class="col">
                <a href="/pet" wire:navigate class="btn btn-primary float-end">Pet List</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @else

                <form wire:submit="update">
                    <div class="form-group">
                        <label for="client_id">Pet Owner</label>
                        <select wire:model="client_id" class="form-control" id="client_id" name="client_id">
                                <option value="">Select Owner</option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->client_id }}">{{ $client->firstname }} {{ $client->lastname }}</option>
                            @endforeach
                        </select>
                        @error('client_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pet_name">Pet Name</label>
                        <input type="text" wire:model="pet_name" class="form-control" id="pet_name" name="pet_name" placeholder="Enter pet name">
                        @error('pet_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="breed">Pet Breed</label>
                        <input type="text" wire:model="breed" class="form-control" id="breed" name="breed" placeholder="Enter Pet's Breed">
                        @error('breed')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="color">Pet Color</label>
                        <input type="text" wire:model="color" class="form-control" id="color" name="color" placeholder="Enter Pet's Color">
                        @error('color')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="birthday">Pet Birthday</label>
                        <input type="date" wire:model="birthday" class="form-control" id="birthday" name="birthday">
                        @error('birthday')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="gender">Pet Gender</label>
                        <select wire:model="gender" class="form-control" id="gender" name="gender">
                            <option selected>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        @error('gender')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="weight">Pet Weight (kg)</label>
                        <input type="number" wire:model="weight" class="form-control" id="weight" name="weight" placeholder="Enter Pet's Weight">
                        @error('weight')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="species">Pet Species</label>
                        <input type="text" wire:model="species" class="form-control" id="species" name="species" placeholder="Enter Pet's Species">
                        @error('species')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success mt-2">Submit</button>
                </form>
            @endif
        </div>
        </div>
    </div>
</div>