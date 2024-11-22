@props(["bg_color","text","text_color","action", "method"])
<div class="font-medium text-lg">
    <form action="{{ $action }}" method="{{ $method }}">
        @csrf

        <button type="submit"
                class="{{ $bg_color }} {{ $text_color }} rounded-xl py-1 px-10 hover:scale-105 transition-all">
            {{ $text }}
        </button>
    </form>
</div>
