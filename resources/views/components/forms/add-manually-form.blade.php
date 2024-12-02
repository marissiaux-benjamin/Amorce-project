@props(['action', 'method'])

<form action="{{ $action }}" method="{{ $method }}">
    @csrf
    <x-inputs.input-and-label label_text="Prénom" type="text" placeholder="ex: Robert" field="" for="name" name="name" id="name"/>
    <x-inputs.input-and-label label_text="Nom" type="text" placeholder="ex: Neuville" field="" for="surname" name="surname" id="surname"/>
    <x-inputs.input-and-label label_text="Date" type="text" placeholder="ex: 12/09/2024" field="" for="date" name="date" id="date"/>
    <x-inputs.input-and-label-number label_text="Montant" type="number" placeholder="ex: 20" field="" for="amount" name="amount" id="amount"/>
    <x-buttons.form-button text="Enregistrer"/>
</form>
