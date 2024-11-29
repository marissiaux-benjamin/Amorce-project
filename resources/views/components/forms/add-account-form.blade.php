@props(['action', 'method'])

<form action="{{ $action }}" method="{{ $method }}">
    @csrf
    <x-inputs.input-and-label label_text="Nom du compte" type="text" placeholder="ex: Robert Industries"/>
    <x-inputs.textarea-and-label label_text="Description du compte" placeholder="entreprise qui vise à rendre le recyclage plus facile" type="text"/>
    <x-buttons.form-button text="Enregistrer"/>
</form>

