@props(["bg_color","text","text_color","route"])
<div class="font-medium text-lg">
    <form action="{{ $route }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"
                class="{{ $bg_color }} {{ $text_color }} rounded-lg py-1 px-10 hover:scale-105 transition-all">
            {{ $text }}
        </button>
    </form>
</div>
