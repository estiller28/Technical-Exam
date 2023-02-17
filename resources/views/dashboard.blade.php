<x-app-layout>
    @livewire('phone-book')
    @push('js')
        <script src="{{ asset('phone_book.js') }}"></script>
    @endpush
</x-app-layout>

