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
                        <li><i class="fa fa-folder"></i><?= $folder->name ?> <a
                                    href="?delete_folder=<?= $folder->id ?>"><i class="fa fa-trash"></i></a></li>
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
                <div class="title">Manage Tasks</div>
                <div class="functions">
                    <div class="button active">Add New Task</div>
                    <div class="button">Completed</div>
                    <div class="button inverz"><i class="fa fa-trash"></i></div>
                </div>
            </div>
            <div class="content">
                <div class="list">
                    <div class="title">Today</div>
                    <ul>

                        <?php foreach ($tasks as $task) : ?>
                            <li class= <?= $task->is_done ? "checked" : ""?>>
                                <i style="margin-left: 5px" class="fa <?= $task->is_done ? "fa-check-square" : "fa-square"?>"></i>
                                <span><?= $task->title ?></span>
                                <div class="info">
                                    <span class="task-created"><?= $task->created_at ?></span>
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
                        $('<li><i class="fa fa-folder"></i>' + input.val() + '<a href="?delete_folder="><i class="fa fa-trash"></i></a></li>').appendTo('.folder-list');
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
