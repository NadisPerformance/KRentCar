

    <div><label for="picture"> picture</label><input type="image" name="picture" id="picture" value="{{old('picture',$car->picture?? null)}}"></div>
    <div><label for="model"> model</label><input type="text" name="model" id="model" value="{{old('model',$car->model?? null)}}"></div>
    <div><label for="model_date"> model_date</label><input type="text" name="model_date" id="model_date" value="{{old('model_date',$car->model_date?? null)}}"></div>
    <div><label for="price"> price</label><input type="text" name="price" id="price" value="{{old('price',$car->price?? null)}}"></div>
    <div><label for="automatique"> automatique</label><input type="text" name="automatique" id="automatique" value="{{old('automatique',$car->automatique?? null)}}"></div>
    <div><label for="statut"> statut</label><input type="text" name="statut" id="statut" value="{{old('statut',$car->statut?? null)}}"></div>
    <div><label for="brands_id"> brands_id</label><input type="text" name="brands_id" id="brands_id" value="{{old('brands_id',$car->brands_id?? null)}}"></div>
    <div><label for="agencies_id"> agencies_id</label><input type="text" name="agencies_id" id="agencies_id" value="{{old('agencies_id',$car->agencies_id?? null)}}"></div>
    <div><label for="categories_id"> categories_id</label><input type="text" name="categories_id" id="categories_id" value="{{old('categories_id',$car->categories_id?? null)}}"></div>
    <div><label for="colors_id"> colors_id</label><input type="text" name="colors_id" id="colors_id" value="{{old('colors_id',$car->colors_id?? null)}}"></div>
  
 @if($errors->any())
 <ul>
 @foreach($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
</ul>
@endif
