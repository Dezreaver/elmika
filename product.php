<!-- Header -->

<?php include "includes/header.php" ?>

<!-- Body -->

<div id="main-content" class="container">

    <div class="row">
        <div class="col-md-7">
            <h3>Lorem Ipsum</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius lorem nec risus interdum,
                nec aliquet nisl egestas. Nunc eu eros laoreet, dapibus nisi nec, posuere mi. Vivamus venenatis
                sit amet odio a egestas. Cras enim mauris, consequat id nunc eget, tempus placerat sem. Morbi vitae
                facilisis purus. In at nisi eu purus pretium feugiat. Aliquam blandit euismod magna, in dictum lorem
                vestibulum id.
            </p>
            <p>
                Curabitur in purus suscipit, convallis ligula eu, sagittis velit. Curabitur quis finibus purus. Vivamus
                fringilla orci nibh, et eleifend purus semper eu. Cras luctus, turpis a venenatis ultricies, tellus
                neque
                rhoncus metus, et accumsan nulla turpis a nunc. Integer mollis hendrerit tellus, at mollis nibh semper
                sit
                amet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                Integer
                ultrices velit at lacus eleifend scelerisque. Praesent nec lacinia mi. Aenean dignissim lacus vitae
                turpis
                semper fermentum. Nam ultricies lectus ut risus convallis vestibulum. Quisque pharetra, urna id egestas
                aliquet, eros arcu blandit purus, nec pharetra ex lectus condimentum quam.
            </p>
        </div>
        <div class="col-md-5">
            <img src="images/productimggal.JPG" alt="Product Image Gallery">
        </div>
    </div>
    <h3>Variations</h3>
    <div class="row">
        <div class="col-md-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                One
            </button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Two
            </button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Three
            </button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Four
            </button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                            <p>Some info about this variant.</p>
                            <img src="images/products/dancingpepe.gif" alt="dancing pepe">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->

<?php include "includes/footer.php" ?>