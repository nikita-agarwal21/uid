<?php

class ToDo{
    private $date;
    private $time;
    private $task;
   private $slno;

    public function __construct($date,$time,$task)
    {


        $this->date=$date;
        $this->time=$time;
        $this->task=$task;

    }
    public function getSlno()
    {
       return $this->slno;
    }

    public function setSlno($slno)
    {
       $this->slno= $slno;
    }

    public function getDate()
    {
       return $this->date;
    }

    public function setDate($date)
    {
       $this->date= $date;
    }

    public function getTime()
    {
       return $this->time;
    }

    public function setTime($time)
    {
       $this->time= $time;
    }

    public function getTask()
    {
       return $this->task;
    }

    public function setTask($task)
    {
       $this->task= $task;
    }




}







?>
