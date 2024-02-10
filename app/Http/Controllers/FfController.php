<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\TodoResponse;
use Ramsey\Uuid\Uuid;

use Illuminate\Http\Request;

class FfController extends Controller
{
    public function show()
   {
    
   

         $data = 'Segoe';
        return view('ff',  compact('data'));
    }
    
    public function shows()
    {
        $sell = 'lol';
        return view('gg',  compact('sell'));
    }
 

    public function store()
    {
        try {
            $todo = new Todo();
            $todo->id = Uuid::uuid4();
            $todo->menu = request("menu");
            $todo->link = request("link");
      

         
            $res = new TodoResponse(true, "Created tdodo", $todo);
            $resp = response($res->to_json(), 201, ["Content-Type" => "application/json"]);
    
             
          
            return view('gg', compact('resp'));
            
        } catch (\Exception $e) {
            $res = new TodoResponse(false, "Invalid request", $e->getMessage());
            return response($res->to_json(), 500, ["Content-Type" => "application/json"]);
        }
    }

    public function showr($id)
    {
        try {
            $todo = Todo::query()->where("id", "=", $id)->get();

            if (!count($todo)) {
                $res = new TodoResponse(false, "Invalid request", null);
                return response($res->to_json(), 400, ["Content-Type" => "application/json"]);
            }
            $res = new TodoResponse(true, "Got todo", $todo);
            return response($res->to_json(), 200, ["Content-Type" => "application/json"]);
        } catch (\Exception $e) {
            $res = new TodoResponse(false, "Invalid request", $e->getMessage());
            return response($res->to_json(), 400, ["Content-Type" => "application/json"]);
        }
    }

    public function update($id)
    {
        try {
            $todo = Todo::query()->where("id", "=", $id)->get();

            if (!count($todo)) {
                $res = new TodoResponse(false, "Invalid request", null);
                return response($res->to_json(), 400, ["Content-Type" => "application/json"]);
            }

            $updated_todo = new Todo();
            $updated_todo->id = $id;
            $updated_todo->menu = request("menu");
            $updated_todo->link = request("link");

            $result = Todo::query()->where("id", "=", $id)->update([
                'id' => $id,
                'menu' => $updated_todo->menu,
                'link' => $updated_todo->link
            ]);

            if (!$result) {
                $res = new TodoResponse(false, "Invalid request", null);
                return response($res->to_json(), 400, ["Content-Type" => "application/json"]);
            }

            $res = new TodoResponse(true, "Updated todo", $updated_todo);
            return response($res->to_json(), 201, ["Content-Type" => "application/json"]);
        } catch (\Exception $e) {
            $res = new TodoResponse(false, "Invalid request", $e->getMessage());
            return response($res->to_json(), 400, ["Content-Type" => "application/json"]);
        }
    }

    public function delete($id)
    {
        try {
            $todo = Todo::query()->where('id', "=", $id);

            if (!count($todo->get())) {
                $res = new TodoResponse(false, "Invalid request", null);
                return response($res->to_json(), 400, ["Content-Type" => "application/json"]);
            }

            $result = $todo->delete();

            if (!$result) {
                $res = new TodoResponse(false, "Invalid request", null);
                return response($res->to_json(), 400, ["Content-Type" => "application/json"]);
            }

            $res = new TodoResponse(true, "Deleted todo", $todo);
            return response($res->to_json(), 200, ["Content-Type" => "application/json"]);
        } catch (\Exception $e) {
            $res = new TodoResponse(false, "Invalid request", $e->getMessage());
            return response($res->to_json(), 400, ["Content-Type" => "application/json"]);
        }
    }
}
