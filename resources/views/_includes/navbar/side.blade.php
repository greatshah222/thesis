<link href="{{asset('admin/admin.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Nav-CSS -->


    <div class="col-md-2">
        <div class="sidebar content-box" style="display: block;">
            <ul class="nav">
                <!-- Main menu -->
                <li class="current"><a href="{{asset('manage')}}"><i class="glyphicon glyphicon-home"></i>
                       Dashboard</a></li>
                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i>  Posts
                        <span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->
                    <ul>
                        <li><a href="{{asset('posts')}}">View  Posts</a></li>

                    </ul>
                    <ul>
                        <li><a href="{{asset('posts/create')}}">Create New  Posts</a></li>

                    </ul>
                    <ul>
                        <li><a href="{{asset('posts/trashed')}}">Trashed Posts</a></li>

                    </ul>
                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i>  Category
                        <span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->
                    <ul>
                        <li><a href="">View Category</a></li>

                    </ul>





                </li>
                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i>  Tags
                        <span class="caret pull-right"></span>
                    </a>
                    <!-- Sub menu -->
                    <ul>
                        <li><a href="">View tags</a></li>

                    </ul>





                </li>





                </li>
                <li class="current"><a href="#"><i class="glyphicon glyphicon-home"></i>
                        Administration</a></li>
                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Users
                        <span class="caret pull-right"></span>
                    </a>
                    <ul>
                        <li><a href="{{asset('manage/users  ')}}">View User</a></li>

                    </ul>
                    <ul>
                        <li><a href="{{asset('manage/users/create  ')}}">Create New Users</a></li>

                    </ul>






                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Site Settings
                        <span class="caret pull-right"></span>
                    </a>
                    <ul>
                        <li><a href="{{asset('settings ')}}">Update Site Info</a></li>

                    </ul>
                    <ul>
                        <li><a href="{{asset('photo ')}}">Image Setting</a></li>

                    </ul>







                </li>

            </ul>
        </div>
    </div> <!-- ADMIN SIDE NAV-->

<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");
            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });
    });
</script>
