<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Intervention\Image\Facades\Image;

class StoreController extends Controller
{
    public function __invoke() {
        $data = request()->validate([
            'name'=>'required|unique:departments,name',
            'image'=>'required|image|mimes:jpeg,jpg,png|max:10000',
            'icon'=>'required|image|mimes:svg',
            'description'=>'required',
            'services'=>'required',
        ]);
        $file = request()->file('image');
        $image_name = $file->getClientOriginalName();
        $path = public_path() . '/img/service/' . $image_name;
        /* Save origin image */
        $file_content = $file->openFile()->fread($file->getSize());
        file_put_contents($path, $file_content);
        /* Save crop image */
        $file_content_crop = Image::make($path);
        $file_content_crop->fit(252, 383);
        $file_content_crop->save($path);
        $data['image'] = $image_name;

        $file = request()->file('icon');
        $image_name = $file->getClientOriginalName();
        $path = public_path() . '/img/doctors/helpers/' . $image_name;
        /* Save origin image */
        $file_content = $file->openFile()->fread($file->getSize());
        file_put_contents($path, $file_content);
        $data['icon'] = $image_name;

        Department::create($data);
        return redirect()->route('admin.department.index');
    }
}
