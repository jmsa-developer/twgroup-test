<?php

namespace App\Http\Livewire;

use App\Models\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class CreateLog extends Component
{
    public $comment;

    public $task_id;

    protected $rules = [
        'comment' => 'required|max:255',
        'task_id'=>'required'
    ];

    public function submit() {

        $validatedData = $this->validate();

       $log = Log::create($validatedData);

        Mail::send('emails.create_log',
            array(
                'name' => $log->task->userAssignedId->name,
                'comment' => $this->comment,
            ),
            function($message) use($log){
                $message->from('test_email@your_domain.com');
                $message->to($log->task->user->email, $log->task->user->name)->subject('A log has been created');
            }
        );

        $this->success = 'You has been created a log';

        $this->clearFields();

        return $this->render();

    }

    private function clearFields()
    {
        $this->comment = '';
    }

    public function render()
    {
        return view('livewire.create-log');
    }
}
