<?php

class Task extends Model
{

    public function getAllTasks()
    {

        $query = "SELECT `u`.`login`, `t`.`email`, `t`.`text`, `t`.`status`
                  FROM `tasks` `t`
                  LEFT JOIN `users` `u` ON `t`.`user_id` = `u`.`id`";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    public function addNewTask($formData)
    {

        $query = "INSERT INTO `tasks`
                  SET `user_id` = 3, `email` = :email, `text` = :text";

        $stmt = $this->db->prepare($query);
        //TODO доделать id
        // $stmt->bindValue(":login", $formData['userName'], PDO::PARAM_STR);
        $stmt->bindValue(":email", $formData['email'], PDO::PARAM_STR);
        $stmt->bindValue(":text", $formData['text'], PDO::PARAM_STR);

        try {
            $stmt->execute();
        } catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
        }

    }

    public function getTasksByPage(int $page)
    {

        $query = "SELECT `u`.`login`, `t`.`email`, `t`.`text`, `t`.`status`
                  FROM `tasks` `t`
                  LEFT JOIN `users` `u` ON `t`.`user_id` = `u`.`id`
                  LIMIT ";



    }


}
