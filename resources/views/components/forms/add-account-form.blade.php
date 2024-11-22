@props(['action', 'method'])

<form action="{{ $action }}" method="{{ $method }}">
    @csrf
    <x-inputs.input-and-label label_text="Nom" type="text" placeholder="ex: asbl des ruches de Belgique"/>
    <x-inputs.textarea-and-label label_text="Description" type="text" placeholder="ex: Projet qui sauve les ruches de Belgique"/>
    <x-buttons.form-button text="Enregistrer"/>
</form>
