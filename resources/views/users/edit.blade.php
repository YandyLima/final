<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="block">
                        <!-- First Name -->
                        <div>
                            <x-input-label for="first_name" :value="__('First Name')"/>

                            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                                          :value="$user->first_name"
                                          required autofocus/>
                        </div>

                        <!-- Second Name -->
                        <div>
                            <x-input-label for="second_name" :value="__('Second Name')"/>

                            <x-text-input id="second_name" class="block mt-1 w-full" type="text" name="second_name"
                                          :value="$user->second_name"
                                          autofocus/>
                        </div>

                        <!-- First Lastname -->
                        <div>
                            <x-input-label for="first_lastname" :value="__('First Lastname')"/>

                            <x-text-input id="first_lastname" class="block mt-1 w-full" type="text"
                                          name="first_lastname"
                                          :value="$user->first_lastname"
                                          required autofocus/>
                        </div>

                        <!-- Second Lastname -->
                        <div>
                            <x-input-label for="second_lastname" :value="__('Second Lastname')"/>

                            <x-text-input id="second_lastname" class="block mt-1 w-full" type="text"
                                          name="second_lastname"
                                          :value="$user->second_lastname"
                                          required autofocus/>
                        </div>

                        <!-- Married Name -->
                        <div>
                            <x-input-label for="married_name" :value="__('Married Name')"/>

                            <x-text-input id="married_name" class="block mt-1 w-full" type="text" name="married_name"
                                          :value="$user->married_name"
                                          autofocus/>
                        </div>

                        <!-- Date of Birth -->
                        <div>
                            <x-input-label for="date_of_birth" :value="__('Date Of Birth')"/>

                            <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth"
                                          :value="$user->date_of_birth"
                                          required autofocus/>
                        </div>

                        <!-- DPI -->
                        <div>
                            <x-input-label for="dpi" :value="__('DPI')"/>

                            <x-text-input id="dpi" class="block mt-1 w-full" type="number" name="dpi"
                                          :value="$user->dpi"
                                          required autofocus maxlength="13"/>
                        </div>

                        <!-- Profession -->
                        <div>
                            <x-input-label for="profession" :value="__('Profession')"/>

                            <x-text-input id="profession" class="block mt-1 w-full" type="text" name="profession"
                                          :value="$user->profession"
                                          autofocus/>
                        </div>

                        <!-- Photo -->
                        <div>
                            <x-input-label for="photo" :value="__('Photo')"/>
                            <img width="20%" class="mx-left rounded-t-lg"
                                 src="{{ Storage::disk('public')->url($user->photo) }}" alt=""/>
                            <x-text-input id="photo" class="block mt-1 w-full" type="file" name="photo"
                                          autofocus/>
                        </div>

                        <!-- Years Working -->
                        <div>
                            <x-input-label for="years_working" :value="__('Years Working')"/>

                            <x-text-input id="years_working" class="block mt-1 w-full" type="text" name="years_working"
                                          :value="$user->years_working"
                                          autofocus/>
                        </div>

                        <!-- Salary -->
                        <div>
                            <x-input-label for="salary" :value="__('Salary')"/>

                            <x-text-input id="salary" class="block mt-1 w-full" type="text" name="salary"
                                          :value="$user->salary"
                                          required autofocus/>
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')"/>

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                          :value="$user->email"
                                          required/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Status')"/>

                            <select id="status" class="block mt-1 w-full" name="status_id" required/>
                            <option selected value="{{ $user->status_id }}">{{ $user->status->name }}</option>
                            @foreach($statuses as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                                </select>
                        </div>
                        <div class="mt-4">
                            <x-input-label for="role()" :value="__('Role')"/>

                            <select id="role" class="block mt-1 w-full" name="role_id" required/>
                            <option selected value="{{ $user->role_id }}">{{ $user->role->name }}</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                                </select>
                        </div>


                        <div class="flex items-center justify-end mt-4">


                            <x-primary-button class="ml-4">
                                {{ __('Save') }}
                            </x-primary-button>
                        </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
