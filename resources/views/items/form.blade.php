@csrf
<div class="md-form">
    <label for="title">タイトル</label>
    <input type="text" name="title" class="form-control" required value="{{ old('title')}}">
</div>

{{-- <!-- 紹介画像 -->
<div class="form-group">
    紹介画像
</div> --}}
{{-- <label for="item-image" role="button">
    <input type="file" class="form-control" name="item-image" id="item-image" accept="image/png,image/jpeg,image/gif">
    <img src="../../image/noimage.jpg" class="" style="object-fit: cover;width:300px;height:300px;" alt="">
</label> --}}

{{-- <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">画像</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" name="item-image" id="item-image"　accept="image/png,image/jpeg,image/gif">
    <label class="custom-file-label text-muted" for="item-image">画像を選択する（jpeg,png,gifのいずれか）</label>
  </div>
</div> --}}

<!-- カテゴリ -->
<div class="form-group">
    <label for="category">カテゴリ</label>
    <select name="category" id="category" class="form-select form-control">
        @foreach ($categories as $category)a
        <optgroup label="{{ $category->name }}">
            @foreach ($category->secondaryCategories as $secondary)
            <option value="{{$secondary->id}}" {{old('category') == $secondary->id ? 'selected' : ''}}>
                {{ $secondary->name }}
            </option>
            @endforeach
        </optgroup>
        @endforeach
    </select>
</div>

<!-- 所要時間 -->
<div class="form-group">
    <label for="take_time">所要時間</label>
    <input type="number" class="form-control" name="take_time" id="take_time" required value="{{ old('take_time') }}" min="0">
</div>
<!-- 受入可能人数 -->
<div class="form-group">
    <label for="capacity">受入可能人数</label>
    <input type="number" class="form-control" name="capacity" id="capacity" required value="{{ old('capacity') }}" min="0">
</div>
<!-- 内容 -->
<div class="form-group">
    <label for="description">内容</label>
    <textarea class="form-control" name="description" id="description" rows="16">{{ old('description') }}</textarea>
</div>
