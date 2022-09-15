<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    <input type="text" wire:model="name">
    <p>Helo {{ $name }}</p>

    <input type="text" wire:model.debounce.1000ms="text">
    <p>Ketik apa saja : {{ $text }}</p>

    <input type="checkbox" wire:model="loud">

    <select name="greeting" wire:model="greeting">
        <option value="Hello">Hello</option>
        <option value="Goodbye">Goodbye</option>
        <option value="Hi">Hi</option>
    </select>
    {{ $greeting }} {{ $name }} @if ($loud) ! @endif

    <hr>
    <select name="fruits" wire:model="fruits" multiple>
        <option value="Jeruk">Jeruk</option>
        <option value="Apel">Apel</option>
        <option value="Jambu">Jambu</option>
    </select>
    {{ implode(', ' , $fruits) }} 
    <button wire:click="resetFruit">Reset</button>
</div>
