<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">أوزون برودكاست</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center> <img src="{{ asset('storage/images/noti.png')}}" alt="" width="80" height="65"></center>
                    <div class="mb-4"></div>
                    <h4 style="text-align: center">اشترك في خدمة الإشعارات لمتابعة آخر الأخبار المحلية والعالمية فور وقوعها
                    </h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary subscribe" id="subscribe">اشترك</button>

                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(window).on('load', function() {
            setTimeout(() => {
                if (!localStorage.getItem("subBannerDisplayed")) {
                    $('#myModal').modal('show');
                }
            }, 1000);
        });

        $("#subscribe").click(function() {
            //alert("Handler for .click() called.");
            $('#myModal').modal('hide');


        });

        const modal = document.querySelector(".modal");
        const modalButton = document.querySelector(".subscribe");

        modalButton.addEventListener("click", () => {
            $('#myModal').modal('hide');
            localStorage.setItem("subBannerDisplayed", "true");
        });
    </script>