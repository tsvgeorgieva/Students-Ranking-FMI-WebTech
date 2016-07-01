<h1>Add activity for student</h1>
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
<form method="post" action="/students/createActivity/<?= $this->student["id"] ?>" class="row m-y-1">
    <div class="form-group col-xs-12 col-sm-6 col-lg-3">
        <label class="form-control-label"><strong>Activity</strong></label>
        <select class="form-control" name="activity_id">
            <option value="">Choose activity</option>
            <?php foreach ($this->allActivities as $activity) : ?>
                <option value="<?= $activity['id'] ?>"><?= htmlspecialchars($activity['course_name']) ?> - <?= htmlspecialchars($activity['name']) ?> - <?= htmlspecialchars($activity['points']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    
    <div class="form-group col-xs-12 col-sm-6 col-lg-3">
        <label class="form-control-label"><strong>Date</strong></label>
        <input name="date" type="date" value="" class="form-control"/>
    </div>

    <div class="col-xs-12">
        <input class="btn btn-primary" type="submit" value="Add activity"/>
    </div>
</form>