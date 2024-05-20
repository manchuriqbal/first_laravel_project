<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
           User Avatar
        </h2>
        <div>
            <img style="width: 100px; height: 100px; border-radius: 50%;" src="{{ "storage/".$user->avater }}" alt="User Avatar">
        </div>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
           Add or Update your account's profile avatar.
        </p>
    </header>
    @if (session('message'))
    <div class="">
        {{ session('message') }}
    </div>
@endif

    <form method="post" action="{{ route('profile.avatar') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @method('patch')
        @csrf


        <div>
            <x-input-label for="avater" value="Avatar" />
            <x-text-input id="avater" name="avater" type="file" class="mt-1 block w-full" :value="old('avater', $user->avater)"  autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('avater')" />
        </div>




        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>


        </div>
    </form>
</section>
