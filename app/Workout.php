<?php

namespace App;

class Workout
{
    public $exercises = null;

    public function __construct($oldWorkout){
        if($oldWorkout){
            $this->$exercises = $oldWorkout;
        }
    }

    public function add($id, $weights, $sets){
        $storedExercise['id'] = $id;
        if ($this->exercises) {
            if (array_key_exists($id, $this->exercises)) {
                $storedExercise['id'] = $this->exercises[$id];
            }
        }
        $storedExercise[$id]['sets'] = $sets;
        for ($i=0;$i<$sets;$i++) {            
            $storedExercise[$id]['weights'][$i] = $weights[$i];
        }
        $this->exercises[$id] = $storedExercise;
    }
}
