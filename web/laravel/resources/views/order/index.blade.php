<html>
  <head>
    <meta charset="utf-8">
    <title>管理画面-注文</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
  </head>
  <body>
    <!-- header -->
    <nav class="navbar navbar-default">
      <!-- <div class="container-fluid"> -->
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Top</a>
        </div>
      </div>
    </nav>
    <!-- body -->
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">注文</div>
        <div class="panel-body">
          <form>
            <div class="form-group">
              <label class="control-label">項目1</label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">項目2</label>
              <div class="radio">
                <label><input type="radio" name="radio">選択肢1</label>
                <label><input type="radio" name="radio">選択肢2</label>
                <label><input type="radio" name="radio">選択肢3</label>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">項目3</label>
              <div class="checkbox">
                <label><input type="checkbox" name="checkbox">選択肢1</label>
                <label><input type="checkbox" name="checkbox">選択肢2</label>
                <label><input type="checkbox" name="checkbox">選択肢3</label>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">項目4</label>
              <select class="form-control">
                <option>選択肢1</option>
                <option>選択肢2</option>
                <option>選択肢3</option>
                <option>選択肢4</option>
                <option>選択肢5</option>
              </select>
            </div>
            <button class="btn btn-default">送信</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>