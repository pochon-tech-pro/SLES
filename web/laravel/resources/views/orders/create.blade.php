<!DOCTYPE html>
<html lang="ja">
@section('title', '注文')
@include("parts.common")
  <body>
    @include("parts.nav")
    <!-- body -->
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">注文</div>
        <div class="panel-body">
          <form action="{{ url('/orders') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label">注文するユーザのID</label>
              <input class="form-control" type="text" name="user_id">
            </div>
            <div class="form-group">
              <label class="control-label">注文ステータス</label>
              <select class="form-control" name="status">
                <option value="1">注文完了</option>
                <option value="2">出荷完了</option>
                <option value="3">その他</option>
              </select>
            </div>
            <div class="form-group">
              <label class="control-label">商品選択</label>
              <div class="checkbox" id="goods">
                <label><input type="checkbox" name="goods[]" value="1001">歯ブラシ</label>
                <label><input type="checkbox" name="goods[]" value="1002">歯磨き粉</label>
              </div>
            </div>
            <input type="submit" value="登録" /> 
          </form>
        </div>
      </div>
    </div>
  </body>
  <script>
    // // querySelector: https://www.webprofessional.jp/dom-manipulation-vanilla-javascript-no-jquery/
    // const $elUserId = document.querySelector('#userId');
    // const $elStatus = document.querySelector('#status');
    // // querySelectorAll & checkbox: https://techacademy.jp/magazine/29964
    // const $elGoods = document.querySelectorAll('#goods input[type="checkbox"]');
    // const $elSubmitBtn = document.querySelector('#submitBtn');
    // $elSubmitBtn.addEventListener('click', () => {
    //   const goods = [];
    //   for (let i = 0; i < $elGoods.length; i++){
    //     if($elGoods[i].checked){ //(color1[i].checked === true)と同じ
    //       goods.push($elGoods[i].value);
    //     }
    //   }
    //   alert(`登録完了: ${$elUserId.value}, ${$elStatus.value}, ${goods.join(',')}`)
    // })
  </script>
</html>