
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex gap-4 pb-10">
                        @if(auth()->user() && auth()->user()->role === 'admin')
                            <div>
                                <a class="border-4 border-sky-500 rounded-lg text-white bg-sky-500 font-bold h-24" href="{{ route('admin.index') }}">Админ панель</a>
                            </div>
                        @endif
                        <div>
                            <a class="border-4 border-sky-500 rounded-lg text-white bg-sky-500 font-bold h-24" href="{{ route('reports.create') }}">Создать заявку</a>
                        </div>
                    </div>

                    <table class="w-full">
                        <thead>
                            <tr class="text-center">
                                <th>Номер заявки</th>
                                <th>Адрес</td>
                                <th>Дата</td>
                                <th>ФИО</td>
                                <th>Статус</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $report)
                            <tr class="text-center; border;">
                                <td class="w-[100px]">{{ $report->id }}</td>
                                <td>{{ $report->address }}</td>
                                <td  class="w-[150px]">{{ $report->date }}</td>
                                <td>
                                    <p>
                                        {{ $report->user->name}}<br>
                                        {{ $report->user->middlename}}<br>
                                        {{ $report->user->lastname}}
                                    </p>
                                </td>
                                <td class="w-[50px]">{{ $report->status}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
