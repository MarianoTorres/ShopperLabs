<div class="overflow-hidden">
    @if($inventories->count() > 1)
        <div class="p-4 sm:px-5 relative flex items-center justify-between border-b border-secondary-200">
            <span class="relative z-0 inline-flex shadow-sm rounded-md">
                <span class="relative inline-flex items-center px-2 py-2 rounded-l-md border-r-0 border border-secondary-300 bg-white">
                    <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </span>
                <x-shopper::forms.select wire:model="inventory" id="inventory" class="-ml-px block pl-3 pr-9 py-2 rounded-l-none rounded-r-md" aria-label="{{ __('Select inventory') }}">
                    @foreach($inventories as $inventory)
                        <option value="{{ $inventory->id }}">{{ $inventory->name }}</option>
                    @endforeach
                </x-shopper::forms.select>
            </span>
            <div class="relative z-0 inline-flex items-center leading-5 text-secondary-700">
                <span class="block text-sm font-medium mr-4">{{ __('Quantity Available') }}</span>
                <span class="mr-2 text-sm px-2 inline-flex leading-5 font-medium rounded-full {{ $product->stock < 10 ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">
                    {{ $product->stock }}
                </span>
            </div>
        </div>
    @endif
    <div class="flex items-center justify-between px-4 sm:px-6 mb-2 py-6">
        <div class="relative z-0 inline-flex items-center leading-5 text-secondary-700">
            <span class="block text-sm font-medium mr-4">{{ __('Current quantity on this inventory') }}</span>
            <span class="mr-2 text-sm px-2 inline-flex leading-5 font-medium rounded-full {{ $currentStock < 10 ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">
                {{ $currentStock }}
            </span>
        </div>
        <div class="ml-4">
            <div class="flex items-center">
                <div class="flex items-center pr-4">
                    <p class="text-sm font-medium text-secondary-600 mr-4">{{ $realStock }}</p>
                    <div>
                        <div class="flex rounded-md shadow-sm">
                            <div class="relative flex items-stretch grow focus-within:z-10">
                                <input wire:model="value" type="number" aria-label="{{ __('Stock number value') }}" id="stockValue" step="1" min="0" class="form-input block w-32 transition duration-150 rounded-none rounded-l-md ease-in-out sm:text-sm sm:leading-5" placeholder="12" />
                            </div>
                            <button wire:click="decrementStock" type="button" class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-secondary-300 text-sm font-medium rounded-none text-secondary-700 bg-secondary-50 hover:bg-secondary-100 focus:outline-none focus-border-2 focus:border-primary-500 focus:border-primary-500">
                                <span>&minus;</span>
                            </button>
                            <button wire:click="incrementStock" type="button" class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-secondary-300 text-sm font-medium rounded-r-md text-secondary-700 bg-secondary-50 hover:bg-secondary-100 focus:outline-none focus-border-2 focus:border-primary-500 focus:border-primary-500">
                                <span>&plus;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                    <x-shopper::buttons.primary wire:click="updateCurrentStock" wire.loading.attr="disabled" type="button">
                        <x-shopper::loader wire:loading wire:target="updateCurrentStock" class="text-white" />
                        {{ __('Update') }}
                    </x-shopper::buttons.primary>
                    @if($histories->isNotEmpty())
                        <div class="flex items-center pl-4 space-x-4">
                            <x-shopper::buttons.default wire:click="export" type="button">
                                <svg class="w-5 h-5 -ml-1 pr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                                </svg>
                                {{ __('Export') }}
                            </x-shopper::buttons.default>
                        </div>
                    @endif
                </div>
            </div>
            @error('value')
                <p class="mt-2 text-sm text-red-600">{{ __('This number must be an integer.') }}</p>
            @enderror
        </div>
    </div>
    @if($histories->isEmpty())
        <div class="flex flex-col items-center justify-center p-4 sm:p-6">
            <span class="shrink-0">
                <svg class="h-12 w-12 text-cool-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </span>
            <h3 class="font-medium py-5 text-cool-secondary-400 text-xl">{{ __('No adjustments made to inventory.') }}</h3>
        </div>
    @else
        <div class="flex flex-col">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full overflow-hidden">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b border-secondary-200 bg-secondary-50 text-left text-sm leading-4 font-medium text-secondary-700 tracking-wider">
                                    {{ __('Date') }}
                                </th>
                                <th class="px-6 py-3 border-b border-secondary-200 bg-secondary-50 text-left text-sm leading-4 font-medium text-secondary-700 tracking-wider">
                                    {{ __('Event') }}
                                </th>
                                <th class="px-6 py-3 border-b border-secondary-200 bg-secondary-50 text-left text-sm leading-4 font-medium text-secondary-700 tracking-wider">
                                    {{ __('Inventory Place') }}
                                </th>
                                <th class="px-6 py-3 border-b border-secondary-200 bg-secondary-50 text-right text-sm leading-4 font-medium text-secondary-700 tracking-wider">
                                    {{ __('Adjustment') }}
                                </th>
                                <th class="px-6 py-3 border-b border-secondary-200 bg-secondary-50 text-right text-sm leading-4 font-medium text-secondary-700 tracking-wider">
                                    {{ __('Quantity Movement') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-secondary-100">
                            @foreach($histories as $inventoryHistory)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-secondary-500">
                                        {{ $inventoryHistory->created_at->diffForHumans() }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-secondary-500">
                                        {{ __($inventoryHistory->event) }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-secondary-500">
                                        {{ $inventoryHistory->inventory->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-right {{ $inventoryHistory->old_quantity > 0 ? 'text-green-500': 'text-red-500' }}">
                                        {{ $inventoryHistory->adjustment }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-right {{ $inventoryHistory->quantity > 0 ? 'text-secondary-500': 'text-red-500' }}">
                                        {{ $inventoryHistory->quantity }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-secondary-200 sm:px-6">
                <div class="flex-1 flex justify-between sm:hidden">
                    {{ $histories->links('shopper::livewire.wire-mobile-pagination-links') }}
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm leading-5 text-secondary-700">
                            {{ __('Showing') }}
                            <span class="font-medium">{{ ($histories->currentPage() - 1) * $histories->perPage() + 1 }}</span>
                            {{ __('to') }}
                            <span class="font-medium">{{ ($histories->currentPage() - 1) * $histories->perPage() + count($histories->items()) }}</span>
                            {{ __('of') }}
                            <span class="font-medium"> {!! $histories->total() !!}</span>
                            {{ __('results') }}
                        </p>
                    </div>
                    {{ $histories->links() }}
                </div>
            </div>
        </div>
    @endif
</div>
