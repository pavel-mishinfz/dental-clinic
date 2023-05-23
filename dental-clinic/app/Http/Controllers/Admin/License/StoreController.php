<?php

namespace App\Http\Controllers\Admin\License;

use App\Http\Controllers\Controller;
use App\Models\License;
use Intervention\Image\Facades\Image;

class StoreController extends Controller
{
    public function __invoke() {
        $data = request()->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:10000',
        ]);
        $file = request()->file('image');
        $image_name = $file->getClientOriginalName();
        $path = public_path() . '/img/about/license/' . $image_name;
        /* Save origin image */
        $file_content = $file->openFile()->fread($file->getSize());
        file_put_contents($path, $file_content);
        /* Save crop image */
        $file_content_crop = Image::make($path);
        $file_content_crop->fit(320, 420);
        $file_content_crop->save($path);

        License::create(['image'=>$image_name]);

        return redirect()->route('admin.license.index');
    }
}
