<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= SITE_TITLE ?></title>
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="page">
    <div class="pageHeader">
        <div class="title">Dashboard</div>
        <div class="userPanel"><span class="username">Nicole Aniston </span><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRec2Lcwv5fFgOkjrCMpmfvKVfizgB1Z-yh1av0vheec76zNITPjwm_75_DXcb8j9npfWU&usqp=CAU"
                    width="40" height="40"/></div>
    </div>
    <div class="main">
        <div class="nav">
            <div class="searchbox">
                <div><i class="fa fa-search"></i>
                    <input type="search" placeholder="Search"/>
                </div>
            </div>
            <div class="menu">
                <div class="title">Folder</div>
                <ul class="folder-list">
                    <?php foreach ($folders as $folder) : ?>
                        <li>
                            <svg class="svg-inline--fa fa-folder" aria-hidden="true" focusable="false" data-prefix="fas"
                                 data-icon="folder" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                 data-fa-i2svg="">
                                <path fill="currentColor"
                                      d="M64 480H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H288c-10.1 0-19.6-4.7-25.6-12.8L243.2 57.6C231.1 41.5 212.1 32 192 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64z"></path>
                            </svg><!-- <i class="fa fa-folder"></i> Font Awesome fontawesome.com -->
                            <?= $folder->name ?>
                            <a class="remove" href="?delete_folder=<?= $folder->id ?> "
                               onclick="return confirm('Are you sure for removing?');">
                                <!-- <i style="padding-left: 50%;" class="fa fa-trash"></i> Font Awesome fontawesome.com -->
                                <svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false"
                                     data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                          d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                </svg>
                            </a>
                        </li>

                    <?php endforeach; ?>
                    <li class="active"><i class="fa fa-folder"></i>Current Folder <i class="fa fa-trash"></i></li>
                </ul>
                <div class="add-folder-container">
                    <input id="addFolderTxt" type="text" class="add-folder-input" id="newFolderName"
                           placeholder="New Folder">
                    <button id="addFolderBtn" class="add-folder-button clickable">Add</button>
                </div>


            </div>
        </div>
        <div class="view">
            <div class="viewHeader">
                <div class="title">
                    <input id="addTaskTxt" type="text" class="add-task-input" placeholder="New Task Name" data-listener-added_40da385b="true" data-listener-added_1c538e48="true"/>
                </div>
                <div class="functions">
                    <div class="button active">Add New Task</div>
                </div>
            </div>
            <div class="content">
                <div class="list">
                    <div class="title">Today</div>
                    <ul>

                        <?php foreach ($tasks as $task) : ?>
                            <li class= <?= $task->is_done ? "checked" : "" ?>>
                                <i style="margin-left: 5px"
                                   class="fa <?= $task->is_done ? "fa-check-square" : "fa-square" ?>"></i>
                                <span><?= $task->title ?></span>
                                <div class="info">
                                    <span class="task-created"><?= $task->created_at ?></span>
                                    <a class="remove" href="?delete_task=<?= $task->id ?>"
                                       onclick="return confirm('Are you sure for removing?');">
                                        <svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false"
                                             data-prefix="fas" data-icon="trash" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                        <?php endforeach; ?>
                        <!--            <li class="checked"><i class="fa fa-check-square"></i><span>Update team page</span>-->
                        <!--              <div class="info">-->
                        <!--                <div class="button green">In progress</div><span>Complete by 25/04/2014</span>-->
                        <!--              </div>-->
                        <!--            </li>-->
                        <!--            <li><i class="fa fa-square"></i> <span>Design a new logo</span>-->
                        <!--              <div class="info">-->
                        <!--                <div class="button">Pending</div><span>Complete by 10/04/2014</span>-->
                        <!--              </div>-->
                        <!--            </li>-->
                        <!--            <li><i class="fa fa-square"></i><span>Find a front end developer</span>-->
                        <!--              <div class="info"></div>-->
                        <!--            </li>-->
                    </ul>
                </div>
                <div class="list">
                    <div class="title">Tomorrow</div>
                    <ul>
                        <li><i class="fa fa-square"></i><span>Find front end developer</span>
                            <div class="info"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partial -->
<script src="../assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('#addFolderBtn').click(function (e) {
            var input = $('#addFolderTxt');
            $.ajax({
                url: "process/ajaxHandler.php",
                method: "POST",
                data: {action: "addFolder", folderName: input.val()},
                success: function (response) {
                    if (response == 1) {
                        $('<li><i class="fa fa-folder"></i>'
                            + input.val() +
                            '<a class="remove" href="?delete_folder=<?= $folder->id ?> " onclick="return confirm("Are you sure for removing?");"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg> </a></li>')
                            .appendTo('.folder-list');
                    } else {
                        alert(response);
                    }
                }
            });
        });
    });
</script>
</body>
</html>
