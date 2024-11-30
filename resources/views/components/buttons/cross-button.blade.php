@props(['route', 'position_x', 'position_y'])

<button type="button" @click="open = false" class="w-31 h-31 absolute {{ $position_x }} {{ $position_y }} group">
    <svg width="20" height="20" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-plus transition-all">
        <path d="M3 3L28 28" stroke="" stroke-width="4" stroke-linecap="round"/>
        <path d="M28 3L3 28" stroke="" stroke-width="4" stroke-linecap="round"/>
    </svg>
</button>
