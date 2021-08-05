<div>
    <div class="border-b-4 border-gray-300 border-opacity-75 pb-12">
        <div class="mt-4 grid grid-cols-4 row-gap-4 col-gap-2">
            <div class="">
                <div class="h-40 w-full bg-gray-700 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="">
                </div>
                <div class="flex mt-2">
                    <div class="h-10 w-10 bg-blue-300 rounded-full flex-shrink-0 overflow-hidden" >
                        <img src="https://images.unsplash.com/photo-1570724061670-86a53c509dee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" alt="">
                    </div>
                    <div class="ml-2">
                        <div class="text-sm font-bold">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                        <div class="text-xs text-gray-600">
                            <p>Channel Name</p>
                            <p>9 hours ago &middot; 87k views</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="border-b-4 border-gray-300 border-opacity-75  mt-4 text-center items-center">
        <div class="">
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-600 shadow-md overflow-hidden sm:rounded-lg">
                    <h3 class="items-center text-center divide-x ">Add a Video to your channel</h3>
                </div>
                <form method="POST" wire:submit.prevent="saveVideo" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <x-jet-label for="title" value="{{ __('Video Title') }}" />
                        <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" wire:model="title" required autofocus autocomplete="title" />
                        @error('title')<span class="error">{{$message}}</span>@enderror
                    </div>


                    <x-jet-input id="user_id"   type="hidden" name="user_id"   wire:model="user_id" />

                    <div class="mt-4">
                        <x-jet-label for="channel" value="{{ __('Channel Name') }}" />
{{--                        <x-jet-input id="channel" class="block mt-1 w-full" type="text" name="channel" :value="old('channel')" required autofocus autocomplete="channel" />--}}
                        <select name="channel" wire:model="channel" class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="Regular input">
                            @if($channels->count())
                                @foreach($channels as $channel)
                                    <option value="{{$channel->id}}"> {{$channel->name}} </option>
                                @endforeach
                            @endif
                        </select>
                        @error('channel')<span class="error">{{$message}}</span>@enderror
                    </div>



                    <div class="mt-4">
                        <x-jet-label for="video" value="{{ __('Choose Video') }}" />
                        <x-jet-input id="video" wire:model="video" class="block mt-1 w-full" type="file" />

                        @error('video')<span class="error">{{$message}}</span>@enderror
                    </div>




                    <div class="flex items-center justify-end mt-4">

                        <x-jet-button class="ml-4">
                            {{ __('Upload Video') }}
                        </x-jet-button>
                    </div>
                </form>

            </div>


        </div>
    </div>
</div>
