<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Status') }}
        </h2>
    </x-slot>
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div
                class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Status of your registration
                    </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Your status is in {{ $status }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
