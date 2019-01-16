<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header badge-info">
                <div class="col-md-8">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input for="title"autofocus type="text" class="form-control form-title align-content-center"
                                   id="wh" placeholder="Post Title ">
                        </div>
                    </form>
                </div>
                <div class="com-md-4">
                    <i class="fa fa-pencil"></i>
                    <div id="demo" class="">
                        <a href="#"><i class="fa fa-paper-plane" title="Share" data-toggle="tooltip"
                                       data-placement="right"></i></a>
                        <a href="#"><i class="fa fa-heart" title="Love It" data-toggle="tooltip"
                                       data-placement="right"></i></a>
                        <a href="#"><i class="fa fa-wrench" title="Edit" data-toggle="tooltip"
                                       data-placement="right"></i></a>
                        <a href="#"><i class="fa fa-trash" title="Delite" data-toggle="tooltip"
                                       data-placement="right"></i></a>
                    </div>
                    <button type="button" class="btn btn-info btn-sm"
                            data-toggle="toggle" data-target="#demo">
                        <i class="fa fa-cog"></i>
                    </button>
                </div>
                <script>
                    $("[data-toggle='toggle']").click(function () {
                        var selector = $(this).data("target");
                        $(selector).toggleClass('in');
                    });
                </script>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    {{ csrf_field() }} <!-- we are using a Laravel helper to make sure our form has unique token to prevent cross site forgery. -->
                    <div>
                        <textarea for="content" cols="80" rows="10" id="content" name="content"></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('content');
                        </script>
                    </div>
                </form>
            </div>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input for="url" type="text" class="form-control align-content-center" style="color: #005cbf"
                           placeholder="Url">
                </div>
            </form>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-1">
                        <a href="#"><i class="fa fa-tags fa-lg" id="ci" title="Tags" data-toggle="tooltip"
                                       style="color: #16a085;"></i></a>
                    </div>
                    <div class="col-md-11">
                        <div class="chips chips-initial input-field">
                            <!--<div class="chip">NL78545645
                                <span class="closebtn" >&times;</span>
                            </div>-->
                            <input for="tags" type="text" class="chip-input" id="chip-input">
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $('#chip-input').attr('disabled', true);
                });
            </script>
            <script>
                $(document).ready(function () {
                    $("#ci").click(function () {
                    $('#chip-input').prop("disabled", false);
                    $('#chip-input').focus();
                    });
                });
            </script>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-1">
                        <div>
                            <img class="round" width="35" height="35" avatar="Female Bootcamp">
                        </div>
                    </div>
                    <div class="col-md-9" style="display: flex; align-items: center">
                        Posted on January 1, 2017 by
                        <a href="#" style="color: #16a085">Start Bootstrap</a>
                    </div>
                    <div class="com-md-2">
                        <a href="{{ route('editModal') }}">
                            <button type="button" class="btn btn-info" data-dismiss="modal">
                                Post
                            </button>
                        </a>
                    </div>
                            @if(Session::has('success'))
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                            <div id="message" class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>