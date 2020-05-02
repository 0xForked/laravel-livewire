<div class="card-body" xmlns:wire="http://www.w3.org/1999/xhtml">
    <p>
        <b>Contact List</b> <br>
        Nixs sunt heuretess de ferox coordinatae, Compater de grandis species!
    </p>
    <div class="d-flex mb-3">
        <div class="form-inline">
            <label for="paginate">Paginate</label>
            <select name="paginate"
                    class="form-control d-inline ml-2"
                    id="paginate"
                    wire:model="paginate"
            >
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
        <div class="ml-auto form-inline">
            <label for="search">Search</label>
            <input type="text"
                   id="search"
                   wire:model="search"
                   class="form-control ml-2"
                   placeholder="search by name . . .">
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->email}}</td>
                    <td>
                        <button class="btn btn-sm btn-info text-white">Edit</button>
                        <button class="btn btn-sm btn-danger text-white">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
<div class="card-footer">
    <div class="d-flex">
        <div class="mx-auto">
            {{ $contacts->links() }}
        </div>
    </div>
</div>
