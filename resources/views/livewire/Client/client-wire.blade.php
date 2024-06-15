<div class="container">
    <div class="card">

        <div class="card-header">
            <div class="row">
                <div class="col">
                <h1><a href="/" wire:navigate>Client List</a></h1>
                </div>
                <div class="col">
                    <a href="/pet" wire:navigate class="btn btn-primary float-end mr-2">Pet List</a>
                    <a href="/client/add/client" wire:navigate class="btn btn-success float-end">Add Client</a>
                </div>
            </div>
        </div>

        <div class="card-body">


            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">Middlename</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Address</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Client Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($client as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->firstname}}</td>
                            <td>{{$item->middlename}}</td>
                            <td>{{$item->lastname}}</td>
                            <td>{{$item->contact}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->gender}}</td>
                            <td>{{$item->client_status}}</td>
                            <td><a href="/client/edit/{{$item->client_Id}}" wire:navigate class="btn btn-primary btn-sm">Edit Client</a></td>
                            <td><button wire:click="delete({{$item->client_Id}})" wire:confirm="Are you sure you want to delete this client? " class="btn btn-danger">Delete</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
