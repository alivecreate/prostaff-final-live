    
<div class="modal fade bd-example-modal-lg theme-modal cart-modal" id="addtocart" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal1">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="modal-bg addtocart">
                                <div class="product-section">
                                    <div class="col-12 product-upsell text-center p-4">

                                        <h4 class="m-3">{{$message}}</h4>

                                            <form method="POST" class="deleteForm"  action="">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="view-cart btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                            
                                                <button type="submit" class="view-cart btn btn-solid">Delete</button>
                                            </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>