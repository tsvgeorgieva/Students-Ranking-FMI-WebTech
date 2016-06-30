<h1>Classes</h1>
<?php if (count($this->classes) == 0) : ?>
    <p>There are no classes right now. Would you like to <a href="/classes/create">create a class</a>?</p>
<?php else : ?>
    <div class="m-y-1">
        <a class="btn btn-primary" href="/classes/create">Create a class</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Speciality</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->classes as $class) : ?>
            <tr>
                <td><?= $class['id'] ?></td>
                <td><?= $class['name'] ?></td>
                <td><?= $class['speciality_name'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>