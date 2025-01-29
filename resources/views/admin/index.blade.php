
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
                    <h2>Админка</h2>

                    @foreach($reports as $report)
                        <div class="reports-list; ;" style="display: flex; justify-content: space-between; margin-top: 10px; margin-inline: 100px; padding-inline:10px; border: 2px solid rgba(0, 0, 0, 0.226); border-radius: 10px; box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.473)">
                            <p>{{ $report->id }}</p>
                            <p>{{ $report->address }}</p>
                            <p>{{ $report->contact }}</p>
                            <p>{{ $report->date }}</p>
                            <p>{{ $report->service_id }}</p>
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

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


