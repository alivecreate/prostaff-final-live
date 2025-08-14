  <!-- Cart area start  -->
  <section class="cart-area pt-120 pb-120">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <form action="#">
                     <div class="table-content table-responsive wow tpfadeUp animated" data-wow-duration=".9s"
                        data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: tpfadeUp;">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th class="product-thumbnail">Images</th>
                                 <th class="cart-product-name">Product</th>
                                 <th class="product-price">Unit Price</th>
                                 <th class="product-quantity">Quantity</th>
                                 <th class="product-subtotal">Total</th>
                                 <th class="product-remove">Remove</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="product-thumbnail">
                                    <a href="{{route('product-details')}}">
                                       <img src="frontend/img/product/product-1-1.png" alt="">
                                    </a>
                                 </td>
                                 <td class="product-name">
                                    <a href="{{route('product-details')}}">specialone 4 Inch 820W</a>
                                 </td>
                                 <td class="product-price">
                                    <span class="amount">$180.00</span>
                                 </td>
                                 <td class="product-quantity">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1">
                                    <span class="cart-plus">+</span>
                                 </td>
                                 <td class="product-subtotal">
                                    <span class="amount">$760.00</span>
                                 </td>
                                 <td class="product-remove">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="product-thumbnail">
                                    <a href="{{route('product-details')}}">
                                       <img src="frontend/img/shop/product-1-2.jpg" alt="">
                                    </a>
                                 </td>
                                 <td class="product-name">
                                    <a href="{{route('product-details')}}">specialone 4 Inch 820W</a>
                                 </td>
                                 <td class="product-price">
                                    <span class="amount">$1260.50</span>
                                 </td>
                                 <td class="product-quantity">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1">
                                    <span class="cart-plus">+</span>
                                 </td>
                                 <td class="product-subtotal">
                                    <span class="amount">$90.50</span>
                                 </td>
                                 <td class="product-remove">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="product-thumbnail">
                                    <a href="{{route('product-details')}}">
                                       <img src="frontend/img/product/product-1-2.png" alt="">
                                    </a>
                                 </td>
                                 <td class="product-name">
                                    <a href="{{route('product-details')}}">specialone 4 Inch 820W</a>
                                 </td>
                                 <td class="product-price">
                                    <span class="amount">$180.00</span>
                                 </td>
                                 <td class="product-quantity">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1">
                                    <span class="cart-plus">+</span>
                                 </td>
                                 <td class="product-subtotal">
                                    <span class="amount">$760.00</span>
                                 </td>
                                 <td class="product-remove">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="product-thumbnail">
                                    <a href="{{route('product-details')}}">
                                       <img src="frontend/img/product/product-1-3.png" alt="">
                                    </a>
                                 </td>
                                 <td class="product-name">
                                    <a href="{{route('product-details')}}">specialone 4 Inch 820W</a>
                                 </td>
                                 <td class="product-price">
                                    <span class="amount">$1260.50</span>
                                 </td>
                                 <td class="product-quantity">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" value="1">
                                    <span class="cart-plus">+</span>
                                 </td>
                                 <td class="product-subtotal">
                                    <span class="amount">$90.50</span>
                                 </td>
                                 <td class="product-remove">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="coupon-all">
                              <div class="coupon">
                                 <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                    placeholder="Coupon code" type="text">
                                 <button class="it-btn-green yellow-bg" name="apply_coupon" type="submit">
                                    <span>Apply coupon</span>
                                 </button>
                              </div>
                              <div class="coupon2">
                                 <button class="it-btn-green yellow-bg" name="update_cart" type="submit">
                                    <span>Update cart</span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-end">
                        <div class="col-md-5 ">
                           <div class="cart-page-total">
                              <h2>Cart totals</h2>
                              <ul class="mb-20">
                                 <li>Subtotal <span>$250.00</span></li>
                                 <li>Total <span>$250.00</span></li>
                              </ul>
                              <a class="it-btn-green yellow-bg" href="{{('checkout')}}">
                                 <span>Proceed to checkout</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- Cart area end  -->