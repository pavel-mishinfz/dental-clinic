<?php

namespace App\Http\Controllers\Admin\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Intervention\Image\Facades\Image;

class StoreController extends Controller
{
    public function __invoke() {
        $data = request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'lastname' => 'required',
            'image'=> 'required|image|mimes:jpeg,jpg,png|max:10000',
            'icon'=> 'required|image|mimes:svg',
            'position' => 'required',
            'orientation' => 'required',
            'experience' => 'required|numeric',
            'certificates' => 'required',
        ]);

        $file = request()->file('image');
        $image_name = $file->getClientOriginalName();
        $path = public_path() . '/img/doctors/' . $image_name;
        /* Save origin image */
        $file_content = $file->openFile()->fread($file->getSize());
        file_put_contents($path, $file_content);
        /* Save crop image */
        $file_content_crop = Image::make($path);
        $file_content_crop->fit(474, 620);
        $file_content_crop->save($path);
        $data['image'] = $image_name;

        $file = request()->file('icon');
        $image_name = $file->getClientOriginalName();
        $path = public_path() . '/img/doctors/' . $image_name;
        /* Save origin image */
        $file_content = $file->openFile()->fread($file->getSize());
        file_put_contents($path, $file_content);
        $data['icon'] = $image_name;

        Doctor::create($data);
        return redirect()->route('admin.doctor.index');
    }
}
