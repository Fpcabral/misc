<x-filament-panels::page @class([
    'fi-resource-view-record-page',
    'fi-resource-' . str_replace('/', '-', $this->getResource()::getSlug()),
    'fi-resource-record-' . $record->getKey(),
])>
    <x-filament::section>
        <x-slot name="heading">
            Lista
        </x-slot>

        {{-- Content --}}
        @foreach ($this->record->items as $item)
            <div class="mb-2">
                <p>{{ $item->item }}</p>
            </div>
        @endforeach
    </x-filament::section>

</x-filament-panels::page>
