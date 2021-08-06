<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="mt-10">

        <table class="table-fixed w-full">
            <thead>
            <tr  class="bg-gray-100">
                <th>Description</th>
                <th>Date of finalization</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tasks as $task)
                <tr @class([
                'bg-red' => $task->getIsExpired(),
                ])>

                    <td class="border px-4 py-2 text-center"> {{ $task->description }}</td>
                    <td class="border px-4 py-2 text-center"> {{ $task->max_date_execution }}</td>
                    <td class="border px-4 py-2 text-center">
                        @if ($task->getIsForUserLoggedIn())
                            <a href="{{ route('log.add',['id'=>$task->id]) }}" class="btn btn-primary">Add registry</a>
                        @endif
                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>

    </div>

</x-app-layout>
