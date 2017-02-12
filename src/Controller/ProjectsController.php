<?php

namespace App\Controller;

/**
 * Projects Controller
 *
 * @property \App\Model\Table\ProjectsTable $Projects
 */
class ProjectsController extends AppController {
    use WebAuthTrait;

    public function index() {

        $ownProjects = $this->Projects->find()->where(['owner_id' => $this->getUserId()]);

        $projects = $ownProjects;

        $this->set(compact('projects'));
    }
}