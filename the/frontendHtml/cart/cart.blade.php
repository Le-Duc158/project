@if(Session::has("cart") != null)
<div class="select-items">
    <table>
        <tbody>
            @foreach(Session::get('cart')->products as $item)
            <tr>
                <td class="si-pic" style="width: 30%;"><img src="public/frontend/imgs/{{$item['productInfo']->img}}" alt=""></td>
                <td class="si-text" style="width: 500%;" >
                    <div class="product-selected">
                        <p>${{$item['productInfo']->price}} x {{$item['quanty']}}</p>
                        <h6>{{$item['productInfo']->name}}</h6>
                    </div>
                </td>
                <td class="si-close" style="width: 20%;text-align: right;">
                    <i data-id="{{$item['productInfo']->id}}" class="fas fa-times"></i>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
<div class="select-total">
    <span>total:</span>
    <h5>${{Session::get('cart')->totalPrice}}</h5>
    <input hidden id="total-quanty-cart" type="number" value="{{Session::get('cart')->totalQuanty}}" >
</div>
@endif