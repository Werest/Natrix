<!--top-->
<div class="container">
    <div class="row align-items-center position-sticky">
        <div class="col-5">
            <img src="img/gamepad.svg" alt="" height="48">
        </div>
        <div class="col">
            <a href="#">Главная</a>
        </div>
        <div class="col">
            <a href="#">Новости</a>
        </div>
        <div class="col">
            <a href="#">О нас</a>
        </div>
        <div class="col">
            <a href="#">Youtube</a>
        </div>
    </div>
</div>

<!--medium-->
<div class="container">
    <div class="row justify-content-md-center">
    <? for($i=0; $i<10; $i++) { ?>
        <div class="col-4 p-3">
            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title">Название элемента</h5>
                    <p class="card-text">Информация о элементе.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    <? } ?>
    </div>
</div>