<?php

namespace App\Http\Livewire\Contacts;

use App\Contact;
use App\Http\Filters\ContactFilter;
use Livewire\Component;

class ListComponent extends Component
{
    public $search;

    public $paginate = 10;

    protected $updatesQueryString = [
        'search'
    ];

    protected $listeners = [
        'contactStoredEvent' => 'handleStoredEvent'
    ];

    public function render()
    {
        $contacts = ContactFilter::apply(
            request(), (new Contact)->newQuery()
        )->latest()->paginate($this->paginate);

        return view('livewire.contacts.list-component', [
            'contacts' => $contacts
        ]);
    }

    public function handleStoredEvent($contact)
    {
        session()->flash('message', 'Contact with name ' . $contact['name'] . ' created successfully!');
    }
}
