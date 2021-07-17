<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Post;

class TestController extends Controller
{
    public function addStudent()
    {
        $students = [
            ['name' => 'smith', 'email' => 'smith@gmail.com', 'phone' => '1234'],
            ['name' => 'j', 'email' => 'j@gmail.com', 'phone' => '321'],
        ];
        Student::insert($students);
        return "Students are added";
    }
    
    public function addPost()
    {
        $students = [
            ['title' => 't1', 'body' => 'bodyyyyyyyy'],
            ['title' => 't2', 'body' => 'yyyyyyyyyyyyyyyyyyyyy2'],
        ];
        Post::insert($students);
        return "Post are added";
    }

    public function getFromBothDatabase()
    {
        $students = Student::all();
        $posts = Post::all();
        return view('index', ["students" => $students, "posts" => $posts]);
    }
}
