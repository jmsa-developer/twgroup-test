<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks add') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="mt-10">

            @livewire('create-log', ['task_id' => $task->id])


            <table class="table-fixed w-full">
                <thead>
                <tr  class="bg-gray-100">
                    <th>Comment</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($task->logs as $log)

                    <tr>
                        <td class="border px-4 py-2 text-center"> {{ $log->comment }}</td>
                        <td class="border px-4 py-2 text-center"> {{ $log->created_at }}</td>

                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>

</x-app-layout>
