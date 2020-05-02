<?php

namespace App\Http\Livewire\Contacts;

use App\Contact;
use Livewire\Component;

class CreateComponent extends Component
{
    public $name;

    public $phone;

    public $email;

    public function render()
    {
        return view('livewire.contacts.create-component');
    }

    public function store()
    {
        $callback = $this->onActionSubmitted();

        $this->onActionCompleted($callback);
    }

    private function onActionSubmitted()
    {
        $validated_data = $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        return Contact::create($validated_data);
    }

    private function onActionCompleted($contact)
    {
        [$this->name, $this->email, $this->phone] = null;

        $this->emit('contactStoredEvent', $contact);
    }
}
