<div>

{{-- @if($errors->any())
@foreach ($errors-> all() as $error)
<div>
    {{$error}}
</div>
    
@endforeach
@endif --}}




    <form action="submit" method="post">

        @csrf
        <label for="name">UserName : </label>
        <input type="text" name="name" id="name" placeholder="Enter the name">

        <span style="color: red">@error('name'){{$message}} @enderror</span>
         <br><br>

         <label for="email">Email : </label>
         <input type="text" name="email" id="email" placeholder="Enter the email">

         <span style="color: red">@error('email'){{$message}} @enderror</span>

       <br><br>

       <label for="city">City : </label>
       <input type="text" name="city" id="email" placeholder="Enter the city">

       <span style="color: red">@error('city'){{$message}} @enderror</span>

     <button >Submit</button>




    </form>



</div>