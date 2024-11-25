@props(['action', 'method'])

<form action="{{ $action }}" method="{{ $method }}">
    @csrf
    <x-inputs.input-and-label label_text="Prénom" type="text" placeholder="ex: Robert"/>
    <x-inputs.input-and-label label_text="Nom" type="text" placeholder="ex: Neuville"/>
    <x-inputs.input-and-label label_text="Date" type="text" placeholder="ex: 12/09/2024"/>
    <x-inputs.input-and-label-number label_text="Montant" type="number" placeholder="ex: 20"/>
    <x-buttons.form-button text="Enregistrer"/>
</form>
