<h1>Students</h1>
<?php if (count($this->students) == 0) : ?>
    <p>There are no students right now. Would you like to <a href="/students/create">create a student</a>?</p>
<?php else : ?>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Faculty number</th>
            <th>Group</th>
            <th>Class</th>
            <th>Speciality</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->students as $student) : ?>
            <tr>
                <td><?= $student['name'] ?></td>
                <td><?= $student['faculty_number'] ?></td>
                <td><?= $student['group_name'] ?></td>
                <td><?= $student['class_name'] ?></td>
                <td><?= $student['speciality_name'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>