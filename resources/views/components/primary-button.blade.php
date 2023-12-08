<button {{ $attributes->merge(['type' => 'submit', 'class' => '

    inline-flex items-center px-4 py-2 bg-blue-600 dark:bg-blue-400
    border border-transparent rounded-md font-semibold text-xs text-white
    dark:text-gray-100 uppercase tracking-widest hover:bg-teal-500
    dark:hover:bg-teal-200 focus:bg-teal-700 dark:focus:bg-teal-100
    active:bg-blue-400 dark:active:bg-blue-300 focus:outline-none
    focus:ring-2 focus:ring-blue-300 focus:ring-offset-2
    dark:focus:ring-offset-blue-800 transition ease-in-out duration-150

    ']) }}>
    {{ $slot }}
</button>
