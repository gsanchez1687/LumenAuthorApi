<?php

namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;

class AuthorController extends Controller
{
    use ApiResponser;

    public function index(){
        $model = Author::all();
        return $this->successResponse($model);
    }

    public function store(Request $request){
        $rules = [
            'name'=>'required|max:255',
            'gender'=>'required|max:255|in:male,femele',
            'country'=>'required|max:255'
        ];
        $this->validate($request,$rules);
        $author = Author::create($request->all());
        return $this->successResponse($author,200);
    }

    public function show($author){
        $model = Author::findOrFail($author);
        return $this->successResponse($model);

    }

    public function update(Request $request, $author){
        $rules = [
            'name'=>'required|max:255',
            'gender'=>'required|max:255|in:male,femele',
            'country'=>'required|max:255'
        ];
        $this->validate($request,$rules);
        $model = Author::findOrFail($author);
        $model->fill($request->all());
        if($model->isClean()){
            return $this->errorResponse('At least one value must change',422);
        }
        $model->save();
        return $this->successResponse($model);
    }

    public function destroy($author){
        $author = Author::findOrFail($author);
        $author->delete();
        return $this->successResponse($author);
    }
}
