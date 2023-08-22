<?php

namespace App\Http\Controllers;

use App\Traits\Candidate;
use App\Traits\Employer;

class PersonController extends Controller
{
    public function index(){
        $employersData = config('person.employers');
        $candidatesData = config('person.candidates');

        $employers = [];
        foreach ($employersData as $employer) {
            $employers[] = new Employer($employer);
        }

        $candidates = [];
        foreach ($candidatesData as $candidate) {
            $candidates[] = new Candidate($candidate);
        }

        // Employer
        foreach ($employers as $employer) {
            echo $employer . PHP_EOL . '<br>';
            echo "Array: " . print_r($employer->toArray(), true) . PHP_EOL . '<br>';
            echo "Json: " . $employer->toJson() . PHP_EOL . '<br>';
            echo PHP_EOL;
        }

        // Candidate
        foreach ($candidates as $candidate) {
            echo $candidate . PHP_EOL . '<br>';
            echo "Array: " . print_r($candidate->toArray(), true) . PHP_EOL . '<br>';
            echo "Json: " . $candidate->toJson() . PHP_EOL . '<br>';
            echo PHP_EOL;
        }
    }
}
