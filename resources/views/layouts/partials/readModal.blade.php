<div class="modal fade" id="readModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header badge-info">
                <div class="col-md-8">
                    <h4 class="modal-title">Modal Header</h4>
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
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                    Latin
                    professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                    consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                    literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and
                    1.10.33
                    of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
                    This
                    book is a treatise on the theory of ethics, very popular during the Renaissance. The first line
                    of
                    Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                    Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced
                    in
                    their exact original form, accompanied by English versions from the 1914 translation by H.
                    Rackham.</p>
            </div>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control align-content-center" style="color: #005cbf"
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
                            <input type="text" class="chip-input" id="chip-input">
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
                        <button type="button" class="btn btn-info" data-dismiss="modal"
                        >Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>