
<div class="row">
<form action="/addnewtask/saveTask" method="POST">
    <div class="form-row">
        <div class="col">
            <div class="form-group">
                <label for="userName">Имя пользователя</label>
                <input class="form-control" id="userName" name="userName">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col">
            <div class="form-group">
                <label for="taskText">Текст задачи</label>
                <textarea class="form-control" id="taskText" rows="3" name="text"></textarea>
            </div>
        </div>
    </div>
    <button type="submit" id="submit" class="btn btn-primary">Добавить</button>
</form>
</div>