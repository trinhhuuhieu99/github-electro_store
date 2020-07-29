@extends('master')
@section('content')
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
                            <tbody>
                                <tr class="text-center">
                                    <td class="product-remove"><button class="delete-item glyphicon glyphicon-remove btn btn-danger"></button></td>
                                    <td class="image-prod">
                                        <div class="d-flex flex-row flex-nowrap"> <!--div as flexbox with content in a row without wrap-->
                                            <div class="img img-responsive"> <!--responsive img inside div-->
                                                <img class="img img-fluid" src="source/pages/images/7.jpg" alt="">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-name">
                                        <h3>Bell Pepper</h3>
                                    </td>
                                    <td class="price"><span>200000000</span> <i>đ</i></td>
                                    <td class="quantity">
                                        <div class="form-inline">
                                            <button class="glyphicon glyphicon-minus btn btn-danger btn-minus"></button>
                                            <input type="number" class="item-count" max="20" min="1" data-name="" value="1">
                                            <button class="glyphicon glyphicon-plus  btn btn-success btn-plus"></button>
                                        </div>
                                    </td>
                                    <td class="tbl-total"> <span>200000000</span> <i>đ</i> </td>
                                </tr>
                                <tr class="text-center">
                                    <td class="product-remove"><button class="delete-item glyphicon glyphicon-remove btn btn-danger"></button></td>
                                    <td class="image-prod">
                                        <div class="d-flex flex-row flex-nowrap"> <!--div as flexbox with content in a row without wrap-->
                                            <div class="img img-responsive"> <!--responsive img inside div-->
                                                <img class="img img-fluid" src="source/pages/images/2.jpg" alt="">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-name">
                                        <h3>Bell Pepper</h3>
                                    </td>
                                    <td class="price"><span>200000000</span> <i>đ</i></td>
                                    <td class="quantity">
                                        <div class="form-inline">
                                            <button class="glyphicon glyphicon-minus btn btn-danger btn-minus"></button>
                                            <input type="number" class="item-count" max="20" min="1" data-name="" value="1">
                                            <button class="glyphicon glyphicon-plus  btn btn-success btn-plus"></button>
                                        </div>
                                    </td>
                                    <td class="tbl-total"> <span>200000000</span> <i>đ</i> </td>
                                </tr>
                                <tr class="text-center">
                                    <td class="product-remove"><button class="delete-item glyphicon glyphicon-remove btn btn-danger"></button></td>
                                    <td class="image-prod">
                                        <div class="d-flex flex-row flex-nowrap"> <!--div as flexbox with content in a row without wrap-->
                                            <div class="img img-responsive"> <!--responsive img inside div-->
                                                <img class="img img-fluid" src="source/pages/images/4.jpg" alt="">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-name">
                                        <h3>Bell Pepper</h3>
                                    </td>
                                    <td class="price"><span>200000000</span> <i>đ</i></td>
                                    <td class="quantity">
                                        <div class="form-inline">
                                            <button class="glyphicon glyphicon-minus btn btn-danger btn-minus"></button>
                                            <input type="number" class="item-count" max="20" min="1" data-name="" value="1">
                                            <button class="glyphicon glyphicon-plus  btn btn-success btn-plus"></button>
                                        </div>
                                    </td>
                                    <td class="tbl-total"> <span>200000000</span> <i>đ</i> </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class=" area-total">
                            <div>
                                <div>
                                    <i>Tổng tiền: </i>
                                    <Span>20000000 <i>đ</i></Span>
                                </div>
                                <div>
                                    <i>Giảm giá: </i>
                                    <Span>20000000 <i>đ</i></Span>
                                </div>
                                <div>
                                    <i>Cần thanh toán: </i>
                                    <Strong>20000000 <i id="color-total">đ</i></Strong>
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
                                <div class="form-group form-inline ">
                                    <input type="text" name="Name" class="form-control name_input " placeholder="Họ và tên" value="" />
                                    <input type="text" name="phone" class="form-control phone_input" placeholder="Số điện thoại" value="" />
                                </div>
                                <div class="form-group ">
                                    <input type="text" name="email" class="form-control email_input " placeholder="Email" value="" />
                                </div>
                                <div class="form-group ">
                                    <input type="text" name="address" class="form-control address_input" placeholder="Địa chỉ của bạn" value="" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger glyphicon glyphicon-triangle-left btn-shopping ">Shopping  </button>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 info_1  ">
                                <div class="form-group">
                                    <textarea name="Msg" class="form-control msg_input " placeholder="Yêu cầu khác(không bắt buộc)" style="width: 100%; height: 150px;"></textarea>
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