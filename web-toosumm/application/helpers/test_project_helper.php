<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    function find_project($id)
    {
      //echo $id; exit();
      $ci =& get_instance();
        $query=$ci->db->select('project.id,project.project_name,project.start_date,project.due_date,project.project_image,project.internal_cost,project.external_cost,status.status,priority.priority_name,clients.clients_name')
            // ->where_not_in('users.id', $not_in_array)
              // ->where(['project_team.team_id' => $id])
               ->from('project')
              // ->join('task','project.task_id = task.id')
               ->join('priority','project.priority_id = priority.id')
               ->join('clients','project.clients_id = clients.id')
               ->join('status','project.status_id = status.id')
               ->join('project_team','project.id = project_team.project_id')
                
              ->get();
              //echo "<pre>", print_r($ci->db->last_query()), exit;
 //echo "<pre>", print_r($query->result()), exit;
   return $query->result();
    }   
 function find_team($id)
    {
     // echo $id; exit();
      $ci =& get_instance();
        $query=$ci->db->select('project.id,project.team_id')
            // ->where_not_in('users.id', $not_in_array)
            // ->where(['project_team.team_id' => $id])
             ->where(['project.id' => $id])
              ->from('project')
              // ->join('task','project.task_id = task.id')
              // ->join('priority','project.priority_id = priority.id')
               //->join('clients','project.clients_id = clients.id')
               //->join('status','project.status_id = status.id')
             //  ->join('project_team','project.id = project_team.project_id')
                
              ->get();
              //echo "<pre>", print_r($ci->db->last_query()), exit;
 //echo "<pre>", print_r($query->result()), exit;
   return $query->result();
    }   