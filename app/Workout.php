<?php

namespace App;

class Workout
{
    public $exercises =  null;

    public function __construct($oldWorkout){
        if(!empty($oldWorkout)){
            //dd($oldWorkout);
            $this->exercises = $oldWorkout->exercises;
        }
    }

    public function add($id, $name, $weights, $reps){
        $count = 0;
        $storedExercise['id'] = $id;
        $storedExercise['exerciseName'] = $name;
        for ($i=0;$i<count($reps);$i++) {
            if($reps[$i] != ""){
                $storedExercise['weights'][$count] = $weights[$i];
                $storedExercise['reps'][$count] = $reps[$i];
                $count++;
            }
        }
        if (!array_key_exists('reps', $storedExercise)) {
            unset($this->exercises[$id]);
        }else{
            $this->exercises[$id] = $storedExercise;
        }

        //dd($this->exercises);
    }
}
