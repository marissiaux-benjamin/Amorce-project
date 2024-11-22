<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-6 py-2 bg-[#2E2E2E] rounded-lg font-semibold text-[#FCC940] transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
