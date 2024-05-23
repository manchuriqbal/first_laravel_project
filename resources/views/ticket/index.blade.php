<x-app-layout>


    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <h1 class="text-white text-lg mt-4 mb-4 font-bold text-center pb-2">Support Ticket</h1>

            @foreach ($tickets as $ticket)
                <div class="w-full sm:max-w-xl mt-1 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                    <div class="text-white flex justify-between  py-4 ">
                    <a href="{{route('ticket.show', ['ticket' => $ticket->id])}}">{{$ticket->title}}</a>
                    <p >{{$ticket->created_at->diffForHumans()}}</p>
                    </div>
                </div>
            @endforeach

    </div>


</x-app-layout>
