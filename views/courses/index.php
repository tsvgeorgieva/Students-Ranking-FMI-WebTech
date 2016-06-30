<h1>Courses</h1>
<?php if (count($this->courses) == 0) : ?>
    <p>There are no courses right now. Would you like to <a href="/courses/create">create a course</a>?</p>
<?php else : ?>
    <div class="m-y-1">
        <a class="btn btn-primary" href="/courses/create">Create a course</a>
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
        <?php foreach ($this->courses as $course) : ?>
            <tr>
                <td><?= $course['id'] ?></td>
                <td><?= $course['name'] ?></td>
                <td><?= $course['speciality_name'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>