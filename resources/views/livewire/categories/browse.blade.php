<div>
    <x-shopper::heading>
        <x-slot name="title">
            {{ __('Categories') }}
        </x-slot>

        <x-slot name="action">
            @if($total > 0)
                @can('add_categories')
                    <div class="flex space-x-3">
                        <span class="shadow-sm rounded-md">
                            <x-shopper::button :link="route('shopper.categories.create')">
                                {{ __('Add category') }}
                            </x-shopper::button>
                        </span>
                    </div>
                @endcan
            @endif
        </x-slot>
    </x-shopper::heading>

    @if($total === 0)
        <x-shopper::empty-state
            :title="__('Organize your products into categories')"
            :content="__('Create and manage all your store categories to help your customers easily find products.')"
            :button="__('Add category')"
            permission="add_categories"
            :url="route('shopper.categories.create')"
        >
            <div class="shrink-0">
                <svg class="w-auto h-64 lg:h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 356 208">
                    <style>
                        .st1{fill:#1C64F2}  .st2{fill:#76A9FA}  .st4{fill:#42389D}  .st5{fill:#5850EC}  .st6{fill:#233876}  .st7{fill:#1A56DB}  .st8{fill:#76A9FA}
                    </style>
                    <g opacity=".5">
                        <path class="st1" d="M353.1 28H132.4c-1.4 0-2.6 1.2-2.6 2.6v4.5c0 1.4 1.2 2.6 2.6 2.6h220.8c1.4 0 2.6-1.2 2.6-2.6v-4.5c-.1-1.5-1.2-2.6-2.7-2.6z"/>
                        <path class="st1" d="M197.5 47.9c-4-2.6-11.8-6.8-20.2-7.1v-7.1c0-.8-.4-2.2-1.8-2.3-.7 0-1.1-.4-1.4-.7-.4-.5-.6-1.1-.6-1.6.1-1.5 1.1-2.5 2.6-2.5 1.8 0 1.9 3.2 1.9 3.2 0 .3.3.5.6.5s.5-.3.5-.6c0 0 0-1-.4-2-.7-1.9-1.8-2.2-2.6-2.2-2.1 0-3.5 1.4-3.7 3.4-.1.8.2 1.7.8 2.4.6.7 1.3 1.1 2.2 1.1.7 0 .8 1.2.8 1.2v7.1c-8 .1-15.8 4.2-19.7 6.6-.8.5-1.2 1.4-.9 2.3.3.9 1.1 1.5 2 1.5h38.9c.8 0 1.5-.5 1.8-1.3.2-.7-.1-1.5-.8-1.9zm-.8 1.5c0 .1-.1.1-.2.1h-38.9c-.3 0-.4-.2-.4-.3 0-.1-.1-.3.2-.5 3.9-2.4 11.5-6.4 19.2-6.4h.3c8.1.1 15.8 4.3 19.7 6.8 0 .2.1.2.1.3z"/>
                        <path class="st1" d="M163.4 43.7s6.1 5.4 14.8 5.1c8.7-.3 12.9-4.7 12.9-4.7s6.9 3.5 8.3 5.5c1.4 2 2.1 22.1 2.1 22.1s-3.4 1.3-6.9 1.2l-1.4-4.3 4.3 71.5s-5.3.2-8.5-1.6c-3.1-1.8-7.7.6-11.9 1.1-4.2.6-6.5-2.6-10.6-1.3-6.4 2-11.3.9-11.3.9l6.5-70.8-1.8 4.1s-6.1 0-8.1-2.1c0 0 2.3-21.4 3.6-22.7 1.5-1.3 8-4 8-4z"/>
                        <path class="st2" d="M224.3 47.9c-1.8-1.1-4.3-2.6-7.3-3.9-1.4-.6-2.8-1.2-4.3-1.6-2.7-.8-5.6-1.5-8.5-1.5v-7.1c0-.8-.4-2.2-1.8-2.3-.7 0-1.1-.4-1.4-.7-.4-.5-.6-1.1-.6-1.6.1-1.5 1.1-2.5 2.6-2.5 1.8 0 1.9 3.2 1.9 3.2 0 .3.3.5.6.5s.5-.3.5-.6c0 0 0-1-.4-2-.7-1.9-1.8-2.2-2.6-2.2-2.1 0-3.5 1.4-3.7 3.4-.1.8.2 1.7.8 2.4.6.7 1.3 1.1 2.2 1.1.7 0 .8 1.2.8 1.2v7.1c-3.3 0-6.5.8-9.5 1.8-1.4.5-2.7 1-3.9 1.5-2.5 1.1-4.7 2.3-6.3 3.3-.8.5-1.2 1.4-.9 2.3.3.9 1.1 1.5 2 1.5h38.9c.8 0 1.5-.5 1.8-1.3.1-.8-.2-1.6-.9-2zm-.8 1.5c0 .1-.1.1-.2.1h-38.9c-.3 0-.4-.2-.4-.3 0-.1-.1-.3.2-.5 1.5-.9 3.7-2.1 6.1-3.2 1.2-.5 2.5-1.1 3.9-1.5 2.9-1 6-1.6 9.2-1.6h.3c2.9 0 5.8.6 8.5 1.5 1.7.5 3.3 1.2 4.7 1.8 2.7 1.2 4.9 2.5 6.5 3.5 0 .1.1.1.1.2z"/>
                        <path class="st2" d="M215.4 74.6c-.1-5.2 1.9-10.3 2.3-15.4.4-5-1-7.8-1-7.8v-.2c-.1-.6-.1-1.1-.1-1.7 0-1.5.1-2.9.3-3.9.1-.9.3-1.5.3-1.5 0-.1-.1-.2-.2-.3-1.4-.6-2.8-1.2-4.3-1.6-.2.5-.4 1.1-.5 1.6-.8 2.3-1.6 4.1-2.4 5.7-.3.6-.6 1.2-.9 1.7-3 5.1-5.4 5.5-5.4 5.5-1.8-.2-3.8-2.6-5.5-5.5-.3-.5-.7-1.1-1-1.7-1.1-2-2.1-4-2.7-5.5-.3-.6-.5-1.1-.7-1.5-1.4.5-2.7 1-3.9 1.5.3.4.5.9.7 1.5.3 1.2.3 2.8.2 4 0 .7-.1 1.4-.2 1.7v.2c-3.1 11 3.5 17.6 3.2 23.2-.2 5.6-9.7 52.4-9.7 52.4 9.3 1.9 13.8-3.2 15.2-.7 2.1 3.7 7.2 3.4 11.9.5.8-.5 5-1.8 8.9-.5 3.9 1.3 6.5-1.5 6.5-1.5-.2-8.5-10.8-43.2-11-50.2zm-24.9-23.1c.1.1.4.3.8.5-.4-.2-.7-.4-.8-.5z"/>
                        <path class="st1" d="M251.6 47.9c-4-2.6-11.8-6.8-20.2-7.1v-7.1c0-.8-.4-2.2-1.8-2.3-.7 0-1.1-.4-1.4-.7-.4-.5-.6-1.1-.6-1.6.1-1.5 1.1-2.5 2.6-2.5 1.8 0 1.9 3.2 1.9 3.2 0 .3.3.5.6.5s.5-.3.5-.6c0 0 0-1-.4-2-.7-1.9-1.8-2.2-2.6-2.2-2.1 0-3.5 1.4-3.7 3.4-.1.8.2 1.7.8 2.4.6.7 1.3 1.1 2.2 1.1.7 0 .8 1.2.8 1.2v7.1c-8 .1-15.8 4.2-19.7 6.6-.8.5-1.2 1.4-.9 2.3.3.9 1.1 1.5 2 1.5h38.9c.8 0 1.5-.5 1.8-1.3.2-.7-.1-1.5-.8-1.9zm-.8 1.5c0 .1-.1.1-.2.1h-38.9c-.3 0-.4-.2-.4-.3 0-.1-.1-.3.2-.5 3.9-2.4 11.5-6.4 19.2-6.4h.3c8.1.1 15.8 4.3 19.7 6.8.1.2.1.2.1.3z"/>
                        <path class="st1" d="M217.6 43.7s6.1 5.4 14.8 5.1c8.7-.3 12.9-4.7 12.9-4.7s6.9 3.5 8.3 5.5c1.4 2 2.1 22.1 2.1 22.1s-3.4 1.3-6.9 1.2l-1.4-4.3 4.3 71.5s-5.3.2-8.5-1.6c-3.1-1.8-7.7.6-11.9 1.1s-6.5-2.6-10.6-1.3c-6.4 2-11.3.9-11.3.9l6.5-70.8-1.8 4.1s-6.1 0-8.1-2.1c0 0 2.3-21.4 3.6-22.7 1.4-1.3 8-4 8-4z"/>
                        <path class="st2" d="M270.8 47.9c-1.8-1.1-4.3-2.6-7.3-3.9-1.4-.6-2.8-1.2-4.3-1.6-2.7-.8-5.6-1.5-8.6-1.5v-7.1c0-.8-.4-2.2-1.8-2.3-.7 0-1.1-.4-1.4-.7-.4-.5-.6-1.1-.6-1.6.1-1.5 1.1-2.5 2.6-2.5 1.8 0 1.9 3.2 1.9 3.2 0 .3.3.5.6.5s.5-.3.5-.6c0 0 0-1-.4-2-.7-1.9-1.8-2.2-2.6-2.2-2.1 0-3.5 1.4-3.7 3.4-.1.8.2 1.7.8 2.4.6.7 1.3 1.1 2.2 1.1.7 0 .8 1.2.8 1.2v7.1c-3.3 0-6.5.8-9.5 1.8-1.4.5-2.7 1-3.9 1.5-2.5 1.1-4.7 2.3-6.3 3.3-.8.5-1.2 1.4-.9 2.3.3.9 1.1 1.5 2 1.5h38.9c.8 0 1.5-.5 1.8-1.3.2-.8-.1-1.6-.8-2zm-.8 1.5c0 .1-.1.1-.2.1h-38.9c-.3 0-.4-.2-.4-.3 0-.1-.1-.3.2-.5 1.5-.9 3.7-2.1 6.1-3.2 1.2-.5 2.5-1.1 3.9-1.5 2.9-1 6-1.6 9.2-1.6h.3c2.9 0 5.8.6 8.5 1.5 1.7.5 3.3 1.2 4.7 1.8 2.7 1.2 4.9 2.5 6.5 3.5 0 .1.1.1.1.2z"/>
                        <path class="st2" d="M261.9 74.6c-.1-5.2 1.9-10.3 2.3-15.4.4-5-1-7.8-1-7.8v-.2c-.1-.6-.1-1.1-.1-1.7 0-1.5.1-2.9.3-3.9.1-.9.3-1.5.3-1.5 0-.1-.1-.2-.2-.3-1.4-.6-2.8-1.2-4.3-1.6-.2.5-.4 1.1-.5 1.6-.8 2.3-1.6 4.1-2.4 5.7-.3.6-.6 1.2-.9 1.7-3 5.1-5.4 5.5-5.4 5.5-1.8-.2-3.8-2.6-5.5-5.5-.3-.5-.7-1.1-1-1.7-1.1-2-2.1-4-2.7-5.5-.3-.6-.5-1.1-.7-1.5-1.4.5-2.7 1-3.9 1.5.3.4.5.9.7 1.5.3 1.2.3 2.8.2 4 0 .7-.1 1.4-.2 1.7v.2c-3.1 11 3.5 17.6 3.2 23.2-.2 5.6-9.7 52.4-9.7 52.4 9.3 1.9 13.8-3.2 15.2-.7 2.1 3.7 7.2 3.4 11.9.5.8-.5 5-1.8 8.9-.5 3.9 1.3 6.5-1.5 6.5-1.5-.3-8.5-10.8-43.2-11-50.2zm-25-23.1c.1.1.4.3.8.5-.4-.2-.6-.4-.8-.5z"/>
                        <path class="st1" d="M290.3 47.9c-4-2.6-11.8-6.8-20.2-7.1v-7.1c0-.8-.4-2.2-1.8-2.3-.7 0-1.1-.4-1.4-.7-.4-.5-.6-1.1-.6-1.6.1-1.5 1.1-2.5 2.6-2.5 1.8 0 1.9 3.2 1.9 3.2 0 .3.3.5.6.5s.5-.3.5-.6c0 0 0-1-.4-2-.7-1.9-1.8-2.2-2.6-2.2-2.1 0-3.5 1.4-3.7 3.4-.1.8.2 1.7.8 2.4.6.7 1.3 1.1 2.2 1.1.7 0 .8 1.2.8 1.2v7.1c-8 .1-15.8 4.2-19.7 6.6-.8.5-1.2 1.4-.9 2.3.3.9 1.1 1.5 2 1.5h38.9c.8 0 1.5-.5 1.8-1.3.2-.7-.1-1.5-.8-1.9zm-.8 1.5c0 .1-.1.1-.2.1h-38.9c-.3 0-.4-.2-.4-.3 0-.1-.1-.3.2-.5 3.9-2.4 11.5-6.4 19.2-6.4h.3c8.1.1 15.8 4.3 19.7 6.8.1.2.2.2.1.3z"/>
                        <path class="st1" d="M256.3 43.7s6.1 5.4 14.8 5.1c8.7-.4 12.9-4.8 12.9-4.8s6.9 3.5 8.3 5.5c1.4 2 2.1 22.1 2.1 22.1s-3.4 1.3-6.9 1.2l-1.4-4.3 4.3 71.5s-5.3.2-8.5-1.6c-3.1-1.8-7.7.6-11.9 1.1-4.2.6-6.5-2.6-10.6-1.3-6.4 2-11.3.9-11.3.9l6.5-70.8-1.8 4.1s-6.1 0-8.1-2.1c0 0 2.3-21.4 3.6-22.7 1.4-1.2 8-3.9 8-3.9z"/>
                        <path class="st2" d="M309.5 47.9c-1.8-1.1-4.3-2.6-7.3-3.9-1.4-.6-2.8-1.2-4.3-1.6-2.7-.8-5.6-1.5-8.5-1.5v-7.1c0-.8-.4-2.2-1.8-2.3-.7 0-1.1-.4-1.4-.7-.4-.5-.6-1.1-.6-1.6.1-1.5 1.1-2.5 2.6-2.5 1.8 0 1.9 3.2 1.9 3.2 0 .3.3.5.6.5s.5-.3.5-.6c0 0 0-1-.4-2-.7-1.9-1.8-2.2-2.6-2.2-2.1 0-3.5 1.4-3.7 3.4-.1.8.2 1.7.8 2.4.6.7 1.3 1.1 2.2 1.1.7 0 .8 1.2.8 1.2v7.1c-3.3 0-6.5.8-9.5 1.8-1.4.5-2.7 1-3.9 1.5-2.5 1.1-4.7 2.3-6.3 3.3-.8.5-1.2 1.4-.9 2.3.3.9 1.1 1.5 2 1.5h38.9c.8 0 1.5-.5 1.8-1.3.1-.8-.2-1.6-.9-2zm-.8 1.5c0 .1-.1.1-.2.1h-38.9c-.3 0-.4-.2-.4-.3 0-.1-.1-.3.2-.5 1.5-.9 3.7-2.1 6.1-3.2 1.2-.5 2.5-1.1 3.9-1.5 2.9-1 6-1.6 9.2-1.6h.3c2.9 0 5.8.6 8.5 1.5 1.7.5 3.3 1.2 4.7 1.8 2.7 1.2 4.9 2.5 6.5 3.5 0 .1.1.1.1.2z"/>
                        <path class="st2" d="M300.6 74.6c-.1-5.2 1.9-10.3 2.3-15.4s-1-7.8-1-7.8v-.2c-.1-.6-.1-1.1-.1-1.7 0-1.5.1-2.9.3-3.9.1-.9.3-1.5.3-1.5 0-.1-.1-.2-.2-.3-1.4-.6-2.8-1.2-4.3-1.6-.2.5-.4 1.1-.5 1.6-.8 2.3-1.6 4.1-2.4 5.7-.3.6-.6 1.2-.9 1.7-3 5.1-5.4 5.5-5.4 5.5-1.8-.2-3.8-2.6-5.5-5.5-.3-.5-.7-1.1-1-1.7-1.1-2-2.1-4-2.7-5.5-.3-.6-.5-1.1-.7-1.5-1.4.5-2.7 1-3.9 1.5.3.4.5.9.7 1.5.3 1.2.3 2.8.2 4 0 .7-.1 1.4-.2 1.7v.2c-3.1 11 3.5 17.6 3.2 23.2-.2 5.6-9.7 52.4-9.7 52.4 9.3 1.9 13.8-3.2 15.2-.7 2.1 3.7 7.2 3.4 11.9.5.8-.5 5-1.8 8.9-.5 3.9 1.3 6.5-1.5 6.5-1.5-.3-8.5-10.8-43.2-11-50.2zm-25-23.1c.1.1.4.3.8.5-.3-.2-.6-.4-.8-.5z"/>
                        <path class="st1" d="M353.9 177.5h-22.3c.2-.3.4-.7.4-1.2V39.6c0-1.1-.9-1.9-1.9-1.9s-1.9.9-1.9 1.9v136.8c0 .4.1.8.4 1.2h-197c-1 0-1.8.8-1.8 1.8v1.2c0 1 .8 1.8 1.8 1.8h222.3c1 0 1.8-.8 1.8-1.8v-1.2c0-1-.8-1.9-1.8-1.9z"/>
                        <circle class="st1" cx="330.3" cy="186.2" r="3.9"/>
                        <circle class="st1" cx="155.5" cy="186.2" r="3.9"/>
                    </g>
                    <path d="M242.6 96.9H7.3c-1.5 0-2.8 1.2-2.8 2.8v31.5c.1.4.2.8.2 1.2v.2c.2 1.1.5 2.2.7 3.3.4 1.9.9 3.8 1.3 5.7.1.3.2.7.3 1 1.2 4.9 2.6 9.5 3.9 13.8.2.7.5 1.4.7 2.1.6 1.9 1.2 3.7 1.9 5.4.4 1.2.9 2.5 1.3 3.6 2.4 6.3 4.7 11.5 6.5 15.5 2.5 5.3 4.2 8.3 4.2 8.3l48.6.2 49.2.2h13l45.1.1 18.5.1 26.5.1 18.9.1V99.7c.1-1.6-1.2-2.8-2.7-2.8z" fill="#c1d7f0"/>
                    <path class="st4" d="M224.2 93s-4.6-1.7-7.1-2.2c-2.5-.4-4-13.5-4.3-15.1-.3-1.6-3.3-4.4-3.3-4.4l1.9 19.8 4.2 5h7.5l1.1-3.1z"/>
                    <path class="st5" d="M226.6 96.9h-14.4c-1.2-1.9-2.8-10.1-4-11.7-.1-.1-.2-.2-.3-.4l-.1 12.1h-1.3c0-1.7-.1-11.3-.9-16.5-.8-1.8-1.4-3.5-1.1-4.2.5-1.5 5.1-4.8 5.1-4.8.1.6 3.3 20.5 5.3 21.1 4.7 1.4 9.3.5 9.3.5s3.4 1.9 2.4 3.9z"/>
                    <path class="st4" d="M215.6 93s-4.6-1.7-7.1-2.2c-2.5-.4-4-13.5-4.3-15.1-.3-1.6-3.3-4.4-3.3-4.4l1.9 19.8 4.2 5h7.5l1.1-3.1z"/>
                    <path class="st5" d="M218 96.9h-14.4c-1.2-1.9-2.8-10.1-4-11.7-.1-.1-.2-.2-.3-.4l-.1 12.1h-1.3c0-1.7-.1-11.3-.9-16.5-.8-1.8-1.4-3.5-1.1-4.2.5-1.5 5.1-4.8 5.1-4.8.1.6 3.3 20.5 5.3 21.1 4.7 1.4 9.3.5 9.3.5s3.4 1.9 2.4 3.9zm-91.8.9s-5.8.2-4.6-4.2c.6-2.3 3.2-2.4 7.1-2.4h59.6s3.1 1.1 3.1 3.3c0 2.2-1.2 2.7-2.2 3.3-1 .5-63 0-63 0z"/>
                    <path class="st4" d="M126.2 91.9s-5.8.2-4.6-4.2c.6-2.3 3.2-2.4 7.1-2.4h59.6s3.1 1.1 3.1 3.3c0 2.2-1.2 2.7-2.2 3.3-1 .5-63 0-63 0z"/>
                    <path class="st5" d="M126.2 85.1s-5.8.2-4.6-4.2c.6-2.3 3.2-2.4 7.1-2.4h59.6s3.1 1.1 3.1 3.3c0 2.2-1.2 2.7-2.2 3.3-1 .5-63 0-63 0z"/>
                    <path class="st1" d="M103 96.9H.7c0 1.6.1 3.2.2 4.7.1 1.6.2 3.1.3 4.6.6 8.7 1.8 17 3.3 24.9.1.4.2.8.2 1.2v.2c.2 1.1.5 2.2.7 3.3.4 1.9.9 3.8 1.3 5.7.1.3.2.7.3 1 1.2 4.9 2.6 9.5 3.9 13.8.2.7.5 1.4.7 2.1.6 1.9 1.2 3.7 1.9 5.4.4 1.2.9 2.5 1.3 3.6 2.4 6.3 4.7 11.5 6.5 15.5 2.5 5.3 4.2 8.3 4.2 8.3l48.6.2 31.5.1V99.9c0-1.7-1.2-3-2.6-3z"/>
                    <path class="st1" d="M244.9 147.1h-233c-.3 0-.5.2-.5.5v2c0 .3.2.5.5.5h233c.3 0 .5-.2.5-.5v-2c0-.2-.3-.5-.5-.5z"/>
                    <path class="st6" d="M120.2 118.9l-2.5 20.8c-.5 3.9 2.6 7.4 6.5 7.4h22.5l10.6-28.2h-37.1z"/>
                    <path class="st6" d="M128.1 121c0-.1 1.1-13.2 8.9-12.9 7.9.2 10 11.8 10 11.9l1.6-.3c0-.1-.6-3.2-2.2-6.4-2.2-4.3-5.4-6.7-9.3-6.8-3.9-.1-7 2.4-8.9 7.2-1.4 3.5-1.7 7-1.7 7.1l1.6.2z"/>
                    <path class="st2" d="M157.3 118.9h-34.2l4.9 21.6c.9 3.9 4.3 6.6 8.3 6.6h20.8c4.5 0 7.7-4.4 6.4-8.7l-6.2-19.5z"/>
                    <path class="st7" d="M157.3 118.9s-.3 8.5-11.5 8.8c-11.3.4-22.7-8.8-22.7-8.8h34.2z"/>
                    <path class="st7" d="M130.8 121c0-.1 1.1-13.2 8.9-12.9 7.9.2 10 11.8 10 11.9l1.6-.3c0-.1-.6-3.2-2.2-6.4-2.2-4.3-5.4-6.7-9.3-6.8-3.9-.1-7 2.4-8.9 7.2-1.4 3.5-1.7 7-1.7 7.1l1.6.2z"/>
                    <path class="st6" d="M139.1 47.8l-2.7 22.7c-.5 4.3 2.8 8 7.1 8H168l11.6-30.8h-40.5z"/>
                    <path class="st6" d="M167.5 41.8c-2.4-4.7-5.9-7.3-10.1-7.4-4.3-.1-7.6 2.6-9.7 7.9-1.5 3.8-1.8 7.6-1.8 7.8l1.7.1c0-.1 1.2-14.3 9.8-14.1 8.6.3 10.9 12.9 10.9 13l1.7-.3c-.1-.2-.7-3.6-2.5-7z"/>
                    <path class="st2" d="M186.3 69.1l-6.7-21.3h-37.3l5.4 23.6c1 4.2 4.7 7.2 9 7.2h22.7c4.8 0 8.3-4.8 6.9-9.5z"/>
                    <path class="st7" d="M142.2 47.8s12.4 10.1 24.7 9.7c12.3-.4 12.6-9.7 12.6-9.7h-37.3z"/>
                    <path class="st7" d="M170.5 41.8c-2.4-4.7-5.9-7.3-10.1-7.4-4.3-.1-7.6 2.6-9.7 7.9-1.5 3.8-1.8 7.6-1.8 7.8l1.7.1c0-.1 1.2-14.3 9.8-14.1 8.6.3 10.9 12.9 10.9 13l1.7-.3c-.1-.2-.7-3.6-2.5-7z"/>
                    <path class="st4" d="M186.5 118.9l-2.5 20.8c-.5 3.9 2.6 7.4 6.5 7.4H213l10.6-28.2h-37.1z"/>
                    <path class="st4" d="M194.3 121c0-.1 1.1-13.2 8.9-12.9 7.9.2 10 11.8 10 11.9l1.6-.3c0-.1-.6-3.2-2.2-6.4-2.2-4.3-5.4-6.7-9.3-6.8-3.9-.1-7 2.4-8.9 7.2-1.4 3.5-1.7 7-1.7 7.1l1.6.2z"/>
                    <path class="st5" d="M223.6 118.9h-34.2l4.9 21.6c.9 3.9 4.3 6.6 8.3 6.6h20.8c4.5 0 7.7-4.4 6.4-8.7l-6.2-19.5z"/>
                    <path class="st5" d="M197 121c0-.1 1.1-13.2 8.9-12.9 7.9.2 10 11.8 10 11.9l1.6-.3c0-.1-.6-3.2-2.2-6.4-2.2-4.3-5.4-6.7-9.3-6.8-3.9-.1-7 2.4-8.9 7.2-1.4 3.5-1.7 7-1.7 7.1l1.6.2z"/>
                    <path class="st6" d="M198.5 189.8s1.3-1.2.6-2.3c-.6-1.1-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 34.5 0 34.5 0z"/>
                    <path class="st6" d="M196.7 186.1s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0zm0-3.8s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0z"/>
                    <path class="st6" d="M194.8 178.6s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8.6 1.5 1.2 1.8c.5.3 32.7 0 32.7 0z"/>
                    <path class="st6" d="M196.7 174.9s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0zm0-3.8s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8.6 1.5 1.2 1.8c.5.3 32.7 0 32.7 0z"/>
                    <path class="st6" d="M194.8 167.4s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0zm1.9-3.7s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.2 32.7 0 32.7 0z"/>
                    <path class="st7" d="M217.6 189.8s1.3-1.2.6-2.3c-.6-1.1-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.6.3 34.5 0 34.5 0z"/>
                    <path class="st7" d="M215.9 186.1s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0z"/>
                    <path class="st8" d="M215.9 182.3s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0z"/>
                    <path class="st7" d="M214 178.6s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8.6 1.5 1.2 1.8c.5.3 32.7 0 32.7 0z"/>
                    <path class="st2" d="M215.9 174.9s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0z"/>
                    <path class="st7" d="M215.9 171.1s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8.6 1.5 1.2 1.8c.5.3 32.7 0 32.7 0z"/>
                    <path class="st2" d="M214 167.4s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0z"/>
                    <path class="st8" d="M215.9 163.7s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.2 32.7 0 32.7 0z"/>
                    <path class="st6" d="M154.2 189.8s1.3-1.2.6-2.3c-.6-1.1-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.6.3 34.5 0 34.5 0z"/>
                    <path class="st6" d="M152.5 186.1s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0zm0-3.8s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0z"/>
                    <path class="st6" d="M150.6 178.6s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8.6 1.5 1.2 1.8c.5.3 32.7 0 32.7 0z"/>
                    <path class="st6" d="M152.5 174.9s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0zm0-3.8s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8.6 1.5 1.2 1.8c.5.3 32.7 0 32.7 0z"/>
                    <path class="st6" d="M150.6 167.4s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0zm1.9-3.7s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.2 32.7 0 32.7 0z"/>
                    <path class="st7" d="M173.4 189.8s1.3-1.2.6-2.3c-.6-1.1-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 34.5 0 34.5 0z"/>
                    <path class="st7" d="M171.6 186.1s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0z"/>
                    <path class="st8" d="M171.6 182.3s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0z"/>
                    <path class="st7" d="M169.8 178.6s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8.6 1.5 1.2 1.8c.5.3 32.7 0 32.7 0z"/>
                    <path class="st2" d="M171.6 174.9s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0z"/>
                    <path class="st7" d="M171.6 171.1s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8.6 1.5 1.2 1.8c.5.3 32.7 0 32.7 0z"/>
                    <path class="st2" d="M169.8 167.4s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.3 32.7 0 32.7 0z"/>
                    <path class="st8" d="M171.6 163.7s3 .1 2.4-2.3c-.3-1.3-1.7-1.3-3.7-1.3h-31s-1.6.6-1.6 1.8c0 1.2.6 1.5 1.2 1.8.5.2 32.7 0 32.7 0z"/>
                    <path class="st6" d="M64.4 90.8c-.8 2.5 3.3 2.3 3.3 2.3h.6c-2 .1-3.1.4-3.8 1.3-.9 1.1.9 2.3.9 2.3s46.4.3 47.1 0c.7-.3 1.6-.6 1.6-1.8 0-1-1.6-1.6-2.1-1.8h.5c.7-.3 1.6-.6 1.6-1.8 0-1.2-2.2-1.8-2.2-1.8H69.6c-2.9 0-4.8 0-5.2 1.3zm49.9-8.9h-3.1c.7 0 1.1 0 1.2-.1.7-.3 1.6-.6 1.6-1.8 0-1.2-2.2-1.8-2.2-1.8H69.5c-2.7 0-4.6.1-5 1.3-.8 2.5 3.3 2.3 3.3 2.3s3.8 0 9.2.1h-4.9c-2.7 0-4.6.1-5 1.3-.8 2.5 3.3 2.3 3.3 2.3s3.8 0 9.2.1H69.5c-2.7 0-4.6.1-5 1.3-.8 2.5 3.3 2.3 3.3 2.3s18.9.1 32.2.1c6.9 0 12.3 0 12.5-.1.7-.3 1.6-.6 1.6-1.8 0-1.1-1.6-1.7-2.1-1.8 1.8 0 3-.1 3.1-.1.7-.3 1.6-.6 1.6-1.8-.2-1.2-2.4-1.8-2.4-1.8zm-.3-5.6c0-.9-1.3-1.5-1.9-1.7 1.7 0 2.8-.1 2.9-.1.7-.3 1.6-.6 1.6-1.8 0-1.2-2.2-1.8-2.2-1.8H72c-2.7 0-4.6.1-5 1.3-.6 1.9 1.5 2.3 2.7 2.3h-.2c-2.7 0-4.6.1-5 1.3-.8 2.5 3.3 2.3 3.3 2.3s18.9.1 32.2.1c6.9 0 12.3 0 12.5-.1.6-.3 1.5-.6 1.5-1.8zm0-7.5c0-1.2-2.2-1.8-2.2-1.8H69.5c-2.7 0-4.6.1-5 1.3-.8 2.5 3.3 2.3 3.3 2.3s18.9.1 32.2.1c6.9 0 12.3 0 12.5-.1.6-.3 1.5-.6 1.5-1.8z"/>
                    <path class="st7" d="M39.1 96.8s-1.8-1.2-.9-2.3c.9-1.1 2.3-1.3 5-1.3h42.3s2.2.6 2.2 1.8-.9 1.5-1.6 1.8c-.6.3-47 0-47 0z"/>
                    <path class="st7" d="M41.5 93.1s-4.1.1-3.3-2.3c.4-1.3 2.3-1.3 5-1.3h42.3s2.2.6 2.2 1.8c0 1.2-.9 1.5-1.6 1.8-.6.3-44.6 0-44.6 0z"/>
                    <path class="st8" d="M41.5 89.3s-4.1.1-3.3-2.3c.4-1.3 2.3-1.3 5-1.3h42.3s2.2.6 2.2 1.8c0 1.2-.9 1.5-1.6 1.8-.6.3-44.6 0-44.6 0z"/>
                    <path class="st7" d="M44.1 85.6s-4.1.1-3.3-2.3c.4-1.3 2.3-1.3 5-1.3h42.3s2.2.6 2.2 1.8c0 1.2-.9 1.5-1.6 1.8-.6.3-44.6 0-44.6 0z"/>
                    <path class="st2" d="M41.5 81.9s-4.1.1-3.3-2.3c.4-1.3 2.3-1.3 5-1.3h42.3s2.2.6 2.2 1.8c0 1.2-.9 1.5-1.6 1.8-.6.3-44.6 0-44.6 0z"/>
                    <path class="st7" d="M41.5 78.1s-4.1.1-3.3-2.3c.4-1.3 2.3-1.3 5-1.3h42.3s2.2.6 2.2 1.8-.9 1.5-1.6 1.8c-.6.3-44.6 0-44.6 0z"/>
                    <path class="st2" d="M44.1 74.5s-4.1.1-3.3-2.3c.4-1.3 2.3-1.3 5-1.3h42.3s2.2.6 2.2 1.8c0 1.2-.9 1.5-1.6 1.8-.6.2-44.6 0-44.6 0z"/>
                    <path class="st8" d="M41.5 70.7s-4.1.1-3.3-2.3c.4-1.3 2.3-1.3 5-1.3h42.3s2.2.6 2.2 1.8c0 1.2-.9 1.5-1.6 1.8-.6.3-44.6 0-44.6 0z"/>
                    <path class="st1" d="M247.6 189.8H23.2c-.7 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3h224.4c.7 0 1.3-.6 1.3-1.3 0-.7-.6-1.3-1.3-1.3z"/>
                </svg>
            </div>
        </x-shopper::empty-state>
    @else
        <div class="mt-6">
            <livewire:shopper-tables.categories-table />
        </div>
    @endif

    <x-shopper::learn-more name="categories" link="categories" />

</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
@endpush
