<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="adjust-nav">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Projet LO07</a>
        </div>

        <ul class="nav navbar-nav navbar-right" >
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#fff;padding-right:30px">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;
                    <?php
                        echo $username;
                    ?>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="action/logAction.php?action=logout">LOGOUT</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>