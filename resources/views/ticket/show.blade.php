<x-app-layout>


    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class="text-white text-lg font-bold text-center pb-2">{{$ticket->title}}</h1>

        <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                <div class="text-white flex justify-between  py-4 ">
                    <p> {{$ticket->description}}</p>
                    @if ($ticket->attachment)
                    <a href="{{"/storage/".$ticket->attachment}}" target="_blank">Attachment</a>
                    @endif
                    <p >{{$ticket->created_at->diffForHumans()}}</p>
                </div>
                <hr class="mt-6">


                <div class="flex justify-between mt-4">
                    <div class="flex">
                        <a href="{{route('ticket.edit', $ticket->id)}}">
                            <x-primary-button class="ms-3">Edit</x-primary-button>
                        </a>
                        <form action="{{route('ticket.destroy', $ticket->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <x-primary-button class="ms-3">Delete</x-primary-button>
                        </form>
                    </div>
                    <div class="flex">
                        @if (auth()->user()->isAdmin)

                        <form action="{{route('ticket.update', $ticket->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <input type="hidden" name="status" value="resolve">
                            <x-primary-button class="ms-3">Aprove</x-primary-button>
                        </form>
                        <form action="{{route('ticket.update', $ticket->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <input type="hidden" name="status" value="rejected">
                            <x-primary-button class="ms-3">Rejecte</x-primary-button>
                        </form>
                        @else
                        <p class="text-white">Status: {{$ticket->status}} </p>
                        @endif
                    </div>

                </div>
            </div>

            <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">

               <div class="">
                <h2 class="text-lg text-white font-semibold mt-6">Replies</h2>
                @foreach ($ticket->replies as $reply)
                    <div class="mt-4 text-lg text-white sm:max-w-xl mt-6 px-6 py-4 bg-white dark:bg-gray-900 shadow-md overflow-hidden sm:rounded-lg">
                        <p>{{ $reply->body }}</p>
                        <div class="flex justify-between">
                            <p class="flex text-sm text-gray-500">- {{ $reply->user->name }}</p>
                            <p class="flex text-sm text-gray-500">- {{ $reply->created_at->diffForHumans() }}</p>
                        </div>
                       <div class="flex">
                        <form action="{{route('replies.edit', $reply->id)}}" method="get">
                            @csrf
                            <input type="hidden" name="status" value="rejected">
                            <button class="ms-3 text-sm text-gray-500">Edit</button>
                        </form>

                        <form action="{{route('replies.destroy', $reply->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="status" value="rejected">
                            <button class="ms-3 text-sm text-gray-500">Delete</button>
                        </form>

                       </div>
                    </div>
                @endforeach

                <h2 class="text-lg text-white font-semibold mt-6">Add a Reply</h2>
                <form action="{{ route('replies.store', $ticket) }}" method="POST" class="mt-4">
                    @csrf
                    <x-textarea name="body" rows="3" id="body" value=""/>
                    <x-input-error :messages="$errors->get('body')" class="mt-2" />
                    <x-primary-button class="mt-4">Reply</x-primary-button>
                </form>
               </div>

            </div>
    </div>


</x-app-layout>
