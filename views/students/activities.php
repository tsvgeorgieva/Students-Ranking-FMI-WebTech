<h1>Student activities</h1>
<div>
    <label><strong><?= $this->student["name"] ?></strong></label>
</div>
<div>
    <label><i>Speciality: </i></label>
    <span><?= $this->student["speciality_name"] ?></span>
</div>
<div>
    <label><i>Class: </i></label>
    <span><?= $this->student["class_name"] ?></span>
</div>
<div>
    <label><i>Group: </i></label>
    <span><?= $this->student["group_name"] ?></span>
</div>
<div>
    <label><i>Total points: </i></label>
    <span><?= $this->student["total_points"] ?></span>
</div>

<?php if (count($this->activities) == 0) : ?>
    <p>There are no activities for this student right now. Would you like to <a href="/students/createActivity/<?= $this->student["id"]?>">add an
            activity</a>?</p>
<?php else : ?>
    <div class="m-y-1">
        <a class="btn btn-primary" href="/students/createActivity/<?= $this->student["id"]?>">Add activity</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Activity</th>
            <th>Points</th>
            <th>Date</th>
            <th>Course</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->activities as $activity) : ?>
            <tr>
                <td><?= $activity['activity_name'] ?></td>
                <td><?= $activity['points'] ?></td>
                <td><?= $activity['datetime'] ?></td>
                <td><?= $activity['course_name'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>