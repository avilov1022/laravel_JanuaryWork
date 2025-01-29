
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex gap-4">
                        @if(auth()->user() && auth()->user()->role === 'admin')
                            <div>
                                <a class="border-4 border-sky-500 rounded-lg text-white bg-sky-500 font-bold h-24" href="{{ route('admin.index') }}">Админ панель</a>
                            </div>
                        @endif
                        <div>
                            <a class="border-4 border-sky-500 rounded-lg text-white bg-sky-500 font-bold h-24" href="{{ route('reports.create') }}">Создать заявку</a>
                        </div>
                    </div>


                    <div class="flex justify-between">
                        <p>Адрес</p>
                        <!-- <p>Номер телефона</p> -->
                        <p>Дата</p>
                        <p>Статус</p>
                    </div>
                    @foreach($reports as $report)
                        <div class="reports-list; ;" style="display: flex; justify-content: space-between; margin-top: 10px;  padding-inline:10px; border: 2px solid rgba(0, 0, 0, 0.226); border-radius: 10px; box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.473)">
                            <p>{{ $report->address }}</p>
                            <!-- <p>{{ $report->contact }}</p> -->
                            <p>{{ $report->date }}</p>
                            <p>{{ $report->status }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
