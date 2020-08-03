@extends('master')
@section('content')
    <script>
        $(".cart").hide();
    </script>
    <div class="add_card">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-list">

                        <table class="table">  {{-- bảng sản phẩm --}}
                            <thead class="thead-primary">
                            <tr class="text-center">
                            <th id="th_1">&nbsp;</th>
                            <th id="th_2" >&nbsp;</th>
                            <th id="th_3" >Product name</th>
                            <th id="th_4" >Price</th>
                            <th id="th_5" >Quantity</th>
                            <th id="th_6">Subtotal</th>
                            </tr>
                            </thead>
                            <tbody class="tbl_show_cart">
                            </tbody>
                        </table>

                        <div class=" area-total">
                            <div>
                                <div>
                                    <i>Tổng tiền: </i>
                                    <Span class="total-cart-detail" >0</Span><i>đ</i>
                                </div>
                                <div class="minus-sp" >
                                    <i>Giảm giá: </i>
                                    <span  >-</span><Span class="total-discount">0 </Span><i>đ</i>
                                </div>
                                <div>
                                    <i>Cần thanh toán: </i>
                                    <Strong class="total-cart-all" >0 </Strong><i id="color-total">đ</i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="infoUser"> {{-- thông tin khách hàng --}}
                            <div class="col-lg-8 info_1  ">
                                <div class="form-group form-inline ">
                                    <div class="gender-check">
                                        <label class="radio-inline">          
                                            <input name="gender" id="inlineCheckbox1" value="male" type="radio"><p>Nam</p> </label> 
                                        <label class="radio-inline">          
                                            <input name="gender" id="inlineCheckbox2" value="female" type="radio"><p>Nữ</p></label>
                                    </div> 
                                </div>
                                <div class="form-group-lg form-inline ">
                                    <input type="text" name="Name" class="form-control name_input " placeholder="Họ và tên" value="" />
                                    <input type="text" name="phone" class="form-control phone_input" placeholder="Số điện thoại" value="" />
                                </div>
                                <div class="form-group-lg ">
                                    <input type="text" name="email" class="form-control email_input " placeholder="Email" value="" />
                                </div>
                                <div class="form-group-lg ">
                                    <input type="text" name="address" class="form-control address_input" placeholder="Địa chỉ của bạn" value="" />
                                </div>
                                <div class="form-group">
                                <button type="button" class="btn btn-danger glyphicon glyphicon-triangle-left btn-shopping " ><a href="{{route('Trang-chu')}}" id="color-shoping" >Shopping </a></button>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 info_1  ">
                                <div class="form-group">
                                    <textarea name="Msg" class="form-control msg_input " placeholder="Yêu cầu khác (không bắt buộc)" style="width: 100%; height: 150px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-checkout ">Check-out <span class="glyphicon glyphicon-triangle-right"></span> </button>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection