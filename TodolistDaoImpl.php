<?php

require_once 'TodoList.php';
require_once 'ToDolistDao.php';
require_once 'DatabaseUtilities.php';


class ToDoListDaoImpl implements ToDoListDao
{
    public function add($task)
    {
        $connection=DatabaseUtilities::getConnection('loginpage');
        $sql= "insert into todolist values (now(),now(),?)";
        $statement=$connection->prepare($sql);
        $statement->bind_param("s",$task);
        if($statement->execute())
        echo "";
        else
        echo $statement->error;

        $statement->close();
        $connection->close();
    }
    public function update()
    {
        $todos=array();
        $connection=DatabaseUtilities::getConnection('loginpage');
        $sql="select * from todolist";
        $resultSet=$connection->query($sql);
        if($resultSet->num_rows > 0)

            while($row=$resultSet->fetch_assoc())
            {
                $todo=new ToDo($row['date'],$row['time'],$row['task']);
                $todos[]=$todo;
        }
        $resultSet->close();
        $connection->close();

        return $todos;
    }
}


?>
