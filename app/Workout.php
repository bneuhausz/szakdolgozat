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

    public function add($id, $weights, $reps){
        //$storedExercise['id'] = $id;
        for ($i=0;$i<count($reps);$i++) {
            $storedExercise['weights'][$i] = $weights[$i];
            $storedExercise['reps'][$i] = $reps[$i];
        }
        /*if ($this->exercises) {
            if (array_key_exists($id, $this->exercises)) {
                $storedExercise[$id] = $this->exercises[$id];
                //dd($storedExercise);
            }
        }*/
        //dd($this->exercises);
        $this->exercises[$id] = $storedExercise;
    }
}
