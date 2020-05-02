<div class="card-body">
    <p>
        <b>Add new Contact</b> <br>
        Nixs sunt heuretess de ferox coordinatae, Compater de grandis species!
    </p>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="store">
        <div class="form-group">
            <label for="name">Name</label>
            <input wire:model="name"
                   type="text"
                   id="name"
                   name="name"
                   class="form-control @error('name') is-invalid @enderror"
                   placeholder="e.g Tukimin Sukirman"
            >
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input wire:model="phone"
                   type="text"
                   id="phone"
                   name="phone"
                   class="form-control @error('phone') is-invalid @enderror"
                   placeholder="e.g +628000000"
            >
            <small class="text-muted">Add contact phone number here with area code e.g +62xxxx</small> <br>
            @error('phone')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input wire:model="email"
                   type="email"
                   id="email"
                   name="email"
                   class="form-control @error('email') is-invalid @enderror"
                   placeholder="e.g ts9aul@email.id"
            >
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="text-right">
            <button type="button" class="btn btn-secondary" onclick="showCreateContactForm(false)">Close</button>
            <button class="btn btn-primary">Save data</button>
        </div>
    </form>
</div>
