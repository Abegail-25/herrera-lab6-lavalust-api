<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {

        $this->call->view('Studenthome');
    }

    public function profile()
    {
        $student = [
            'student_id' => '2024-00186',
            'name'       => 'Herrera, Abegail Mae',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => '3F4',
            'email'      => 'abegailmaemarquez@gmail.com'
        ];

        $this->call->view('StudentProfile', $student);
    }
}