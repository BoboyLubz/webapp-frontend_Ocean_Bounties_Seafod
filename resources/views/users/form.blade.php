<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $header }}
        </h2>
    </x-slot>

    <div class="py-12">

        @if ( session('status') )
            <div>
                <div>
                    <span class="font-medium">Success Alert!</span> {{ session('status')}}
                </div>
            </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!--{/{ __("You're logged in!") }/}-->
                    <h2 class="float-left">
                        <!--{/{ Add User }}-->
                    </h2>

                    <form method="POST" action="{{  (url()->current() == url('/users/add') ) ? url('/users/add'):url('/users/update/' . $user->id)  }}"> <!--{/{ route('users.add') }}-->
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="( url()->current() == url('/users/add') ) ? old('name'):$user->name" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="( url()->current() == url('/users/add') ) ? old('email'):$user->email" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                       

                        @if ( url()->current() == url('/users/add') ) 
                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            {{--@if (url()->current() == url('/users/add') ) required @endif --}}
                                            autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        @endif
                        
                         <!-- User type -->
                        <div class="block mt-4">  
                            <div class="mt-4"> User Type : 
                                <div class="flex">
                                    <div class="flex items-center mr-4">
                                        <input id="inline-radio" type="radio" value="admin" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Admin</label>
                                    </div>
                                    <div class="flex items-center mr-4">
                                        <input id="inline-2-radio" type="radio" value="clerk" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Clerk</label>
                                    </div> 
                                </div>
                            </div>
                        </div>
            

                        <div class="flex items-center justify-end mt-4 ">
                            <x-primary-button class="ml-4">
                                {{ $header }} <!--{/{ __('Add User') }}-->
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</x-app-layout>
