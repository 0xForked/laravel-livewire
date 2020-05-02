@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
    <section id="welcome p-5">
        <div class="page-title mt-5 mb-5">
           <div class="d-flex">
               <div class="w-100">
                   <h1>Contacts</h1>
                   <p>Nixs sunt heuretess de ferox coordinatae, Compater de grandis species!</p>
               </div>
               <div class="flex-shrink-1">
                   <button class="btn btn-primary mt-3"
                           onclick="showCreateContactForm(true)"
                           id="button-show-create-content-container"
                   >
                       Create
                   </button>
               </div>
           </div>
        </div>
        <div class="card mb-5 d-none" id="create-content-container">
            <livewire:contacts.create-component/>
        </div>
        <div class="card mb-5">
            <livewire:contacts.list-component/>
        </div>
    </section>
@endsection

@section('custom-script')
    <script>
        function showCreateContactForm(status)
        {
            let container = $('#create-content-container')
            let button = $('#button-show-create-content-container')
            if (status) {
                container.removeClass('d-none')
                button.addClass('d-none')
            } else {
                container.addClass('d-none')
                button.removeClass('d-none')
            }
        }
    </script>
@endsection
