
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Админка') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full">
                        <thead>
                            <tr class="text-center">
                                <th>Номер заявки</td>
                                <th>Адрес</td>
                                <th>Дата</td>
                                <th>ФИО</td>
                                <th>Статус</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $report)
                                <tr class="text-center">
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
                                    <td class="w-[50px]">
                                        @if($report->status=='новая')
                                            <form id="form-update-{{$report->id}}" action="{{route('reports.update')}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id" value="{{$report->id}}">

                                                <select name="status"> 
                                                    <option value="новая">новая</option>
                                                    <option value="оказана">оказана</option>
                                                    <option value="отменена">отменена</option>
                                                </select>

                                                <button type="submit">Отправить</button>
                                            </form>
                                        @else
                                            <p>{{ $report -> status}}</p>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


