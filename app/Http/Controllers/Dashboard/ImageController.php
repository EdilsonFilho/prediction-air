<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ImageRepository;
use App\Models\File;
use Storage;
use Auth;

class ImageController extends Controller
{
    protected $imageRep;

    public function __construct(ImageRepository $image)
    {
        $this->imageRep = $image;
    }

    public function upload(Request $request)
    {
        if (Auth::user()->id != $request['userId']) {
            return redirect()->back()
                ->with(['message' => 'Você não tem permissão para fazer está ação.', 'code' => 'danger']);
        }

        $image = $this->imageRep->saveOrUpdate($request);

        if ($image['status']) {
            return redirect()->back()
                ->with(['message' => $image['message'], 'code' => $image['code']]);
        } else {
            return redirect()->back()
                ->with(['message' => $image['message'], 'code' => $image['code']]);
        }
    }

    public function destroy(File $file, Request $request)
    {
        $class = 'App\\Models\\' . $request['model'];
        $model = new $class;
        $objClass = $model::find($request['id']);

        if (!$objClass->files()->where('files.id', '=', $file->id)->first()) {
            return redirect()->back()
                ->with(['message' => 'Você não tem permissão para excluir está imagem.', 'code' => 'danger']);
        }

        $file->delete();

        if ($file) {

            Storage::delete($file->path . $file->name);

            return redirect()->back()
                ->with(['message' => 'Imagem excluída com sucesso.', 'code' => 'success']);
        } else {
            return redirect()->back()
                ->with(['message' => 'Erro ao excluir imagem. Tente novamente!', 'code' => 'danger']);
        }
    }
}
