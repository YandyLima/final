<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  border-b border-gray-200">

                    <div
                        class="md:w-80 mx-auto bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">

                        <!-- Name -->
                        <img width="50%" class="mx-auto rounded-t-lg"
                             src="{{ Storage::disk('public')->url($user->photo) }}" alt=""/>

                        <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">
                            {{ $user->name }}</h5>

                        <div class="p-5">

                            <!-- E-mail -->
                            <p class="font-bold text-gray-400 dark:text-gray-400"> E-MAIL </p>
                            <h5 class="mb-3 w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                {{ $user->email }}</h5>

                            <!-- FULL NAME -->
                            <p class="font-bold text-gray-400 dark:text-gray-400"> FULL NAME </p>
                            <h5 class="mb-3 w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                {{ $user->first_name}} {{ $user->second_name}} {{ $user->first_lastname}} {{ $user->second_lastname}} </h5>

                            <!-- DATE OF BIRTH -->
                            <p class="font-bold text-gray-400 dark:text-gray-400"> DATE OF BIRTH </p>
                            <h5 class="mb-3 w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                {{ $user->date_of_birth }}</h5>

                            <!-- DPI -->
                            <p class="font-bold text-gray-400 dark:text-gray-400"> DPI </p>
                            <h5 class="mb-3 w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                {{ $user->dpi }}</h5>

                            <!-- PROFESSION -->
                            <p class="font-bold text-gray-400 dark:text-gray-400"> PROFESSION </p>
                            <h5 class="mb-3 w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                {{ $user->profession }}</h5>

                            <!-- YEARS WORKING -->
                            <p class="font-bold text-gray-400 dark:text-gray-400"> YEARS WORKING </p>
                            <h5 class="mb-3 w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                {{ $user->years_working }}</h5>

                            <!-- SALARY -->
                            <p class="font-bold text-gray-400 dark:text-gray-400"> SALARY </p>
                            <h5 class="mb-3 w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                {{ $user->salary }}</h5>

                            <!-- STATUS -->
                            <p class="font-bold text-gray-400 dark:text-gray-400"> STATUS </p>
                            <h5 class="mb-3 w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                {{ $user->status->name }}</h5>
                            <!-- ROLE -->
                            <p class="font-bold text-gray-400 dark:text-gray-400"> ROLE </p>
                            <h5 class="mb-3 w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                {{ $user->role->name }}</h5>
                            <div class="inline-flex rounded-md shadow-sm" role="group">
                                <form method="POST" action="{{ route('update.status', $user->id) }}">
                                    @csrf
                                    <input type="hidden" name="status_id" value="2">
                                    <button type="submit"
                                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                        Accepted
                                    </button>
                                </form>
                                <form method="POST" action="{{ route('update.status', $user->id) }}">
                                    @csrf
                                    <input type="hidden" name="status_id" value="3">
                                    <button type="submit"
                                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                        Refused
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
</x-app-layout>
