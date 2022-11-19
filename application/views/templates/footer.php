
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="card card-modal">
                  <img class="card-img-top img-modal">
                  <div class="card-body card-body-modal">
                    <h5 class="card-title title-modal"></h5>
                    <p class="card-text m-0 description-modal"></p>
                    <p class="card-text  m-0 price-modal"></p>
                    <p class="card-text m-0 interior-modal"></p>
                    <p class="card-text m-0 wide-modal"></p>
                    <p class="card-text m-0 sertificate-modal">t</p>
                  </div>
                  <a href="https://wa.me/6281398786403" class="btn btn-success">Hubungi Kami</a>
              </div>
            </div>
        </div>
        </div>
    </div>


    <div class="bg-dark mt-5 p-4">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-6">
            <h1 class="text-white title">OverDrive</h1>
          </div>
          <div class="col-md-6">
              <div class="ml-lg-5">
                <p class="text-white text-lg-left"> <i class="fa fa-facebook-official" aria-hidden="true"> </i> Facebook</p>
                <p class="text-white text-lg-left"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</p>
                <p class="text-white text-lg-left"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact US</p>
              </div>
          </div>
        </div>
        <!-- Copyright© -->
        <div class="row mt-5">
          <div class="col-12">
            <p class="text-white text-center">Copyright©  All Rigtht Reserved</p>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script >
        $(document).ready(function(){
            $( ".card-link" ).on( "click", function(s) {

                //get image by card
                let getElement = $(this).children(s)[0]
                $('.img-modal').attr('src',getElement.getElementsByClassName('card-img-top')[0].currentSrc)
                $('.title-modal').text(getElement.getElementsByClassName('card-title')[0].innerHTML)
                $('.description-modal').text(getElement.getElementsByClassName('card-text')[0].innerHTML)
                $('.price-modal').text(`Harga: ${getElement.getAttribute('data-price')}`)
                $('.interior-modal').text(`Interior:  ${getElement.getAttribute('data-interior')}`)
                $('.wide-modal').text(`Luas: ${getElement.getAttribute('data-wide')}`)
                $('.sertificate-modal').text(`Sertifikat: ${getElement.getAttribute('data-sertificate')}`)

                // open modal 
                $('#myModal').modal('show');

            });
        });
    </script>
</body>
</html>