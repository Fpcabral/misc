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
        <div class="flex flex-col space-x-4">
            @foreach ($this->record->items as $item)
                <p class="mb-2">{{ $item->item }}</p>
            @endforeach
        </div>
    </x-filament::section>

</x-filament-panels::page>
