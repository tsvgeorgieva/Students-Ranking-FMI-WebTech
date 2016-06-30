<h1>Groups</h1>
<?php if (count($this->groups) == 0) : ?>
    <p>There are no groups right now. Would you like to <a href="/groups/create">create a group</a>?</p>
<?php else : ?>
    <div class="m-y-1">
        <a class="btn btn-primary" href="/groups/create">Create a group</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Class</th>
            <th>Speciality</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->groups as $group) : ?>
            <tr>
                <td><?= $group['id'] ?></td>
                <td><?= $group['name'] ?></td>
                <td><?= $group['class_name'] ?></td>
                <td><?= $group['speciality_name'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>