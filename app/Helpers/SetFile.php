<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\AlbumRequest;
use App\Http\Requests\SongRequest;

class SetFile
{
    public static function storingSongImage(SongRequest $request)
    {
        if (isset($request['image_cover'])) {
            $file = Input::file('image_cover');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move("upload/song", $name);
            return $name;
        }
    }

    public static function storingAlbumImage(AlbumRequest $request)
    {
        if (isset($request['image_cover'])) {
            $file = Input::file('image_cover');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move("upload/album", $name);
            return $name;
        }
    }
}
