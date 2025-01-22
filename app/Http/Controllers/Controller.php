<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $view = 'dashboard.';
    protected $url = 'dashboard/';
    protected $marketersView = 'marketers.';
    protected $marketersUrl = 'marketers/';
    protected $deliveryView = 'deliveries.';
    protected $deliveryUrl = 'deliveries/';
    protected $frontView = 'front.';
    protected $pathImages = 'uploads/';
    protected $paginate = 20;
    protected $quality = 80;
    protected $encode = 'jpg';

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // protected $company_setting;
    // public function __construct()
    // {
    //     $this->company_setting = CompanySetting::all();
    //     View::share('company_setting', $this->company_setting);
    // }

    public function uploadImage($file, $path, $oldFile = null, int $width = null, int $height = null, int $thumbnailWidth = null, int $thumbnailHeight = null, bool $watermark = false)
    {
        if ($file) {
            // Rename File
            $rename = $file->hashName();

            // Store the file in the 'public_images' disk
            $fullPath = $file->storeAs($this->pathImages . $path, $rename, 'public_images');

            // Generate thumbnail if needed
            if ($thumbnailWidth || $thumbnailHeight) {
                $this->thumbnailImage($file, $rename, $path, $thumbnailWidth, $thumbnailHeight, $watermark);
            }

            // Delete old file if it exists
            if ($oldFile) {
                $this->deleteImage($oldFile);
            }

            return $fullPath;
        }

        return $oldFile;
    }
    public function deleteImage($image)
    {
        if ($image) {
            if (is_array($image)) {
                foreach ($image as $img) {
                    if (!is_null($img)) {
                        $this->destroyFile($img);
                    }
                }
            } else {
                $this->destroyFile($image);
            }
        }

        return true;
    }

    private function destroyFile($file)
    {
        // Delete Image from images folder
        File::delete($file);
        // Delete Thumbnail Image from Thumbnail folder
        File::delete($this->pathImages . 'thumbnail' . substr($file, strpos($file, '/', 6)));
    }
}
