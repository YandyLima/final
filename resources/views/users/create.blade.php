<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- First Name -->
                    <div>
                        <x-input-label for="first_name" :value="__('First Name')"/>

                        <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                                      :value="old('first_name')"
                                      required autofocus/>
                    </div>

                    <!-- Second Name -->
                    <div>
                        <x-input-label for="second_name" :value="__('Second Name')"/>

                        <x-text-input id="second_name" class="block mt-1 w-full" type="text" name="second_name"
                                      :value="old('second_name')"
                                      autofocus/>
                    </div>

                    <!-- First Lastname -->
                    <div>
                        <x-input-label for="first_lastname" :value="__('First Lastname')"/>

                        <x-text-input id="first_lastname" class="block mt-1 w-full" type="text" name="first_lastname"
                                      :value="old('first_lastname')"
                                      required autofocus/>
                    </div>

                    <!-- Second Lastname -->
                    <div>
                        <x-input-label for="second_lastname" :value="__('Second Lastname')"/>

                        <x-text-input id="second_lastname" class="block mt-1 w-full" type="text" name="second_lastname"
                                      :value="old('second_lastname')"
                                      required autofocus/>
                    </div>

                    <!-- Married Name -->
                    <div>
                        <x-input-label for="married_name" :value="__('Married Name')"/>

                        <x-text-input id="married_name" class="block mt-1 w-full" type="text" name="married_name"
                                      :value="old('married_name')"
                                      autofocus/>
                    </div>

                    <!-- Date of Birth -->
                    <div>
                        <x-input-label for="date_of_birth" :value="__('Date Of Birth')"/>

                        <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth"
                                      :value="old('date_of_birth')"
                                      required autofocus/>
                    </div>

                    <!-- DPI -->
                    <div>
                        <x-input-label for="dpi" :value="__('DPI')"/>

                        <x-text-input id="dpi" class="block mt-1 w-full" type="number" name="dpi" :value="old('dpi')"
                                      required autofocus maxlength="13"/>
                    </div>

                    <!-- Profession -->
                    <div>
                        <x-input-label for="profession" :value="__('Profession')"/>

                        <x-text-input id="profession" class="block mt-1 w-full" type="text" name="profession"
                                      :value="old('profession')"
                                      autofocus/>
                    </div>

                    <!-- Photo -->
                    <div>
                        <x-input-label for="photo" :value="__('Photo')"/>

                        <x-text-input id="photo" class="block mt-1 w-full" type="file" name="photo"
                                      :value="old('photo')"
                                      required autofocus/>
                    </div>

                    <!-- Years Working -->
                    <div>
                        <x-input-label for="years_working" :value="__('Years Working')"/>

                        <x-text-input id="years_working" class="block mt-1 w-full" type="text" name="years_working"
                                      :value="old('years_working')"
                                      autofocus/>
                    </div>

                    <!-- Salary -->
                    <div>
                        <x-input-label for="salary" :value="__('Salary')"/>

                        <x-text-input id="salary" class="block mt-1 w-full" type="text" name="salary"
                                      :value="old('salary')"
                                      required autofocus/>
                    </div>

                    <!-- Email -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')"/>

                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                      :value="old('email')"
                                      required/>
                    </div>


                    <div class="flex items-center justify-end mt-4">


                        <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
