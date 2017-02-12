<h2>My Projects</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Created</th>
            <th>Modified</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($projects as $project): ?>

            <tr>
                <td><strong><?= $this->Html->link(h($project->name),['controller' => 'Projects', 'action' => 'overview', $project->id]);?></strong></td>
                <td><?= h($project->created); ?></td>
                <td><?= h($project->modified); ?></td>
            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>
</div>