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
                <hr>

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
    </div>


</x-app-layout>
