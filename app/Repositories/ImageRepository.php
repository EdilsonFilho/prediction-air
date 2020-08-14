<?php

namespace App\Repositories;

use App\Models\File;
use Exception;
use Validator;
use Storage;
use DB;

class ImageRepository
{
    public function saveOrUpdate($request)
    {
        $class = 'App\\Models\\' . $request['model'];
        $model = new $class;

        try {

            DB::beginTransaction();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:jpeg,png|max:2048',
            ]);

            if ($validator->fails()) {
                throw new Exception($validator->errors()->first('file'));
            }

            $objClass = $model::find($request['id']);

            $highlight = (isset($request['highlight']) && $request['highlight'] == 1) ? 1 : 0;

            $file = $objClass->files()
                ->where('highlight', '=', $highlight)
                ->get()->first();

            if ($file) {

                if (!Storage::delete($file->path . $file->name)) {
                    throw new Exception('Erro ao remover a imagem fisicamente do disco. Tente novamente!');
                }

                $objClass->files()->detach($file);
                $file->delete();
            }

            $name = uniqid(date('HisYmd'));
            $extension = $request->file('file')->extension();
            $nameFile = "{$name}.{$extension}";

            $file = File::create([
                'type' => $request->file('file')->getMimeType(),
                'name' => $nameFile,
                'extension' => $request->file('file')->getClientOriginalExtension(),
                'size' => $request->file('file')->getClientSize(),
                'path' => '/',
                'highlight' => $highlight
            ]);

            $objClass->files()->attach($file);

            DB::commit();

            $upload = $request->file('file')->storeAs('/', $nameFile);

            if ($upload) {
                return ['status' => true, 'id' => $request['id'], 'message' => 'Imagem adicionada com sucesso.', 'code' => 'success'];
            } else {
                throw new Exception('Erro ao adicionar imagem. Tente novamente!');
            }
        } catch (Exception $e) {
            DB::rollBack();
            return [
                'status' => false,
                'message' => 'Erro ao adicionar imagem. Exception: ' . $e->getMessage(),
                'exception' => $e->getMessage(),
                'code' => 'danger',
                'id' => $request['id']
            ];
        }
    }
}
