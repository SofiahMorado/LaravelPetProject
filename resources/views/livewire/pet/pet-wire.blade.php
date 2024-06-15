<div class="container">
    <div class="card">

        <div class="card-header">
            <div class="row">
                <div class="col">
                <h1><a href="/" wire:navigate>Pet List</a></h1>
                </div>
                <div class="col">
                 <a href="/client" wire:navigate class="btn btn-primary float-end ">Client List</a>
                 <a href="/pet/add/pet" wire:navigate class="btn btn-success float-end ml-2">Add Pet</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pet Name</th>
                        <th scope="col">Owner's Name</th>
                        <th scope="col">Breed</th>
                        <th scope="col">Color</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Species</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pet as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->pet_name}}</td>
                                <td>{{$item->client->firstname}} {{$item->client->lastname}}</td>
                                <td>{{$item->breed}}</td>
                                <td>{{$item->color}}</td>
                                <td>{{$item->birthday}}</td>
                                <td>{{$item->gender}}</td>
                                <td>{{$item->weight}}</td>
                                <td>{{$item->species}}</td>
                                <td><a href="/pet/edit/{{$item->pet_id}}" wire:navigate class="btn btn-primary btn-sm">Edit Pet</a></td>
                                <td><button wire:click="delete({{$item->pet_id}})" wire:confirm="Are you sure you want to delete this pet? " class="btn btn-danger">Delete</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>
