<h1>Activities</h1>
<?php if (count($this->activities) == 0) : ?>
    <p>There are no activities right now. Would you like to <a href="/activities/create">create an activity</a>?</p>
<?php else : ?>
    <div class="m-y-1">
        <a class="btn btn-primary" href="/activities/create">Create an activity</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Course</th>
            <th>Name</th>
            <th>Points</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->activities as $activity) : ?>
            <tr>
                <td><?= $activity['id'] ?></td>
                <td><?= $activity['course_name'] ?></td>
                <td><?= $activity['name'] ?></td>
                <td><?= $activity['points'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>