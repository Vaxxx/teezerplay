<?php

namespace App\Http\Livewire;

use App\Jobs\ConvertVideoForStreaming;
use App\Models\Channel;
use App\Models\Video;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserDashboard extends Component
{
    use WithFileUploads;

    public $user_id;
    public $title;
    public $views;
    public $channel;
    public $video;

    public function render()
    {
        return view('livewire.user-dashboard', [
            'channels' => $this->retrieveChannels(),
        ]);
    }



    /*
     * method to retrieve all channels
     */
    public function retrieveChannels(){
        return Channel::all();
    }

    public function saveVideo(){
        $this->validate([
            'title' => 'required|min:3',
            'video' => 'required|file|max:2000000000|mimetypes:video/*',
        ]);

        $video = Video::create([
            'user_id' => $this->user_id,
            'channel_id' => $this->channel,
            'disk' => 'public',
            'title' => $this->title,
            'video' => $this->video,
        ]);

        ConvertVideoForStreaming::dispatch($video);


    }

}
