<?php

namespace App\Http\Controllers\board;

use App\ProductImage;

use File;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    protected $image;

    public function __construct()
    {
        $this->image = new ProjectImages();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        $image = $this->image->find($id);

        $full_path = public_path('/images/portfolio/'.$image->imagePath);

        File::delete($full_path);

        $image->delete();

        return redirect()->back();
    }
}
