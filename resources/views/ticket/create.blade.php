<x-app-layout>

    <x-guest-layout>
        <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <h1 class="text-white text-lg font-bold text-center pb-2">Create new table</h1>




        <form method="POST" action="{{ route('ticket.create') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"  required autofocus />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <!-- description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')"  />

                <x-textarea name="description" id="description" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- file upload -->
            <div class="mt-4">
                <x-input-label for="attachment" :value="__('Attachment')" />

                <x-file-input name="attachment" id="attachment" />

                <x-input-error :messages="$errors->get('attachment')" class="mt-2" />
            </div>


            <div class="flex items-center justify-end mt-4">


                <x-primary-button class="ms-3">
                    {{ __('Create') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    </x-guest-layout>

</x-app-layout>
