<?php

namespace App\Http\Controllers\Admin\Review;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class DestroyAllController extends Controller
{
    public function __invoke(Request $request) {
        $ids = $request->input('ids');

        // Удаление выбранных элементов
        foreach ($ids as $id) {
            $review = Review::find($id);
            $review->img == "user-photo.png" ? '' : unlink(public_path() . '/upload/' . $review->img);
        }
        Review::whereIn('id', $ids)->delete();

        return response()->json(['message' => 'Выбранные элементы успешно удалены']);
    }
}
