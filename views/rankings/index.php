<form method="post" action="/rankings/index" class="row">
    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
        <label class="form-control-label">Course</label>
        <select class="form-control" name="course_id">
            <option value="" class="text-muted">Choose course</option>
            <?php foreach ($this->allCourses as $course) : ?>
                <option value="<?= $course['id'] ?>" <?= $course['id'] == $this->courseId ? 'selected="selected"': ''?>><?= htmlspecialchars($course['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
        <label class="form-control-label">Speciality</label>
        <select class="form-control" name="speciality_id">
            <option value="">Choose speciality</option>
            <?php foreach ($this->allSpecialities as $speciality) : ?>
                <option value="<?= $speciality['id'] ?>" <?= $speciality['id'] == $this->specialityId ? 'selected="selected"': ''?>><?= htmlspecialchars($speciality['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
        <label class="form-control-label">Class</label>
        <select class="form-control" name="class_id">
            <option value="">Choose class</option>
            <?php foreach ($this->allClasses as $class) : ?>
                <option value="<?= $class['id'] ?>" <?= $class['id'] == $this->classId ? 'selected="selected"': ''?>><?= htmlspecialchars($class['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
        <label class="form-control-label">Group</label>
        <select class="form-control" name="group_id">
            <option value="">Choose group</option>
            <?php foreach ($this->allGroups as $group) : ?>
                <option value="<?= $group['id'] ?>" <?= $group['id'] == $this->groupId ? 'selected="selected"': ''?>><?= htmlspecialchars($group['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
        <label class="form-control-label">Student</label>
        <select class="form-control" name="student_id">
            <option value="">Choose student</option>
            <?php foreach ($this->allStudents as $student) : ?>
                <option value="<?= $student['id'] ?>" <?= $student['id'] == $this->studentId ? 'selected="selected"': ''?>><?= htmlspecialchars($student['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="col-xs-12">
        <input class="btn btn-primary" type="submit" value="See ranking"/>
    </div>
</form>

<h1>Students ranking</h1>
<?php if (count($this->studentsRankings) == 0) : ?>
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
            <th>Course</th>
            <th>Points</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->studentsRankings as $student) : ?>
            <tr>
                <td><?= $student['name'] ?></td>
                <td><?= $student['faculty_number'] ?></td>
                <td><?= $student['group_name'] ?></td>
                <td><?= $student['class_name'] ?></td>
                <td><?= $student['speciality_name'] ?></td>
                <td><?= $student['course_name'] ?></td>
                <td><?= $student['points'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>