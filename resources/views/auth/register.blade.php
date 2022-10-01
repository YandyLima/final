<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('user.register') }}" enctype="multipart/form-data">
            @csrf

            <!-- First Name -->
            <div>
                <x-input-label for="first_name" :value="__('First Name')" />

                <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"
                              required autofocus />
            </div>

            <!-- Second Name -->
            <div>
                <x-input-label for="second_name" :value="__('Second Name')" />

                <x-text-input id="second_name" class="block mt-1 w-full" type="text" name="second_name" :value="old('second_name')"
                            autofocus />
            </div>

            <!-- First Lastname -->
            <div>
                <x-input-label for="first_lastname" :value="__('First Lastname')" />

                <x-text-input id="first_lastname" class="block mt-1 w-full" type="text" name="first_lastname" :value="old('first_lastname')"
                              required autofocus />
            </div>

            <!-- Second Lastname -->
            <div>
                <x-input-label for="second_lastname" :value="__('Second Lastname')" />

                <x-text-input id="second_lastname" class="block mt-1 w-full" type="text" name="second_lastname" :value="old('second_lastname')"
                              required autofocus />
            </div>

            <!-- Married Name -->
            <div>
                <x-input-label for="married_name" :value="__('Married Name')" />

                <x-text-input id="married_name" class="block mt-1 w-full" type="text" name="married_name" :value="old('married_name')"
                                autofocus />
            </div>

            <!-- Date of Birth -->
            <div>
                <x-input-label for="date_of_birth" :value="__('Date Of Birth')" />

                <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')"
                              required autofocus />
            </div>

            <!-- DPI -->
            <div>
                <x-input-label for="dpi" :value="__('DPI')" />

                <x-text-input id="dpi" class="block mt-1 w-full" type="number" name="dpi" :value="old('dpi')"
                              required autofocus maxlength="13" />
            </div>

            <!-- Profession -->
            <div>
                <x-input-label for="profession" :value="__('Profession')" />

                <x-text-input id="profession" class="block mt-1 w-full" type="text" name="profession" :value="old('profession')"
                              autofocus />
            </div>

            <!-- Photo -->
            <div>
                <x-input-label for="photo" :value="__('Photo')" />

                <x-text-input id="photo" class="block mt-1 w-full" type="file" name="photo" :value="old('photo')"
                              required autofocus />
            </div>

            <!-- Years Working -->
            <div>
                <x-input-label for="years_working" :value="__('Years Working')" />

                <x-text-input id="years_working" class="block mt-1 w-full" type="text" name="years_working" :value="old('years_working')"
                              autofocus />
            </div>

            <!-- Salary -->
            <div>
                <x-input-label for="salary" :value="__('Salary')" />

                <x-text-input id="salary" class="block mt-1 w-full" type="text" name="salary" :value="old('salary')"
                              required autofocus />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                              required />
            </div>


            <div class="flex items-center justify-end mt-4">

                <a href="{{ route('login') }}"
                   class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        {{ __('Already registered?') }}
                    </span>
                </a>


                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
        </x-auth-card>

</x-guest-layout>
