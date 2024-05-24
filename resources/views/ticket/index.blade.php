<x-app-layout>


    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div class="flex justify-between sm:max-w-xl w-full">
        <div class="flex">
            <h1 class="text-white text-lg mt-4 mb-6 font-bold text-center pb-2">Support Ticket</h1>
        </div>
        <div class="flex">
            <a class="bg-white text-lg mb-6 font-bold text-center p-2 rounded-lg" href="{{route('ticket.create')}}">Create New</a>
        </div>
        </div>
            @forelse ($tickets as $ticket)
                <div class="w-full sm:max-w-xl mt-1 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                    <div class="text-white flex justify-between  py-4 ">
                    <a href="{{route('ticket.show', ['ticket' => $ticket->id])}}">{{$ticket->title}}</a>
                    <p >{{$ticket->created_at->diffForHumans()}}</p>
                    </div>
                </div>
                @empty
                <p class="text-white w-full sm:max-w-xl mt-1 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">You Don't have create any ticket yet. </p>
            @endforelse

    </div>


</x-app-layout>
