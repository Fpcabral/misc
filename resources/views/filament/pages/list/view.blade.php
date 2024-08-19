<x-filament-panels::page @class([
    'fi-resource-view-record-page',
    'fi-resource-' . str_replace('/', '-', $this->getResource()::getSlug()),
    'fi-resource-record-' . $record->getKey(),
])>
    @foreach ($this->record->items as $item)
        <div>
            <p>{{ $item->item }}</p>
        </div>
    @endforeach

</x-filament-panels::page>
