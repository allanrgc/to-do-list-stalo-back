<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function getAll() {
        // $tasks = Task::all();
        // return response()->json($tasks);
        $user = Auth::user();
        $tasks = $user->tasks;
        return response()->json($tasks);
    }

    public function getById($id) {
        $task = Task::find($id);

        if ($task) {
            return response()->json($task);
        } else {
            return response()->json(['message' => 'Task not found'], 404);
        }
    }

    public function deleteTask($id) {
        $task = Task::find($id);

        if ($task) {
            $task->delete();
            return response()->json(['message' => 'Task deleted']);
        } else {
            return response()->json(['message' => 'Task not found'], 404);
        }
    }

    public function postTask(Request $request) {
        // $task = new Task();
        // $task->description = $request->input('description');
        // $task->save();

        // return response()->json($task, 201);
        $user = Auth::user();

        $task = new Task();
        $task->description = $request->input('description');
        $task->user_id = $user->id;
        $task->save();

        return response()->json($task, 201);
    }

    public function editTask(Request $request, $id) {
        $task = Task::find($id);

        if ($task) {
            $task->description = $request->input('description');
            $task->save();
            return response()->json($task);
        } else {
            return response()->json(['message' => 'Task not found'], 404);
        }
    }

    public function complete($id)
	{
		$task = Task::find($id);
		$task->isComplete = true;
		$task->save();
		return response()->json([
			"code" => 200,
			"message" => "Task listed as completed"
		]);
	}
}






//     protected function getTask() {

//         return [
//             [
//                 'id' => 1, 'name' => 'TASK 1', 'gender' => 'progressivo'
//             ],
//             [
//                 'id' => 2, 'name' => 'A task 2', 'gender' => 'trash metal'
//             ],
//             [
//                 'id' => 3, 'name' => 'dé a task 3', 'gender' => 'heavy metal'
//             ],
//             [
//                 'id' => 4, 'name' => 'metallica', 'gender' => 'heavy metal'
//             ],
//             [
//                 'id' => 5, 'name' => 'barões da pisadinha', 'gender' => 'tecno forró'
//             ],

//         ];

//     }
// }
