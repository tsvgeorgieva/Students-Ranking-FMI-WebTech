<h1>Specialities</h1>
<?php if (count($this->specialities) == 0) : ?>
    <p>There are no specialities right now. Would you like to <a href="/specialities/create">create a speciality</a>?</p>
<?php else : ?>
    <div class="m-y-1">
        <a class="btn btn-primary" href="/specialities/create">Create a speciality</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->specialities as $speciality) : ?>
            <tr>
                <td><?= $speciality['id'] ?></td>
                <td><?= $speciality['name'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>