
 @php $input = "name"; @endphp
 <div class="form-group">
    <label class="col-lg-2 control-label">name</label>
     <div class="col-lg-4">
         <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
           class="form-control" required>
           @error($input)
           <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
            </span>
           @enderror
    </div>
 </div>    
 @php $input = "price"; @endphp
 <div class="form-group">
     <label class="col-lg-2 control-label">price</label>
     <div class="col-lg-4">
         <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
           class="form-control" required>
           @error($input)
           <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
           </span>
           @enderror
     </div>
 </div>    
 @php $input = "quantity"; @endphp
 <div class="form-group">
      <label class="col-lg-2 control-label">quantity</label>
      <div class="col-lg-4">
          <input type="text" name="{{ $input }}" value="{{ isset($row) ? $row->{$input} : '' }}"
            class="form-control" required>
            @error($input)
            <span class="invalid-feedback" role="alert" >
                     <strong>{{ $message }}</strong>
            </span>
            @enderror
      </div>
  </div>    
  
  @php $input = "category_id"; @endphp
  <div class="form-group">
       <label class="col-lg-2 control-label">category</label>
       <div class="col-lg-4">
          <select name="category_id"  class="form-control" required>
            @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </select>
       </div>
   </div>  

@php $input = "image"; @endphp          
<div class="form-group">
        <label class="col-md-2 control-label">image</label>
        <div class="col-md-4 ls-group-input">
            <input name="{{ $input }}" id="file-3" type="file"  >
        </div>
        @error($input)
        <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
        </span>
        @enderror
       
</div>  

