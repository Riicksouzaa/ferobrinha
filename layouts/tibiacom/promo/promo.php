<?php if (!isset($_REQUEST['subtopic']) || $_REQUEST['subtopic'] == 'latestnews') { ?>
    <?php if (Website::getWebsiteConfig()->getValue('website_sale')) { ?>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/css/mdb.min.css" rel="stylesheet">

        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/js/mdb.min.js"></script>

        <!-- Central Modal Danger Demo-->
        <div class="modal fade" id="ModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-top modal-notify  modal-danger" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading">Quer usar esse lindo website em seu projeto?</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-3">
                                <p></p>
                                <p class="text-center"><i class="fas fa-shopping-cart fa-4x"></i></p>
                            </div>

                            <div class="col-9">
                                <p>
                                    Pois bem, venho por meio deste lhe oferecer uma oferta imperdível.<br><br>
                                    Todo o conteúdo deste website sairá por uma bagatela de R$300,00.<br><br>
                                    Isso mesmo, você irá utilizar toda a segurança e beneficios deste website pagando apenas um cafézinho por dia.
                                    <br>
                                </p>
                                <h2>De: <span class="badge badge-primary"><s>R$880,00</s></span>
                                    <br>Por: <span class="badge">R$300,00</span></h2>
                            </div>
                        </div>
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <a href="https://api.whatsapp.com/send?phone=+5562999340570&text=Olá, vi sobre a promoção do ferobra. Tenho interesse em comprar. Como devo proceder?" type="button" class="btn btn-danger">Quero comprar agora! <i class="far fa-gem ml-1 white-text"></i></a>
                        <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Não obrigado.</a>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
            //Swal.fire({
            //    title: 'Sweet!',
            //    text: 'Modal with a custom image.',
            //    imageUrl: "./layouts/tibiacom/images/promocoes/<?//= Website::getWebsiteConfig()->getValue('promo_imagename') ?>//",
            //    // imageWidth: 400,
            //    // imageHeight: 200,
            //    imageAlt: 'Custom image',
            //    animation: true
            //});
            $("#ModalDanger").modal('show');
        </script>
    <?php } ?>
    <?php if (Website::getWebsiteConfig()->getValue('promo_isactive')) { ?>
        <div id="promo-overlay" style="display: none"></div>
        <div id="promoloader" style="z-index: 5000; display: none">
            <div style="text-align: center">
                <a href="./?subtopic=accountmanagement&action=donate">
                    <img class=""
                         src="./layouts/tibiacom/images/promocoes/<?= Website::getWebsiteConfig()->getValue('promo_imagename') ?>"/>
                </a>
            </div>
        </div>
        <script src="./layouts/tibiacom/promo/promo.js<?php echo $css_version; ?>"></script>
        <script>
            $(document).ready(function () {
                showPromo();
            });
            $('#promoloader').on('click', function () {
                closePromo();
            });
            $(document).keyup(function (e) {
                if (e.key === "Escape") {
                    closePromo();
                }
            });
        </script>
    <?php } ?>
<?php } ?>