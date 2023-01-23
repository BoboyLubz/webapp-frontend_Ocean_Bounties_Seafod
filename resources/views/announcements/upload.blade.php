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

                    <form method="POST" action="{{  (url()->current() == url('/announcements/add') ) ? url('/announcements/add'):url('/announcements/update/' . $announcement->id)  }}"> <!--{/{ route('users.add') }}-->
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="( url()->current() == url('/announcements/add') ) ? old('name'):$announcement->name" required autofocus />
                            <!--<x-input-error :messages="$errors->get('name')" class="mt-2" />-->
                        </div>
                        <div>
                            <x-input-label for="price" :value="__('Price')" />
                            <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="( url()->current() == url('/announcements/add') ) ? old('price'):$announcement->price" required autofocus />
                            <!--<x-input-error :messages="$errors->get('name')" class="mt-2" />-->
                        </div>
                        <div>  
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" name="description" :value="( url()->current() == url('/announcements/add') ) ? old('description'):$announcement->description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your Description here..."></textarea>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload Image</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image" name="image" type="file" :value="( url()->current() == url('/announcements/add') ) ? old('image'):$announcement->image" multiple>
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
