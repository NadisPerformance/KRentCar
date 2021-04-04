

    <div><label for="firstname"> firstname</label><input type="text" name="firstname" id="firstname" value="{{old('firstname',$user->firstname?? null)}}"></div>
    <div><label for="lastname"> lastname</label><input type="text" name="lastname" id="lastname" value="{{old('lastname',$user->lastname?? null)}}"></div>
    <div><label for="gender"> gender</label><input type="text" name="gender" id="gender" value="{{old('gender',$user->gender?? null)}}"></div>
    <div><label for="address"> address</label><input type="text" name="address" id="address" value="{{old('address',$user->address?? null)}}"></div>
    <div><label for="phone"> phone</label><input type="text" name="phone" id="phone" value="{{old('phone',$user->phone?? null)}}"></div>
    <div><label for="email"> email</label><input type="text" name="email" id="email" value="{{old('email',$user->email?? null)}}"></div>
    <div><label for="password"> password</label><input type="text" name="password" id="password" value="{{old('password',$user->password?? null)}}"></div>
  
 @if($errors->any())
 <ul>
 @foreach($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
</ul>
@endif
