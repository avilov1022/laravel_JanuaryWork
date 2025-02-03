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
                    <form method="POST" action="{{ route('reports.store') }}">
                        @csrf
                        <!-- Address -->
                        <div class="mt-4">
                            <x-input-label for="address" :value="__('Адрес')" />
                            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" required />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <!-- Time -->
                        <div class="mt-4">
                            <x-input-label for="time" :value="__('Время')" />
                            <x-text-input id="time" class="block mt-1 w-full" type="time" name="time" required />
                            <x-input-error :messages="$errors->get('time')" class="mt-2" />
                        </div>

                        <!-- Date -->
                        <div class="mt-4">
                            <x-input-label for="date" :value="__('Дата')" />
                            <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" required />
                            <x-input-error :messages="$errors->get('date')" class="mt-2" />
                        </div>
                        
                        <!-- Payment -->
                        <div class="mt-4">
                            <x-input-label for="payment" :value="__('Оплата')" />
                            <select name="payment" id="payment">
                                <option value="Безналично">Безналично</option>
                                <option value="Безналично">Налично</option>
                            </select>
                            <x-input-error :messages="$errors->get('payment')" class="mt-2" />
                        </div>

                        {{-- Service --}}
                        <div class="mt-4">
                            <select name="service_id" id="service_id">
                                @foreach ($service as $item)
                                    <option id="{{ $item->id }}" value="{{ $item->id }}"> 
                                        {{ $item->title }} 
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="border p-[7px] mt-[15px]">Создать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
