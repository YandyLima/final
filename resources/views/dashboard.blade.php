<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <a type="button" href="{{ route('users.create') }}" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Create</a>

                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Name
                                </th>
                                <th scope="col">
                                    <div class="flex items-center">
                                        Date Of Birth
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                                 aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                <path
                                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="flex items-center">
                                        DPI
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                                 aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                <path
                                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="flex items-center">
                                        Profession
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                                 aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                <path
                                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="flex items-center">
                                        Years working
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                                 aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                <path
                                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="flex items-center">
                                        Salary
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                                 aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                <path
                                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="flex items-center">
                                        Photo
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                                 aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                                <path
                                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </th>
                                <th scope="col" class="">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->first_name.' '.$user->last_name.' '.$user->first_lastname.' '.$user->second_lastname }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $user->date_of_birth }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->dpi }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->profession }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->years_working }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->salary }}
                                    </td>
                                    <td class="py-4 px-2">
                                        <img width="50%" class="rounded-t-lg"
                                             src="{{ Storage::disk('public')->url($user->photo) }}" alt=""/>
                                    </td>
                                    <td class="py-4 px-4">
                                        <div class="inline-flex rounded-md shadow-sm" role="group">
                                            <a type="button"
                                               href="{{ route('users.show', $user->id) }}"
                                               class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                <i class="px-2 text-blue-700 fa-solid fa-eye fa-2xl"></i>
                                            </a>

                                            <a type="button"
                                               href="{{ route('users.edit', $user->id) }}"
                                               class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                <i class="text-yellow-400 fa-solid fa-pen-to-square fa-2xl"></i>
                                            </a>
                                            @if(Auth::user()->id!=$user->id)
                                                <form action="{{ route('users.destroy', $user->id) }}"
                                                method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit"
                                                            class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                        <i class="text-red-600 fa-solid fa-trash-can fa-2xl"></i>
                                                    </button>
                                                </form>
                                            @endif
                                        </div>

                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
