<div class="container-fluid">
    <div class="row">

        <div class="col-md-10  col-md-offset-1">

            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col ">
                            <h3 class="panel-title">Статистика</h3>
                        </div>
                        <div class="col  text-right">

                        </div>
                    </div>
                </div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Телефон</th>
                            <th>E-mail</th>
                            <th>ФИО</th>
                            <th>Компания</th>
                            <th>Должность</th>
                            <th>Дата посещения</th>
                            <th>Дата регистрации</th>
                            <th>Сообщение</th>
                            <th>Статус</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $user->id; ?></td>
                                <td><?= $user->phone; ?></td>
                                <td><?= $user->email; ?></td>
                                <td><?= $user->initials; ?></td>
                                <td><?= $user->company; ?></td>
                                <td><?= $user->doljnost; ?></td>
                                <td><?= $user->date; ?></td>
                                <td><?= $user->date_reg; ?></td>
                                <td><?= $user->question; ?></td>
                                <?php
                                if ($user->accept == "0") {
                                    echo "<td style='background: darkred'>Не обработан</td>
                                            <td>
                                            <form action='/admin' method='post'>
                                            <input type='hidden' name='status_rename' value='$user->id'>
                                            <button type='submit' class='btn btn-primary'>обработать</button>
                                            </form>
                                            </td>";
                                } else {
                                    echo "<td style='background: lightgreen'>Обработан</td>";
                                }
                                ?>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
                </div>

            </div>