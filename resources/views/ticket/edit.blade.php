<x-app-layout>

    <x-guest-layout>
        <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <h1 class="text-white text-lg font-bold text-center pb-2">Update Suppor ticket</h1>




        <form method="POST" action="{{ route('ticket.update', $ticket->id) }}" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <!-- Email Address -->
            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"  autofocus value="{{$ticket->title}}" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <!-- description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')"  />

                <x-textarea name="description" id="description" value="{{$ticket->description}}"/>

                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <!-- file upload -->
            <div class="mt-4">
                @if ($ticket->attachment)
                <a class="text-white" href="{{"/storage/".$ticket->attachment}}" target="_blank">Show Attachment</a>
                @endif
                <x-input-label for="attachment" :value="__('Attachment (if any)')" />

                <x-file-input name="attachment" id="attachment" />

                <x-input-error :messages="$errors->get('attachment')" class="mt-2" />
            </div>


            <div class="flex items-center justify-end mt-4">


                <x-primary-button class="ms-3">
                    {{ __('Update') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    </x-guest-layout>

</x-app-layout>
