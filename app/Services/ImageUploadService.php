<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ImageUploadService
{
    public function upload(UploadedFile $file, string $directory): string
    {
        $fileName = $this->generateFileName($file);

        $this->ensureDirectoryExists($directory);

        $file->move(public_path($directory), $fileName);

        return $directory.'/'.$fileName;
    }

    public function replace(UploadedFile $file, ?string $oldPath, string $directory): string
    {
        $this->delete($oldPath);

        return $this->upload($file, $directory);
    }

    public function delete(?string $path): void
    {
        if ($path === null || $path === '') {
            return;
        }

        $fullPath = public_path($path);

        if (File::exists($fullPath)) {
            File::delete($fullPath);
        }
    }

    private function generateFileName(UploadedFile $file): string
    {
        return time().'-'.Str::random(10).'.'.$file->getClientOriginalExtension();
    }

    private function ensureDirectoryExists(string $directory): void
    {
        $fullPath = public_path($directory);

        if (! File::isDirectory($fullPath)) {
            File::makeDirectory($fullPath, 0755, true);
        }
    }
}
