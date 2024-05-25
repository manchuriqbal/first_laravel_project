<x-app-layout>
    <x-guest-layout>
        <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <h1 class="text-white text-lg font-bold text-center pb-2">Edit Your Reply</h1>

            <form method="POST" action="{{route('replies.update', $replie->id)}}">
                @csrf
                @method('PUT')

                <!-- description -->
                <div class="mt-4">
                    <x-input-label for="body" :value="__('Body')" />
                    <x-textarea name="body" id="body" value="{{$replie->body}}">{{ $replie->body }}</x-textarea>
                    <x-input-error :messages="$errors->get('body')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-3">
                        {{ __('Edit') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </x-guest-layout>
</x-app-layout>
